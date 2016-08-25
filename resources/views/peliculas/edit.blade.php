@extends('layouts.admin')

@section('content')
	{!!Form::model($movie, ['route'=>['movie.update', $movie->id], 'method'=>'PUT', 'files'=>true])!!}
		@include('peliculas.forms.pelicula')
		{!!Form::submit('Actualizar', ['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}

	{!!Form::open(['route'=>['movie.destroy', $movie->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar', ['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}
@stop