@if($flash = session('message'))
	<div id="flash-message" class="alert alert-success">
		{{$flash}}
	</div>
@endif