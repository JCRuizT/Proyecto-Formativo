<div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
    <?php 
    $idp=$this->pid;
       foreach ($this->pforo->Select($this->pid) as $filas):
        $nombreF = $filas->For_NombreForo;
        endforeach;
 
    ?>
 <h5>NOMBRE FORO :<?php if (isset($nombreF)) {
  echo $nombreF;
 }else{
    echo "AUN NO HAY RESPUESTAS EN ESTE FORO";
 }?></h5>
 <input type="text" name="pfor_for" id="pfor_for" value="<?php echo $this->pid;?>" hidden><br><br>
    <?php foreach ($this->pforo->Select($this->pid) as $filas):?>
       
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">

                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">
                                <h6><?php echo $filas->ParFor_Participante;?></h6>
                                <p class="text-secondary">
                                    <?php echo $filas->ParFor_Respuesta;?>
                                </p>
                                <p class="text-muted">Fecha Respuesta <span class="text-secondary font-weight-bold">13 <?php  echo $filas->ParFor_Fecha;?></span></p>
                                <div class="float-right">
                                <!--<button class="btn btn-success">Probando</button>-->
                                  <button class="btn btn-danger" onclick="BorrarPForo(<?php echo $filas->ParFor_Id;?>,<?php echo $idp; ?>)">Eliminar </button>  
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
<?php endforeach; ?>
            </div>

           <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Participar en foro</h3></div>
                                    <div class="card-body">
                                        <form  name="formpforo" class="form-cerrar" id="formpforo" onSubmit="InsertPforo(); return false">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="Usuario">Nombre</label>
                                                        <input class="form-control py-4" name ="pfo_usu" type="text" placeholder="Ingrese su nombre" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="Fecha">Fecha</label>
                                                        <input class="form-control py-4" name="pfor_fec" type="date"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Opinion</label>
                                                <input class="form-control py-4" name="pfor_res" type="text"  placeholder="Ingrese su opinion"  style="width: 570px; height: 200px;" />
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                
                                            <input class="form-control btn btn-success" type="submit" value="Guardar" id="btnguardar" >
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>