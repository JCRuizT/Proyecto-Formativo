<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Anuncio</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formanuncio" id="formanuncio" class="form-cerrar" onSubmit="Validar(); return false">

						<input type="text" name="id" hidden>
						<div class="form-group">

							<label>Titulo</label>
							<input type="text" class="form-control" required name="titulo">
						</div>

              <div class="form-group">

              <label>Descripcion</label>

              <textarea class="form-control" rows="10" required name="descripcion"></textarea>
            </div>

						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar">

						</form>
      			</div>
    		</div>
  		</div>
	</div>