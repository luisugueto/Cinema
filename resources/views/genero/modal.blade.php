<div id="modal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Actualizar Genero</h4>
	      </div>
		      <div class="modal-body">
		      	  <input type="hidden" id="token" value="{{ csrf_token() }}" name="_token">
		      	  <input type="hidden" id="id">
		      	  @include('genero.form.genero')
		      </div>
		      <div class="modal-footer">
		      	{!! link_to('#', $title="Actualizar", $attributtes=['id'=>'actualizar', 'class'=>'btn btn-primary'], $secure=null) !!}
		      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->