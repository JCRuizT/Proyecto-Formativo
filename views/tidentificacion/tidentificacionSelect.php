<script src="views/assets/js/scripts.tidentificacion.js"></script>
<div class="card">
 	<div class="card-header">
    	Tipo de identificacion
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre tipo identificacion </th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->tidentificacion->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->TipIde_Id . "','" . $filas->TipIde_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->TipIde_Id; ?> </td>
							<td>	<?php echo $filas->TipIde_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->TipIde_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>