<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Asociar Instructor</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formfiu" id="formfiu" class="form-cerrar" onSubmit="Validar(); return false">

						<input type="text" name="id" hidden>
					 
 <div class="form-group">

              <label>Instructor</label>
              <select name="fiusu_usu" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->usuario->Select() as $filas): ?>
                <option value="<?php echo $filas->Usu_Identificacion; ?>"> <?php echo $filas->Usu_Nomb1." ".$filas->Usu_Nomb2." ".$filas->Usu_Ape1." ".$filas->Usu_Ape2;?></option>

                <?php endforeach;?>
              </select>
            </div>

                <div class="form-group">
              <label>Ficha</label>
              <select name="fiusu_fic" id="fiusu_fic" class="form-control">
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