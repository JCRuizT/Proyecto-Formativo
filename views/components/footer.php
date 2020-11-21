<script src="views/assets/js/jquery-3.5.1.min.js"></script>
<script src="views/assets/js/jquery-confirm.min.js"></script>
<script src="views/assets/js/scripts.js"></script>
<script src="views/assets/js/bootstrap.bundle.min.js"></script>
<script>
	$('#modal').on('hidden.bs.modal', function () {
  		$('form')[0].reset();
	})
</script>
<script src="views/assets/js/font-awesome.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/DataTables/datatables.min.js"></script>
<script>
$(document).ready( function () {
    $('#table-data').DataTable({

        "language": {
            "url": "views/assets/js/spanish.json"
        }
    });
});

</script>

</body>
</html>
