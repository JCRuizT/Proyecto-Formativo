<script src="views/assets/js/scripts.jornada.js"></script>
<div class="card">
 	<div class="card-header">
    	Jornadadas
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Jornada 	</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->jornada->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->TipJor_Id . "','" . $filas->TipJor_Nombre . "'";?>

						<tr>
							<td>	<?php echo $filas->TipJor_Id; ?> </td>
							<td>	<?php echo $filas->TipJor_Nombre; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-primary"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="BorrarJornada(<?php echo $filas->TipJor_Id; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>