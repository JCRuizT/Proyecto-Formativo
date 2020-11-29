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
