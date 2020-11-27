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

    var nombre = document.formpformacion.nombre.value;
    var codigo = document.formpformacion.codigo.value;
    var version = document.formpformacion.version.value;
    var duracion = document.formpformacion.duracion.value;
    var tipoPrograma = document.formpformacion.tipoPrograma.value;
    var estado = document.formpformacion.estado.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formpformacion.reset();
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
    ajax.send("ctrl=pformacion&acti=insertar&nombre="+nombre+"&codigo="+codigo+"&version="+version+"&duracion="+duracion+"&tipoPrograma="+tipoPrograma+"&estado="+estado);
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
                document.formpformacion.reset();
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
    ajax.send("ctrl=pformacion&acti=eliminar&id=" + id);
}



function Editar(id, nombre, codigo, version, duracion, tipoPrograma, estado) {
    document.formpformacion.id.value = id;
    document.formpformacion.nombre.value = nombre;
    document.formpformacion.codigo.value = codigo;
    document.formpformacion.version.value = version;
    document.formpformacion.duracion.value = duracion;
    document.formpformacion.tipoPrograma.value = tipoPrograma;
    document.formpformacion.estado.value = estado;

    document.getElementById("btnguardar").value = "Actualizar";
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
    var id = document.formpformacion.id.value;
    var nombre = document.formpformacion.nombre.value;
    var codigo = document.formpformacion.codigo.value;
    var version = document.formpformacion.version.value;
    var duracion = document.formpformacion.duracion.value;
    var tipoPrograma = document.formpformacion.tipoPrograma.value;
    var estado = document.formpformacion.estado.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").value = "Guardar";
                document.formpformacion.reset();
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
    ajax.send("ctrl=pformacion&acti=actualizar&id="+id+"&nombre="+nombre+"&codigo="+codigo +"&version="+version+"&duracion="+duracion+"&tipoPrograma="+tipoPrograma+"&estado="+estado);
}

function Validar() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();

    } else if (document.getElementById("btnguardar").value == "Guardar") {
        Insertar();
        
    }
}