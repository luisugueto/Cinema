@extends('layouts.admin')

@section('content')
	<div id="msg-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
		<strong>Genero Agregado Correctamente</strong>
	</div>
	<div id="msg-error" class="alert alert-warning alert-dismissible" role="alert" style="display:none">
		<strong id="msg"></strong>
	</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token"> 
		@include('genero.form.genero')
		{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure=null)!!}
@stop

@section('scripts')
    {!!Html::script('js/ajax.js')!!}
@stop