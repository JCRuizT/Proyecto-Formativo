
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Foro</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formforo" class="form-cerrar" id="formforo" onSubmit="ValidarF(); return false">

						<input type="text" name="id" hidden>
						<div class="form-group">

							<label>Nombre Foro</label>
							<input type="text" class="form-control" required name="for_nom">
              
						</div>
            <div class="form-group">

             <label>Cuerpo Foro</label>
              <input type="text" class="form-control" required name="for_cue" placeholder="De que tratará el foro" style="width: 465px ; height: 150px">
            </div>
            <div class="form-group">

              <label>Fecha Creacion de foro</label>
              <input type="date" class="form-control" required name="for_fec">
            </div>
                <div class="form-group">

              <label>Usuario Que publica el foro</label>
              <select name="for_usu" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->usuario->Select() as $filas): ?>
                <option value="<?php echo $filas->Usu_Identificacion; ?>"> <?php echo $filas->Usu_Nomb1." ".$filas->Usu_Nomb2." ".$filas->Usu_Ape1." ".$filas->Usu_Ape2;?></option>

                <?php endforeach;?>
              </select>
            </div>

             <div class="form-group">

              <label>Estado</label>
              <select name="for_est" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->estado->Select() as $est): ?>
                <option value="<?php echo $est->Est_Id; ?>"> <?php echo $est->Est_Estado;?></option>

                <?php endforeach;?>
              </select>
            </div>

            <div class="form-group">
              <label>Ficha</label>
              <select name="for_fic" class="form-control">
                <option value="">Seleccione</option>
                <?php foreach ($this->ficha->Select() as $fich): ?>
                <option value="<?php echo $fich->Fic_Id; ?>"><?php echo $fich->Pro_Codigo." ".$fich->Fic_NumeroFicha;?></option>
                <?php endforeach; ?>
              </select>
            </div>
                
                <label name="asd"></label>


						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar" >

						</form>
      			</div>
    		</div>
  		</div>
	</div>

  </script>