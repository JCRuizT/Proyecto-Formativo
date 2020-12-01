function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function Insertar() {
    var result = document.getElementById('tview');


    var paquete = new FormData();
		paquete.append('ctrl','mapoyo');
		paquete.append('acti','insertar');

		paquete.append('mat_tit',$('#mat_tit').prop('value'));
		paquete.append('mat_fec',$('#mat_fec').prop('value'));
		paquete.append('mat_desc',$('#mat_desc').prop('value'));
		paquete.append('mat_ruta',$('#mat_ruta')[0].files[0]);
		paquete.append('mat_usu',$('#mat_usu').prop('value'));
		paquete.append('mat_fase',$('#mat_fase').prop('value'));
		paquete.append('mat_fic',$('#mat_fic').prop('value'));

		var destino = "main.php";

			$.ajax({
					url: destino,
					type: 'POST',
					contentType:false,
					data:paquete,
					processData:false,
					cache:false,

					success:function(resultado){
						
						result.innerHTML = resultado;
						document.formmapoyo.reset();
						 $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });
						
					},
					error: function(){

						alert('ALGO HIZO MAL');
					}
				});

/*
 
    var hor_trini = document.formhorario.hor_trini.value;
    var hor_trifin = document.formhorario.hor_trifin.value;
    var hor_triNo = document.formhorario.hor_triNo.value;
    var hor_ruta = document.formhorario.hor_ruta.value;
    var hor_fic = document.formhorario.hor_fic.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formhorario.reset();
                $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });

            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=rol&acti=insertar&nombre=" + nombre);
*/
}


	function BorrarM(id,fase,ma_ruta)
	{	
		
	 	var r = confirm("Estas seguro que quiere eliminar este archivo?");
     	if(r == true) 
     		{ 
				
		var result = document.getElementById('tview');
		const ajax = new XMLHttpRequest();
		ajax.open("POST","main.php",true);
		ajax.onreadystatechange = function(){
												if( ajax.readyState == 4 )//Estado 4 es Done = terminado
												{
													if( ajax.status == 200 )//Estado 200 es Sucess = Correcto
													{
														result.innerHTML = ajax.responseText;
														 $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });
													}
													else
													{
														console.log("Ups, Algo paso");
													}
												}
												
											};
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("ctrl=mapoyo&acti=eliminar&id="+id+"&mat_fase="+fase+"&ma_ruta="+ma_ruta);
	};
	}




function Editar(id, mat_tit,mat_fec,mat_desc,mat_ruta2,mat_usu,mat_fic,mat_fase) {
    document.formmapoyo.id.value = id;
    document.formmapoyo.mat_tit.value = mat_tit;
    document.formmapoyo.mat_fec.value = mat_fec;
    document.formmapoyo.mat_desc.value = mat_desc;
    //document.formhorario.hor_ruta.value=ruta;
    document.formmapoyo.mat_ruta2.value=mat_ruta2;
    document.formmapoyo.mat_usu.value=mat_usu;
    document.formmapoyo.mat_fic.value=mat_fic;
    document.formmapoyo.mat_fase.value=mat_fase;
    document.getElementById("mat_fic").disabled = true;
    document.getElementById("btnguardar").value = "Actualizar";

    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
   var paquete = new FormData();
		paquete.append('ctrl','mapoyo');
		paquete.append('acti','actualizar');

		paquete.append('mat_tit',$('#mat_tit').prop('value'));
		paquete.append('mat_fec',$('#mat_fec').prop('value'));
		paquete.append('mat_desc',$('#mat_desc').prop('value'));
		paquete.append('mat_ruta',$('#mat_ruta')[0].files[0]);
		paquete.append('mat_ruta2',$('#mat_ruta2').prop('value'));
		paquete.append('mat_usu',$('#mat_usu').prop('value'));
		paquete.append('mat_fase',$('#mat_fase').prop('value'));
		paquete.append('id',$('#id').prop('value'));

		var destino = "main.php";

			$.ajax({
					url: destino,
					type: 'POST',
					contentType:false,
					data:paquete,
					processData:false,
					cache:false,

					success:function(resultado){
						
						result.innerHTML = resultado;
						document.getElementById("btnguardar").value = "Guardar";
						document.getElementById("mat_fic").disabled = false;
              			  document.formmapoyo.reset();
              			   $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });
					},
					error: function(){

						alert('ALGO HIZO MAL');
					}
				});
}

function ValidarM() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();

    } else if (document.getElementById("btnguardar").value == "Guardar") {
        Insertar();
        
    }
}