<div class="card">
 	<div class="card-header">
    	Fases
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Fase </th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->fase->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Fase_Id . "','" . $filas->Fase_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->Fase_Id; ?> </td>
							<td>	<?php echo $filas->Fase_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Fase_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>