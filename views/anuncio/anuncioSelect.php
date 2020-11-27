<?php
foreach ($this->anuncio->Select() as $filas):
	$grupal = "'" . $filas->Anun_Id . "','" . $filas->Anun_Nombre . "'" . ",'" . $filas->Anun_Cuerpo . "'";
	?>
								<div class="card">
									<div class="card-header">
										Subido por: <?php echo $filas->Usu_Nomb1 . " " . $filas->Usu_Ape1; ?>
								  	</div>
								  <div class="card-body">
								    <h5 class="card-title"><span class="font-weight-bold">Asunto:</span> <?php echo $filas->Anun_Nombre; ?></h5>
								    <p class="card-text"><span class="font-weight-bold">Descripcion:</span> <?php echo $filas->Anun_Cuerpo; ?></p>
								  </div>

								  <div class="card-footer d-flex justify-content-between">
								  	<div>
								    	<span class="font-weight-bold">Fecha de creacion: </span><?php echo $filas->Anun_Fecha_Creacion; ?>
									</div>

								    <div>
								    	<button data-toggle="modal" data-target="#modal" class="btn btn-light" onclick="Editar(<?php echo $grupal; ?>)"> Editar</button>
										<button class="btn btn-danger" onclick="Borrar(<?php echo $filas->Anun_Id; ?>);">Eliminar</button>
									</div>
								  </div>
								</div>

								<?php
endforeach;
?>