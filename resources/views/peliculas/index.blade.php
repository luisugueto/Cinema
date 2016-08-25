@extends('layouts.admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Genero</th>
			<th>Direccion</th>
			<th>Caratula</th>
			<th>Operaciones</th>
		</thead>
	@foreach($movies as $movie)
		<tbody>
			<td>{{$movie->name}}</td>
			<td>{{$movie->genre}}</td>
			<td>{{$movie->direction}}</td>
			<td>
				<img src="movies/{{$movie->path}}" alt="" style="width: 100px; height:100px;">
			</td>
			<td>{!!link_to_route('movie.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}</td>
		</tbody>
	@endforeach
	</table>
 	@include('genero.modal')
@stop