function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function InsertPforo() {
    var result = document.getElementById('tview');

    var pfor_fec = document.formpforo.pfor_fec.value;
    var pfo_usu = document.formpforo.pfo_usu.value;
    var pfor_res = document.formpforo.pfor_res.value;
    var pfor_for =   document.getElementById("pfor_for").value;
   

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formpforo.reset();
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
    ajax.send("ctrl=pforo&acti=insertar&pfor_fec="+pfor_fec+"&pfo_usu="+pfo_usu+"&pfor_res="+pfor_res+"&pid="+pfor_for);
}




function BorrarPForo(id,pid) {
    var result = document.getElementById('tview');

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formpforo.reset();
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
    ajax.send("ctrl=pforo&acti=eliminar&id=" + id+"&pid="+pid);
}



function Editar(id,for_nom,for_cue,for_fec,for_usu,for_est,for_fic) {
    document.formforo.id.value = id;
    document.formforo.for_nom.value = for_nom;
    document.formforo.for_cue.value = for_cue;
    document.formforo.for_fec.value = for_fec;
    document.formforo.for_usu.value = for_usu;
    document.formforo.for_est.value = for_est;
    document.formforo.for_fic.value = for_fic;
    document.getElementById("btnguardar").value = "Actualizar";
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
    var id =  document.formforo.id.value;
    var for_nom = document.formforo.for_nom.value;
    var for_cue = document.formforo.for_cue.value;
    var for_fec = document.formforo.for_fec.value;
    var for_usu = document.formforo.for_usu.value;
    var for_est = document.formforo.for_est.value;
    var for_fic = document.formforo.for_fic.value;
    


    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").value = "Guardar";
                document.formforo.reset();
                $('#table-data').DataTable({

                    "language": {
                        "url": "views/assets/js/spanish.json"
                    }
                });

                // limpiar el formulario
                // document.getElementById("formusuario") --> onlick --> insertusuario()


            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=foro&acti=actualizar&for_nom="+for_nom+"&for_cue="+for_cue+"&for_fec="+for_fec+"&for_usu="+for_usu+"&for_est="+for_est+"&for_fic="+for_fic+"&id="+id);
}

function ValidarF() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();
    } else if (document.getElementById("btnguardar").value == "Guardar") {
        InsertPforo();
    }
}