<?php include_once 'views/components/head.php';?>
<?php include_once 'views/components/header.php';?>
<div id="layoutSidenav">
    <?php include_once 'views/components/sidebar.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h3 class="mt-4 mb-4">Gestionar Ficha</h3>
                <div id="tview">
                    <?php include 'fichaSelect.php';?>
                </div>
                <button data-toggle="modal" title="Crear Ficha" class="open-modal btn btn-dark rounded-circle" data-target="#modal">+</button>

            	<?php include 'fichaInsert.php';?>
            </div>
        </main>
    </div>
</div>
<?php include_once 'views/components/footer.php';?>

