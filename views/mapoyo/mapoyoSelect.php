<div class="card">
 	<div class="card-header">
    	Ficha
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th># 			</th>
				<th>Titulo 	</th>
				<th>Fecha Creacion </th>
				<th>Mat_Descripcion</th>
				<th>Instructor</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla 

-->
		<tbody>
				<?php foreach ($this->mapoyo->Select($this->fase2) as $filas): ?>


					 	<?php $grupal = "'" . $filas->Mat_Id . "','" . $filas->Mat_Titulo . "','" . $filas->Mat_FechaCreacion . "','" . $filas->Mat_Descripcion . "','" . $filas->Mat_Ruta . "','" . $filas->TblUsuario_Usu_Id. "','".$filas->MacFic_Id."','".$filas->TblFase_Fase_Id."'";

					 		 $borr = "'".$filas->Mat_Id."','".$filas->TblFase_Fase_Id."','".$filas->Mat_Ruta."'";

//$id = $filas->For_IdForo;
?>


						<tr>
							<td>	<?php echo $filas->Mat_Id; ?> </td>
							<td>	<?php echo $filas->Mat_Titulo; ?> </td>
							<td><?php echo $filas->Mat_FechaCreacion; ?></td>
							<td><?php echo $filas->Mat_Descripcion ?></td>
							<td> <?php echo $filas->Usu_Nomb1." ".$filas->Usu_Nomb2." ".$filas->Usu_Ape1." ".$filas->Usu_Ape2; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="BorrarM(<?php echo $borr; ?>)"> Eliminar </button>    </td>
							
						</tr>
				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>