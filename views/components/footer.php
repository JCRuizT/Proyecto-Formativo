<script src="views/assets/js/jquery-3.5.1.min.js"></script>
<script src="views/assets/js/jquery-confirm.min.js"></script>
<script src="views/assets/js/bootstrap.bundle.min.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/assets/js/scripts.estado.js"></script>
<script src="views/assets/js/scripts.pformacion.js"></script>
<script src="views/assets/js/scripts.ficha.js"></script>
<script src="views/assets/js/scripts.jornada.js"></script>
<script src="views/assets/js/scripts.modalidad.js"></script>
<script src="views/assets/js/scripts.oferta.js"></script>
<script src="views/assets/js/scripts.pformacion.js"></script>
<script src="views/assets/js/scripts.rol.js"></script>
<script src="views/assets/js/scripts.tidentificacion.js"></script>
<script src="views/assets/js/scripts.tpformacion.js"></script>
<script>

	$('form').submit(function() {
    	$('#modal').modal('hide');
	});

</script>
<script>

	$('#modal').on('hidden.bs.modal', function () {
  		$('form')[0].reset();
	})

</script>
<script src="views/assets/js/font-awesome.js"></script>
<script src="views/DataTables/datatables.min.js"></script>
<script src="views/assets/js/scripts.js"></script>
<script>
$(document).ready( function () {
    $('#table-data').DataTable({

        "language": {
            "url": "views/assets/js/spanish.json"
        }
    });
    $("#tview").show();
});
</script>

</body>
</html>
