<nav id="toolbar" class="bg-white">

	<div class="row no-gutters align-items-center flex-nowrap">

		<div class="col">

			<div class="row no-gutters align-items-center flex-nowrap">

				<button type="button" class="toggle-aside-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="aside">
					<i class="icon icon-menu"></i>
				</button>

				<div class="toolbar-separator d-block d-lg-none"></div>

				<!-- div class="shortcuts-wrapper row no-gutters align-items-center px-0 px-sm-2">

					<div class="shortcuts row no-gutters align-items-center d-none d-md-flex">

						<a href="apps-chat.html" class="shortcut-button btn btn-icon mx-1">
							<i class="icon icon-hangouts"></i>
						</a>

						<a href="apps-contacts.html" class="shortcut-button btn btn-icon mx-1">
							<i class="icon icon-account-box"></i>
						</a>

						<a href="apps-mail.html" class="shortcut-button btn btn-icon mx-1">
							<i class="icon icon-email"></i>
						</a>

					</div>

					<div class="add-shortcut-menu-button dropdown px-1 px-sm-3">

						<div class="dropdown-toggle btn btn-icon" role="button" id="dropdownShortcutMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="icon icon-star text-amber-600"></i>
						</div>

						<div class="dropdown-menu" aria-labelledby="dropdownShortcutMenu">

							<a class="dropdown-item" href="#">
								<div class="row no-gutters align-items-center justify-content-between flex-nowrap">
									<div class="row no-gutters align-items-center flex-nowrap">
										<i class="icon icon-calendar-today"></i>
										<span class="px-3">Calendar</span>
									</div>
									<i class="icon icon-pin s-5 ml-2"></i>
								</div>
							</a>

							<a class="dropdown-item" href="#">
								<div class="row no-gutters align-items-center justify-content-between flex-nowrap">
									<div class="row no-gutters align-items-center flex-nowrap">
										<i class="icon icon-folder"></i>
										<span class="px-3">File Manager</span>
									</div>
									<i class="icon icon-pin s-5 ml-2"></i>
								</div>
							</a>

							<a class="dropdown-item" href="#">
								<div class="row no-gutters align-items-center justify-content-between flex-nowrap">
									<div class="row no-gutters align-items-center flex-nowrap">
										<i class="icon icon-checkbox-marked"></i>
										<span class="px-3">To-Do</span>
									</div>
									<i class="icon icon-pin s-5 ml-2"></i>
								</div>
							</a>

						</div>
					</div>
				</div -->

				<div class="toolbar-separator"></div>

			</div>
		</div>

		<div class="col-auto">

			<div class="row no-gutters align-items-center justify-content-end">

				<div class="user-menu-button dropdown">

					<div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button" id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="avatar-wrapper">
							<img class="avatar" src="{{ asset('assets/images/avatars/profile.jpg') }}">
							<i class="status text-green icon-checkbox-marked-circle s-4"></i>
						</div>
						@auth
							<span class="username mx-3 d-none d-md-block">{{Auth::user()->name}}</span>
						@endauth
						@guest
							<span class="username mx-3 d-none d-md-block">John Doe</span>
						@endguest
					</div>

					<div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<i class="icon-account"></i>
								<span class="px-3">Perfil</span>
							</div>
						</a>

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<i class="icon-email"></i>
								<span class="px-3">Mensajes</span>
							</div>
						</a>

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<i class="status text-green icon-checkbox-marked-circle"></i>
								<span class="px-3">En línea</span>
							</div>
						</a>

						<div class="dropdown-divider"></div>
						<form id="form_logout" name="form_logout" action="{{route('logout')}}" method="POST">
							@csrf
						</form>
						<button type="submit" form="form_logout" class="dropdown-item">
							<div class="row no-gutters align-items-center flex-nowrap">
								<i class="icon-logout"></i>
								<span class="px-3">Salir</span>
							</div>
						</button>

					</div>
				</div>
				
				<!-- div class="toolbar-separator"></div>

				<button type="button" class="search-button btn btn-icon">
					<i class="icon icon-magnify"></i>
				</button>

				<div class="toolbar-separator"></div>

				<div class="language-button dropdown">

					<div class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4" role="button" id="dropdownLanguageMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="row no-gutters align-items-center">
							<img class="flag mr-2" src="../assets/images/flags/us.png">
							<span class="d-none d-md-block">EN</span>
						</div>
					</div>

					<div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<img class="flag" src="../assets/images/flags/us.png">
								<span class="px-3">English</span>
							</div>
						</a>

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<img class="flag" src="../assets/images/flags/es.png">
								<span class="px-3">Spanish</span>
							</div>
						</a>

						<a class="dropdown-item" href="#">
							<div class="row no-gutters align-items-center flex-nowrap">
								<img class="flag" src="../assets/images/flags/tr.png">
								<span class="px-3">Turkish</span>
							</div>
						</a>
					</div>
				</div>

				<div class="toolbar-separator"></div>

				<button type="button" class="quick-panel-button btn btn-icon" data-fuse-bar-toggle="quick-panel-sidebar">
					<i class="icon icon-format-list-bulleted"></i>
				</button -->
			</div>
		</div>
	</div>
</nav>