<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Programas de formacion</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formpformacion" id="formpformacion" class="form-cerrar" onSubmit="Validar(); return false">

						<input type="text" name="id" hidden>
						<div class="form-group">

							<label>Nombre</label>
							<input type="text" class="form-control" required name="nombre">

						</div>

            <div class="form-group">
               <label>Codigo</label>
              <input type="text" class="form-control" required name="codigo">
            </div>

            <div class="form-group">
              <label>Versión</label>
              <input type="text" class="form-control" required name="version">
            </div>

            <div class="form-group">

               <label>Duracion</label>
              <input type="text" class="form-control" required name="duracion">
            </div>

            <div class="form-group">

              <select class="form-control">
                <option value="0">Julio</option>
              </select>
            </div>

						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar">

						</form>
      			</div>
    		</div>
  		</div>
	</div>