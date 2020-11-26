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
              <br>
              <br>
              <label>Codigo</label>
              <input type="text" class="form-control" required name="codigo">
              <br>
              <br>
              <label>Version</label>
              <input type="text" class="form-control" required name="version">
              <br>
              <br>
              <label>Duracion</label>
              <input type="text" class="form-control" required name="duracion">
              <br>
              <br>
              <label>Tipo Programa Formacion</label>
              <br><br>
              <select name="tipoPrograma" id="tipoPrograma">
                <option value="1">Tecnologia</option>
                <option value="2">Tecnico</option>
                <option value="3">Especializacion</option> 
              </select>
              <br>
              <br>
              <label>Estado</label>
              <br><br>
              <select name="estado" id="estado">
                <option value="1">Activo</option>
                <option value="2">Inactivo</option> 

              </select>
						</div>

						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar">

						</form>
      			</div>
    		</div>
  		</div>
	</div>