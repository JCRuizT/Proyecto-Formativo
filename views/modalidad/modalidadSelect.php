<script src="views/assets/js/scripts.modalidad.js"></script>
<div class="card">
 	<div class="card-header">
    Modalidades
</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Modalidad 	</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->modalidad->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Mod_Id . "','" . $filas->Mod_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->Mod_Id; ?> </td>
							<td>	<?php echo $filas->Mod_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light" onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Mod_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>
 </div>
</div>