<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Material de Apoyo</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formmapoyo" id="formmapoyo" class="form-cerrar" onSubmit="ValidarM(); return false">

						<input type="text" name="id" id="id" hidden>
						<div class="form-group">

							<label>Titulo</label>
							<input type="text" class="form-control" required name="mat_tit" id="mat_tit">
						</div>

            <div class="form-group">

              <label>Fecha Creacion</label>
              <input type="date" class="form-control" required name="mat_fec" id="mat_fec">
            </div>

            <div class="form-group">
              <label>Descripcion</label>
              <input type="text" class=" form-control" required name="mat_desc" id="mat_desc">
            </div>

            <div class="form-group">
              <label>Archivo </label>
              <input type="file"  class=" form-control"  name="mat_ruta" id="mat_ruta">
              <input type ="hidden"  name="mat_ruta2"  id="mat_ruta2">
            </div>

       <div class="form-group">

              <label>Instructor</label>
              <select name="mat_usu"  id="mat_usu" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->usuario->Select() as $filas): ?>
                <option value="<?php echo $filas->Usu_Identificacion; ?>"> <?php echo $filas->Usu_Nomb1." ".$filas->Usu_Nomb2." ".$filas->Usu_Ape1." ".$filas->Usu_Ape2;?></option>

                <?php endforeach;?>
              </select>
            </div>

           <div class="form-group">
              <label>Ficha</label>
              <select name="mat_fic" id="mat_fic" class="form-control">
                <option value="">Seleccione</option>
                <?php foreach ($this->ficha->Select() as $fic): ?>
                  <option value="<?php  echo $fic->Fic_Id;?>"><?php echo $fic->Pro_Codigo." ".$fic->Fic_NumeroFicha;?></option>
                <?php endforeach;?>
              </select>
            </div>
            <input type="text" name="mat_fase" id="mat_fase" value="<?php echo$this->fase2;?>" hidden>

						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar">

						</form>
      			</div>
    		</div>
  		</div>
	</div>