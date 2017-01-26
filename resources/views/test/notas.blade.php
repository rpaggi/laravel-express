
@extends('template')

@section('title')
	Notas
@stop

@section('content')
	<p>Anotações</p>
	<ul>
		@foreach($notas as $nota)
			<li>{{ $nota }}</li>
		@endforeach 
	</ul>
@stop