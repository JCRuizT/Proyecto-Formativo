<div class="card">
 	<div class="card-header">
    	Rol
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Rol 	</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->rol->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Rol_Id . "','" . $filas->Rol_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->Rol_Id; ?> </td>
							<td>	<?php echo $filas->Rol_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Rol_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>