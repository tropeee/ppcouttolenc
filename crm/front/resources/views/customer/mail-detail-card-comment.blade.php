<div class="comment row no-gutters mb-6">
	<img src="{{$comment_img}}" class="col-auto avatar mr-2" />

	<div class="col">

		<div class="row no-gutters align-items-center">

			<span class="username font-weight-bold mr-1">{{$comment_nombre}}</span>

			<span class="time text-muted">{{$comment_fecha}}</span>

		</div>

		<div class="message">
			{{$slot}}
		</div>

{{--
		<div class="actions row no-gutters align-items-center justify-content-start">
			<a href="#" class="reply-button">Reply</a>

			<button type="button" class="btn btn-icon">
				<i class="icon icon-flag s-4"></i>
			</button>
		</div>
--}}
		<div class="divider my-8"></div>
	</div>
</div>