@extends('layout.app')

@section('content')
	
	<section class="cover height-100 imagebg text-center" data-overlay="2" id="home">
		<div class="background-image-holder">
			<img alt="background" src="{{asset('img/decalogo-banner.jpg')}}" />
		</div>
		<div class="container pos-vertical-center">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1--large type--uppercase">
						<em>
							<strong>DECÁLOGO</strong>
						</em>
					</h1>
					<p class="lead">PARA ENFRENTAR LA CRISIS ECONÓMICA POR EL COVID-19 EN EL ESTADO DE MÉXICO</p>
				</div>
			</div>
		</div>
	</section>

	<section >
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<p class="lead">
						El Estado de México es una de las Entidades Federativas más pobladas en México, con más de 16 millones de habitantes y con características tan específicas como tener dentro de su población, 42.7% que vive en pobreza, 4.9% en pobreza extrema, 8.7% es vulnerable por ingresos y un 28.1% tiene carencias sociales. Bajo estas condiciones, se hace necesario tomar medidas urgentes para enfrentar las consecuencias de la crisis sanitaria del COVID-19.
					</p>
					<h2 class="text-center">Así que proponemos</h2>
				</div>
			</div>
			<!--end of row-->
		</div>
		<!--end of container-->
	</section>

	<section class="bg--secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca1.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Banco de alimentos</h5>
							<p>
								Acelerar la implementación de la Ley para la Recuperación y Aprovechamiento de Alimentos en el Estado de México, mejor conocida como “Bancos de Alimentos” para que se suministre canasta básica a la población más vulnerable, de inmediato, en el Estado.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca2.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Fondo Estatal de Emergencias Sanitarias</h5>
							<p>
								Crear un Fondo Estatal de Emergencias Sanitarias y de Salud Pública en el que se cuente con recursos suficientes para fortalecer al Sistema Estatal de Salud.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca3.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Plan Estatal de Infraestructura</h5>
							<p>
								Elaborar un Plan Estatal de Infraestructura en el que se contemple a través de la construcción de obra pública, reactivar la inversión pública y privada, así como, fomentar el empleo en la entidad.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca4.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Reducir pago de impuesto</h5>
							<p>
								Reducir en un 50% el pago del Impuesto Sobre Erogaciones por Remuneraciones al Trabajo Personal para los meses de abril, mayo y junio del presente ejercicio fiscal.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca5.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Ampliar beneficios y plazos</h5>
							<p>
								Ampliar los beneficios y plazos para el pago de todas las contribuciones a nivel estatal y municipal
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca6.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Programa de reactivación económica </h5>
							<p>
								Crear un programa de reactivación económica para la Micro, Pequeña y Mediana empresa, a través de financiamiento, promoción del consumo y proveeduría local.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca7.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Becas</h5>
							<p>
								Otorgar becas permanentes a todos los estudiantes de nivel medio superior y superior de la entidad.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca8.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Suspensión del pago por servicio de agua</h5>
							<p>
								Suspender el pago de derechos por servicio de agua potable en todos los municipios de la Entidad por los meses de abril, mayo y junio, así como extender los beneficios fiscales por el pago anual de este derecho hasta el 30 de agosto de 2020.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/deca9.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Rembolso del impuesto predial</h5>
							<p>
								Otorgar un rembolso del 30% del Impuesto Predial a los contribuyentes que cuenten con inmuebles destinados a actividades empresariales y comerciales que hayan detenido sus actividades. Así como un 25% a los propietarios de inmuebles donde se ubiquen empresas y comercios que por su naturaleza mantengan sus actividades durante la contingencia sanitaria.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="feature feature-1">
						<img alt="Image" src="{{asset('img/decalogo/decaA.jpg')}}"/>
						<div class="feature__body boxed boxed--border">
							<h5>Sin multas ni recargos</h5>
							<p>
								No generar multas y recargos sobre impuestos y derechos estatales al igual que municipales en todas sus vertientes, durante la contingencia sanitaria.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
