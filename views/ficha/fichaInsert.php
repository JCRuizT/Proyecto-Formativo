
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="modal" tabindex="-1" role="dialog">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content animation-dark">
      			<div class="modal-header">
        			<h5 class="modal-title">Ficha</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          				<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">

      				<form name="formficha" class="form-cerrar" id="formficha" onSubmit="ValidarF(); return false">

						<input type="text" name="id" hidden>
						<div class="form-group">

							<label>Numero de Ficha</label>
							<input type="text" class="form-control" required name="fic_num">
						</div>
            <div class="form-group">

              <label>Fecha Inicio de Ficha</label>
              <input type="date" class="form-control" required name="fic_fecIn">
            </div>
            <div class="form-group">

              <label>Fecha Fin de Ficha</label>
              <input type="date" class="form-control" required name="fic_fecfin">
            </div>
            <div class="form-group">

              <label>Programa de formacion</label>
              <select name="fic_progra" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->pformacion->Select() as $filas): ?>
                <option value="<?php echo $filas->Pro_IdProg; ?>"> <?php echo $filas->Pro_NombreProg;?></option>

                <?php endforeach;?>
              </select>
            </div>
              <div class="form-group">

              <label>Estado</label>
              <select name="fic_est" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->estado->Select() as $est): ?>
                <option value="<?php echo $est->Est_Id; ?>"> <?php echo $est->Est_Estado;?></option>

                <?php endforeach;?>
              </select>
            </div>

               <div class="form-group">

              <label>Jornada</label>
              <select name="fic_jor" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->jornada->Select() as $jor): ?>
                <option value="<?php echo $jor->TipJor_Id; ?>"> <?php echo $jor->TipJor_Nombre;?></option>

                <?php endforeach;?>
              </select>
            </div>

               <div class="form-group">

              <label>Modalidad</label>
              <select name="fic_mod" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->modalidad->Select() as $mod): ?>
                <option value="<?php echo $mod->Mod_Id; ?>"> <?php echo $mod->Mod_Nombre;?></option>

                <?php endforeach;?>
              </select>
            </div>

             <div class="form-group">

              <label>Tipo Oferta</label>
              <select name="fic_ofer" class="form-control">
                <option value="">Seleccione </option>
               <?php foreach ($this->oferta->Select() as $ofer): ?>
                <option value="<?php echo $ofer->TipOfe_Id; ?>"> <?php echo $ofer->TipOfe_Nombre;?></option>

                <?php endforeach;?>
              </select>
            </div>


						<input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar" >

						</form>
      			</div>
    		</div>
  		</div>
	</div>

  <script>
   $('#btnguardar').submit(function(e) {
    e.preventDefault();
    // Coding
    $('#modal').modal('toggle'); //or  $('#IDModal').modal('hide');
    return false;
});

  </script>