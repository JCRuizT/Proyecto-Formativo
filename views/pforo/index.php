<?php include_once 'views/components/head.php';?>
<?php include_once 'views/components/header.php';?>
<script src="views/assets/js/scripts.pforo.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />


<div id="layoutSidenav">
    <?php include_once 'views/components/sidebar.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4 mb-4">Gestionar Participacion Foro</h3>
                <div id="tview">
                    <?php include 'pforoSelect.php';?>
                </div>
                <button data-toggle="modal" title="Crear Ficha" class="open-modal btn btn-dark rounded-circle" data-target="#modal">+</button>

            	<!--<?php include 'pforo.php';?>-->
            </div>
        </main>
    </div>
</div>
<?php include_once 'views/components/footer.php';?>

