<?php include_once 'views/components/head.php';?>
<?php include_once 'views/components/header.php';?>
<script src="views/assets/js/scripts.mapoyo.js"></script>
<div id="layoutSidenav">
    <?php include_once 'views/components/sidebar.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4 mb-4">Fases</h3>
                   <?php foreach ($this->fase->Select() as $filas):?>

                    <h4>
              <i class="fas fa-folder-open"> </i>
              <?php  echo $filas->Fase_Id?>

                  <?php  echo $filas->Fase_Nombre?>
             <a href="main.php?ctrl=mapoyo&acti=index&mat_fase=<?php echo $filas->Fase_Id; ?>"><button class="btn btn-success">  <i class="fas fa-folder-open"> </i></button></a>

             <a href="main.php?ctrl=mapoyo&acti=index&mat_fase=<?php echo $filas->Fase_Id; ?>"  target="_blank"> <button class="btn btn-success">Visualizar PDF
                                
                            </button></a>
            	</h4>

            <?php  endforeach;?>
            </div>
        </main>
    </div>
</div>
<?php include_once 'views/components/footer.php';?>

