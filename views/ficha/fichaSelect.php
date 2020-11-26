<script src="views/assets/js/scripts.ficha.js"></script>
<div class="card">
 	<div class="card-header">
    	Ficha
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nº Ficha 	</th>
				<th> Estado</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->ficha->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Fic_Id . "','" . $filas->Fic_NumeroFicha . "','" . $filas->Fic_FechaInicio . "','" . $filas->Fic_FechaFin . "','" . $filas->TblProgramaFormacion_Pro_IdProg . "','" . $filas->TblEstado_Est_Id . "','" . $filas->TblTipoJornada_TipJor_Id . "','" . $filas->TblModalidad_Mod_Id . "','" . $filas->TblTipoOferta_TipOfe_Id . "'";?>

						<tr>
							<td>	<?php echo $filas->Fic_Id; ?> </td>
							<td>	<?php echo $filas->Fic_NumeroFicha; ?> </td>
							<td> <?php echo ($filas->TblEstado_Est_Id == 1) ? "Activo" : "Inactivo"; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="BorrarFicha(<?php echo $filas->Fic_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>