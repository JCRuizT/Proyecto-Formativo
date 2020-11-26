<div class="card">
 	<div class="card-header">
    	Programas de formacion
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Programa de formacion </th>
				<th>Codigo	</th>
				<th>Version	</th>
				<th>Duracion </th>
				<th>Tipo Programa Formacion	</th>
				<th>Estado		</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->pformacion->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Pro_IdProg . "','" . $filas->Pro_NombreProg . "','" . $filas->Pro_Codigo . "','" . $filas->Pro_Version . "','" . $filas->Pro_Duracion . "','" . $filas->Tip_Prog . "','" . $filas->TblEstado_Est_Id . "'";?>

						<tr>
							<td>	<?php echo $filas->Pro_IdProg; ?> </td>
							<td>	<?php echo $filas->Pro_NombreProg; ?> </td>
							<td>	<?php echo $filas->Pro_Codigo; ?> </td>
							<td>	<?php echo $filas->Pro_Version; ?> </td>
							<td>	<?php echo $filas->Pro_Duracion; ?> </td>
							<td>	<?php echo $filas->Tip_Prog; ?> </td>
							<td>	<?php echo $filas->TblEstado_Est_Id; ?> </td>

							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Pro_IdProg; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>