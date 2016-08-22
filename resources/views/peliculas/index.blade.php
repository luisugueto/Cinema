@extends('layouts.admin')

@section('content')
	<div id="msg-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Genero Editado Correctamente</strong>
	</div>
	<div id="msg-delete" class="alert alert-warning alert-dismissible" role="alert" style="display:none">
		<strong>Genero Eliminado Correctamente</strong>
	</div>
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
			<td>Editar</td>
		</tbody>
	@endforeach
	</table>
 	@include('genero.modal')
@stop