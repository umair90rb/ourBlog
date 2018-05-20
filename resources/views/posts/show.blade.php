@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">
            	{{$post->title}}
            </h2>
            	@if(count($post->tags))
				
					@foreach($post->tags as $tag)
						
					<strong class="d-inline-block mb-2 text-primary">{{$tag->name}}</strong>	

					@endforeach

            	@endif

            <p class="blog-post-meta">{{$post->user['name'] }} on {{$post->created_at->toFormattedDateString()}} </p>
            <p>
            	{{$post->body}}
            </p>
			
				<hr>
			<div class="comments">
				<ul class="list-group">
					@foreach($post->comments as $comment)
						<li class="list-group-item">
							{{auth()->user()['name']}}
								<em>
									{{$comment->created_at->diffForHumans()}}:
								</em>
							{{$comment->body}}
						</li>
					@endforeach
				</ul>
			</div>
				<hr>
			<div class="card">
				<div class="card-block"><br>
					<div class="container">
						<form action="{{$post->id}}/comments" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<textarea placeholder="Your Comment here!" name="body" class="form-control" required=""></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Add Comment</button>
							</div>
							@include('layouts/errors')
						</form>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection