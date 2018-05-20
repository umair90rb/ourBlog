@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">
      <h3 class="pb-3 mb-4 font-italic border-bottom">
        Create Post
      </h3>

    <form method="post" action="{{ route('storePost') }}">
      @include('layouts.errors')
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
      </div>


      <button type="submit" class="btn btn-primary">Publish</button>
</form>


</div>
@endsection