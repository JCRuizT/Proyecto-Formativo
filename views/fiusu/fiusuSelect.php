<div class="card">
 	<div class="card-header">
    	Fases
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th># 			</th>
				<th>Instructor </th>
				<th>Ficha</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->fiusu->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->FicUsu_Id . "','" . $filas->tblficha_FIc_Id . "','".$filas->tblusuario_Usu_Identificacion."'";?>

						<tr>
							<td>	<?php echo $filas->FicUsu_Id; ?> </td>
							<td>	<?php echo $filas->Usu_Nomb1." ".$filas->Usu_Nomb2." ".$filas->Usu_Ape1." ".$filas->Usu_Ape2; ?> </td>
							<td> <?php echo $filas->Pro_Codigo." ".$filas->Fic_NumeroFicha; ?></td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->FicUsu_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>