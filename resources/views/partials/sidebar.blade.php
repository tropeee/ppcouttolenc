<div class="nav-container nav-container--sidebar">
	<div class="nav-sidebar-column bg--dark">
		<div class="text-center text-block">
			<a href="{{ route('inicio') }}">
				<img alt="logo" class="logo" src="{{ asset('img/lpb.png') }}" />
			</a>
			<p>
				Escuchar para
				<em>legislar.</em>
			</p>
		</div>
		<hr>
		<div class="text-block">
			<ul class="menu-vertical">
				<li>
					<a href="{{ route('inicio') }}">
						Inicio
					</a>
				</li>
				<li>
					<a href="{{ route('blog') }}">
						Blog
					</a>
				</li>
				<li>
					<a href="{{ route('proyectos') }}">
						Proyectos
					</a>
				</li>
				<li>
					<a href="{{ route('decalogo') }}">
						Decálogo COVID-19
					</a>
				</li>
				<li class="dropdown">
					<span class="dropdown__trigger">Transparencia</span>
					<div class="dropdown__container">
						<div class="dropdown__content">
							<ul class="menu-vertical">
								<li>
									<a href="{{ route('informe1') }}">
										Primer Informe
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="{{ route('atencion') }}">
						Atención Ciudadana
					</a>
				</li>
			</ul>
		</div>

		<hr>
		<div>
			<ul class="social-list list-inline list--hover">
				<li>
					<a href="https://twitter.com/pepecouttolenc" target="_blank">
						<i class="socicon socicon-twitter icon icon--xs"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/PepeCouttolenc/" target="_blank">
						<i class="socicon socicon-facebook icon icon--xs"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/pepecouttolenc/" target="_blank">
						<i class="socicon socicon-instagram icon icon--xs"></i>
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/channel/UCIUz-JrZUuEIQ9qXgLDuYDA" target="_blank">
						<i class="socicon socicon-youtube icon icon--xs"></i>
					</a>
				</li>
			</ul>
			<div>
				<span class="type--fine-print type--fade">
					&copy;
					<span class="update-year"></span> Pepe Couttolenc
				</span>
			</div>
		</div>
	</div>
	<div class="nav-sidebar-column-toggle visible-xs visible-sm" data-toggle-class=".nav-sidebar-column;active">
		<i class="stack-menu"></i>
	</div>
</div>