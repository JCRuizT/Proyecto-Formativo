<?php 
$ruta=$_GET['ruta'];
?>

<body>
<iframe src="<?php echo $ruta;?>" style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>
</body>