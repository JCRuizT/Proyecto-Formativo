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

    var usu = document.formfiu.fiusu_usu.value;
     var fic = document.formfiu.fiusu_fic.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formfiu.reset();
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
    ajax.send("ctrl=fiusu&acti=insertar&fiusu_usu="+usu+"&fiusu_fic="+fic);
}


function Borrar(id) {


    var result = document.getElementById('tview');

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formfiu.reset();
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
    ajax.send("ctrl=fiusu&acti=eliminar&id="+id);
}



function Editar(id,fic, usu,) {
    document.formfiu.id.value = id;
    document.formfiu.fiusu_usu.value = usu;
    document.formfiu.fiusu_fic.value = fic;
    document.getElementById("btnguardar").value = "Actualizar";
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
    var id = document.formfiu.id.value;
    var usu = document.formfiu.fiusu_usu.value;
    var fic = document.formfiu.fiusu_fic.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").value = "Guardar";
                document.formfiu.reset();
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
    ajax.send("ctrl=fiusu&acti=actualizar&fiusu_usu="+usu+"&fiusu_fic="+fic+"&ui="+id);
}

function Validar() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();

    } else if (document.getElementById("btnguardar").value == "Guardar") {
        Insertar();
        
    }
}