<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Horario</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formhorario" id="formhorario" class="form-cerrar" onSubmit="ValidarH(); return false">

						<input type="text" name="id" id="id" hidden>
						<div class="form-group">

							<label>Fecha Inicio De trimestre</label>
							<input type="date" class="form-control" required name="hor_trini" id="hor_trini">
						</div>

            <div class="form-group">

              <label>Fecha Fin De trimestre</label>
              <input type="date" class="form-control" required name="hor_trifin" id="hor_trifin">
            </div>

            <div class="form-group">
              <label>Nº Trimestre</label>
              <input type="text" class=" form-control" required name="hor_triNo" id="hor_triNo">
            </div>

            <div class="form-group">
              <label>Archivo PDF</label>
              <input type="file"  class=" form-control"  name="hor_ruta" id="hor_ruta" accept=".pdf">
              <input type ="hidden"  name="hor_ruta2"  id="hor_ruta2">
            </div>

      


            <div class="form-group">
              <label>Ficha</label>
              <select name="hor_fic" id="hor_fic" class="form-control">
                <option value="">Seleccione</option>
                <?php foreach ($this->ficha->Select() as $fic): ?>
                  <option value="<?php  echo $fic->Fic_Id;?>"><?php echo $fic->Pro_Codigo." ".$fic->Fic_NumeroFicha;?></option>
                <?php endforeach;?>
              </select>
            </div>

						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar">

						</form>
      			</div>
    		</div>
  		</div>
	</div>