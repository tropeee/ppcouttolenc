<div class="card">
	<header class="row no-gutters align-items-center justify-content-between p-4">
		<div class="user col">
			<div class="row no-gutters align-items-center justify-content-start">
				<img class="avatar col-auto mr-2" src="{{$card_img_profile}}">
				<div class="col">
					<div class="title font-weight-bold">
						<span class="username">{{$card_user_name}}</span>
						<span> - {{$card_tipo_solicitud}}</span>
					</div>
					<div class="time text-muted">{{$card_fecha}}</div>
					<!-- div class="time text-muted">{{$card_fecha}}</div -->
				</div>
			</div>
		</div>
		<div class="col-auto">
			{{$card_action_buttons}}
		</div>
	</header>
	<div class="content">
		<div class="labels py-2 px-2">
			<div class="label badge badge-default text-white" style='background-color: #{{ $card_status_color }};'>
				{{ $card_status_name }}
			</div>
		</div>
		{{$card_content}}
	</div>
	<footer class="bg-light p-4">
		<div class="comment-count mb-4">
			{{$card_comments_count}} respuestas
		</div>

		{{$slot}}

		<form class="form" method="POST" action="{{route('respuestas.user')}}">
			<div class="reply row no-gutters">
				<img src="../assets/images/avatars/garry.jpg" class="col-auto avatar mr-2" />
				<div class="col">
					@csrf
					<input type="hidden" name="solicitud" id="solicitud" value="{{$card_solicitud_id}}">
					<textarea name="respuesta" id="respuesta" class="w-100 p-4" placeholder="Redacte la respuesta al ciudadano..." required></textarea>
				</div>
			</div>
			<div class="row no-gutters align-items-center justify-content-between p-2">
				<div class="row no-gutters">
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input input-resuelto" name="resuelto" id="resuelto" value="1"/>
							<span class="checkbox-icon"></span>
							<span>El asunto ha sido resuelto</span>
						</label>
					</div>
				<!--
					<button type="button" class="btn btn-icon" aria-label="insert photo">
						<i class="icon icon-file-image-box"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="add person">
						<i class="icon icon-person-plus"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="add person">
						<i class="icon icon-map-marker"></i>
					</button>
				-->
				</div>
				<button type="submit" class="btn btn-secondary" aria-label="responder">
					Responder
				</button>
			</div>

		</form>
	</footer>
</div>