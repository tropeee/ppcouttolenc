<?php

namespace App\Exceptions;

use Exception;
use App\Traits\ApiResponser;
use Illuminate\Database\QueryException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{

	use ApiResponser;

	/**
	 * A list of the exception types that are not reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		//
	];

	/**
	 * A list of the inputs that are never flashed for validation exceptions.
	 *
	 * @var array
	 */
	protected $dontFlash = [
		'password',
		'password_confirmation',
	];

	/**
	 * Report or log an exception.
	 *
	 * @param  \Exception  $exception
	 * @return void
	 */
	public function report(Exception $exception)
	{
		parent::report($exception);
	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Exception  $exception
	 * @return \Illuminate\Http\Response
	 */
	public function render($request, Exception $exception)
	{
		if ($exception instanceof ValidationException) {
			$this->convertValidationExceptionToResponse($exception, $request);
		}

		if ($exception instanceof ModelNotFoundException) {
			$modelo = strtolower(class_basename($exception->getModel()));
			return $this->errorResponse("No existe ninguna instancia de {$modelo} con el ID proporcionado", 404);
		}

		if ($exception instanceof AuthenticationException) {
			return $this->unauthenticated($request, $exception);
		}

		if ($exception instanceof AuthorizationException) {
			return $this->errorResponse("No tiene permisos para ejecutar esta acción", 403);
		}

		if ($exception instanceof NotFoundHttpException) {
			return $this->errorResponse("No se encontró la URL especificada", 404);
		}

		if ($exception instanceof MethodNotAllowedHttpException) {
			return $this->errorResponse("El método solicitado en la petición no es válido", 405);
		}

		if ($exception instanceof HttpException) {
			return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
		}

		if ($exception instanceof TokenMismatchException) {
			return redirect()->back()->withInput();
		}

		if ($exception instanceof QueryException) {
			$numero = $exception->errorInfo[1];
			if($numero == 1451){
				return $this->errorResponse("No se puede eliminar el recurso porque está relacionado con algún otro.",409);
			}
		}

		if(config('app.debug')){
			return parent::render($request, $exception);
		}

		return $this->errorResponse("Falla inesperada. Por favor intente más tarde",500);
	}

	/**
	 * Create a response object from the given validation exception.
	 *
	 * @param  \Illuminate\Validation\ValidationException  $e
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function convertValidationExceptionToResponse(ValidationException $e, $request)
	{
		$errors = $e->validator->errors()->getMessages();

		// if ($e->response) {
		//	 return $e->response;
		// }

		// return $request->expectsJson()
		//			 ? $this->invalidJson($request, $e)
		//			 : $this->invalid($request, $e);
		if ($this->isFrontEnd($request)) {
			return $request->ajax() ? response()->json($errors, 422) : redirect()->back()->withInput()->withErrors($errors);
		}
		return $this->errorResponse($errors, 422);
	}

	/**
	 * Convert an authentication exception into a response.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Illuminate\Auth\AuthenticationException  $exception
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	protected function unauthenticated($request, AuthenticationException $exception)
	{
		// return $request->expectsJson()
		//			 ? response()->json(['message' => $exception->getMessage()], 401)
		//			 : redirect()->guest($exception->redirectTo() ?? route('login'));
		if ($this->isFrontEnd($request)) {
			return redirect()->guest( route('login') );
		}
		return $this->errorResponse("No autenticado", 401);
	}

	private function isFrontEnd($request){
		return $request->acceptsHtml() && collect($request->route()->middleware())->contains('web');
	}
}
