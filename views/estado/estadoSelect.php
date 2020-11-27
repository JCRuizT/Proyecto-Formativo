<script src="views/assets/js/scripts.estado.js"></script>
<div class="card">
 	<div class="card-header">
    	Lista de estados
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Estado 	</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->estado->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Est_Id . "','" . $filas->Est_Estado . "'";?>

						<tr>
							<td>	<?php echo $filas->Est_Id; ?> </td>
							<td>	<?php echo $filas->Est_Estado; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Est_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>