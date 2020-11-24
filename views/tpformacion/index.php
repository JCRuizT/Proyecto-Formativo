<?php include_once 'views/components/head.php';?>
<?php include_once 'views/components/header.php';?>

<script src="views/assets/js/scripts.pformacion.js"></script>
<div id="layoutSidenav">
    <?php include_once 'views/components/sidebar.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <div id="tview">
                    <h3 class="mt-4 mb-4">Gestionar Fases</h3>
                    <?php include 'tpformacionSelect.php';?>
                </div>
                <button data-toggle="modal" title="Crear Jornada" class="open-modal btn btn-dark rounded-circle" data-target="#modal">+</button>

            	<?php include 'tpformacionInsert.php';?>
            </div>
        </main>
    </div>
</div>
<?php include_once 'views/components/footer.php';?>

