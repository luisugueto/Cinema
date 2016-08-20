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
			<th>Operaciones</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>
 	@include('genero.modal')
@stop

@section('scripts')
    {!!Html::script('js/ajax2.js')!!}
@stop