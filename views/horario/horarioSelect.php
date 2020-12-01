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
				<th>Fecha Inicio  	</th>
				<th>Fecha FIn </th>
				<th>Nº Trimestre</th>
				<th>Nombre Pdf</th>
				<th> FIcha</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
				<th>Descargar</th>
				<th>Visualizar</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla 

-->
		<tbody>
				<?php foreach ($this->horario->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Hor_Id . "','" . $filas->Hor_TrimestreInicio . "','" . $filas->Hor_TrimestreFin . "','" . $filas->Hor_TrimestreNumero . "','" . $filas->Hor_Ruta . "','" . $filas->TblFicha_Fic_Id. "'";

					 		 $borr = "'".$filas->Hor_Id."','".$filas->Hor_Ruta."'";

//$id = $filas->For_IdForo;
?>


						<tr>
							<td>	<?php echo $filas->Hor_Id; ?> </td>
							<td>	<?php echo $filas->Hor_TrimestreInicio; ?> </td>
							<td><?php echo $filas->Hor_TrimestreFin; ?></td>
							<td><?php echo $filas->Hor_TrimestreNumero ?></td>
							<td> <?php echo $filas->Hor_Ruta; ?> </td>
							<td><?php echo $filas->Pro_Codigo . " " . $filas->Fic_NumeroFicha ?></td>
							<td> 	<button data-toggle="modal" data-target="#modal" class="btn btn-light"onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button class="btn btn-danger" onclick="BorrarHorario(<?php echo $borr; ?>)"> Eliminar </button>    </td>
							<td><a href="views/assets/horarios/<?php echo $filas->Hor_Ruta; ?>"  download="<?php echo $filas->Hor_Ruta;?>">
						 <button class="btn btn-warning" title="Descargar PDF">
								<i class="fas fa-file-download"></i></i></button></a></td>
							<td><a href="views/assets/horarios/horarioView.php?ruta=<?php echo $filas->Hor_Ruta; ?>"  target="_blank"> <button class="btn btn-success">Visualizar PDF
								
							</button></a></td></td>
						</tr>
				<?php endforeach;?>
		</tbody>
</table>

 </div>
</div>