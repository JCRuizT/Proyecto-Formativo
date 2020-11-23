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
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->pformacion->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Pro_IdProg . "','" . $filas->Pro_NombreProg . "'";?>

						<tr>
							<td>	<?php echo $filas->Pro_IdProg; ?> </td>
							<td>	<?php echo $filas->Pro_NombreProg; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Pro_IdProg; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>