@extends('template')

@section('title')
	Posts
@endsection

@section('content')
	<h1>Posts</h1>
	<br><hr>
	@foreach($posts as $post)
		<h2>{{ $post->title }}</h2>
		<p>{{ $post->content }}</p>

		<p><b>Tags: </b>
		@foreach($post->tags as $tag)
			{{ $tag->name }}; 
		@endforeach
		</p>

		<h3>Comments</h3>
		@foreach($post->comments as $comment)
			<p>Name: {{ $comment->name }}<br>
			   Email: {{ $comment->email }}<br>
			   Comment: {{ $comment->comment }}
			</p>
		@endforeach
		<hr>
	@endforeach 
@endsection