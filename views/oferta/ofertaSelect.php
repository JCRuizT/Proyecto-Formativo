<script src="views/assets/js/scripts.oferta.js"></script>
<div class="card">
 	<div class="card-header">
    	Oferta
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Oferta</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->oferta->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->TipOfe_Id . "','" . $filas->TipOfe_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->TipOfe_Id; ?> </td>
							<td>	<?php echo $filas->TipOfe_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->TipOfe_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>