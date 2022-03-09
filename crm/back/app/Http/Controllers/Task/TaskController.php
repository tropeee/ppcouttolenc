<?php

namespace App\Http\Controllers\Task;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class TaskController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Task::all();
        return $this->showAll($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'image' => 'image'
        ];

        $this->validate($request, $rules);

        $campos = $request->all();

        $nuevo = Task::create( $campos );
        return $this->showOne($nuevo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return $this->showOne($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->fill(
            $request->only([
                'name',
                'description'
            ])
        );

        if ($task->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $task->save();

        return $this->showOne($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return $this->showOne($task);
    }
}
