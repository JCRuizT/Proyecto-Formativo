<div class="card">
 	<div class="card-header">
    	Ficha
	</div>
<div class="card-body">
<table id="table-data">
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Foro 	</th>
				<th>Publicado por </th>
				<th>Fecha Creacion</th>
				<th>Ficha</th>
				<th> Estado</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
				<th>Ver foro</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->foro->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->For_IdForo . "','" . $filas->For_NombreForo . "','" . $filas->For_CuerpoForo . "','" . $filas->For_Fecha . "','" . $filas->TblUsuario_Usu_Id . "','" . $filas->TblEstado_Est_Id . "','" . $filas->TblFicha_Fic_Id . "'";
$id = $filas->For_IdForo;
?>


						<tr>
							<td>	<?php echo $filas->For_IdForo; ?> </td>
							<td>	<?php echo $filas->For_NombreForo; ?> </td>
							<td><?php echo $filas->Usu_Nomb1 . " " . $filas->Usu_Nomb2 . " " . $filas->Usu_Ape1 . " " . $filas->Usu_Ape2 ?></td>
							<td><?php echo $filas->For_Fecha ?></td>
							<td><?php echo $filas->Pro_Codigo . " " . $filas->Fic_NumeroFicha ?></td>
							<td> <?php echo ($filas->TblEstado_Est_Id == 1) ? "Activo" : "Inactivo"; ?> </td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="BorrarForo(<?php echo $filas->For_IdForo; ?>);"> Eliminar </button>    </td>
							<td><a href="main.php?ctrl=pforo&acti=index&pid=<?php echo $filas->For_IdForo ?>"> <button class="btn btn-warning">Ver Foro</button></a></td>
						</tr>
				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>