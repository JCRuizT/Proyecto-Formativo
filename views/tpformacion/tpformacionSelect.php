<script src="views/assets/js/scripts.tpformacion.js"></script>
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
				<?php foreach ($this->tpformacion->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Tip_Prog . "','" . $filas->Tip_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->Tip_Prog; ?> </td>
							<td>	<?php echo $filas->Tip_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Tip_Prog; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>