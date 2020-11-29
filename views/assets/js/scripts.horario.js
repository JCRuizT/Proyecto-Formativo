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
		paquete.append('ctrl','horario');
		paquete.append('acti','insertar');

		paquete.append('hor_trini',$('#hor_trini').prop('value'));
		paquete.append('hor_trifin',$('#hor_trifin').prop('value'));
		paquete.append('hor_triNo',$('#hor_triNo').prop('value'));
		paquete.append('hor_ruta',$('#hor_ruta')[0].files[0]);
		paquete.append('hor_fic',$('#hor_fic').prop('value'));

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
						document.formhorario.reset();
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


	function BorrarHorario(id,hor_ruta)
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
	ajax.send("ctrl=horario&acti=eliminar&id="+id+"&hor_ruta="+hor_ruta);
	};
	}




function Editar(id, Triini,Trifin,Trino,ruta,ficha) {
    document.formhorario.id.value = id;
    document.formhorario.hor_trini.value = Triini;
    document.formhorario.hor_trifin.value = Trifin;
    document.formhorario.hor_triNo.value = Trino;
    //document.formhorario.hor_ruta.value=ruta;
    document.formhorario.hor_ruta2.value=ruta;
    document.formhorario.hor_fic.value=ficha;
    document.getElementById("btnguardar").value = "Actualizar";

    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
   var paquete = new FormData();
		paquete.append('ctrl','horario');
		paquete.append('acti','actualizar');

		paquete.append('hor_trini',$('#hor_trini').prop('value'));
		paquete.append('hor_trifin',$('#hor_trifin').prop('value'));
		paquete.append('hor_triNo',$('#hor_triNo').prop('value'));
		paquete.append('hor_ruta',$('#hor_ruta')[0].files[0]);
		paquete.append('hor_ruta2',$('#hor_ruta2').prop('value'));
		paquete.append('hor_fic',$('#hor_fic').prop('value'));
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
              			  document.formhorario.reset();
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

function ValidarH() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();

    } else if (document.getElementById("btnguardar").value == "Guardar") {
        Insertar();
        
    }
}