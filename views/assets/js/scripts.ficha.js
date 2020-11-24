function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function InsertFicha() {
    var result = document.getElementById('tview');

    var fic_num = document.formficha.fic_num.value;
    var fic_fecIn = document.formficha.fic_fecIn.value;
    var fic_fecfin = document.formficha.fic_fecfin.value;
    var fic_progra = document.formficha.fic_progra.value;
    var fic_est = document.formficha.fic_est.value;
    var fic_jor = document.formficha.fic_jor.value;
    var fic_mod = document.formficha.fic_mod.value;
    var fic_ofer = document.formficha.fic_ofer.value;

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formficha.reset();
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
    ajax.send("ctrl=ficha&acti=insertar&fic_num="+fic_num+"&fic_fecIn="+fic_fecIn+"&fic_fecfin="+fic_fecfin+"&fic_progra="+fic_progra+"&fic_est="+fic_est+"&fic_jor="+fic_jor+"&fic_mod="+fic_mod+"&fic_ofer="+fic_ofer);
}




function BorrarFicha(id) {
    var result = document.getElementById('tview');

    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {

                result.innerHTML = ajax.responseText;
                document.formjornada.reset();
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
    ajax.send("ctrl=ficha&acti=eliminar&id=" + id);
}



function Editar(Fic_Id, Fic_NumeroFicha,Fic_FechaInicio,Fic_FechaFin,TblProgramaFormacion_Pro_IdProg,TblEstado_Est_Id,TblTipoJornada_TipJor_Id,TblModalidad_Mod_Id,TblTipoOferta_TipOfe_Id) {
    document.formficha.id.value = Fic_Id
    document.formficha.fic_num.value = Fic_NumeroFicha;
    document.formficha.fic_fecIn.value = Fic_FechaInicio;
    document.formficha.fic_fecfin.value = Fic_FechaFin;
    document.formficha.fic_progra.value = TblProgramaFormacion_Pro_IdProg;
    document.formficha.fic_est.value = TblEstado_Est_Id;
    document.formficha.fic_jor.value = TblTipoJornada_TipJor_Id;
    document.formficha.fic_mod.value = TblModalidad_Mod_Id;
    document.formficha.fic_ofer.value = TblTipoOferta_TipOfe_Id;
    document.getElementById("btnguardar").value = "Actualizar";
    // Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
}

function Update() {

    var result = document.getElementById('tview');
    var id =  document.formficha.id.value;
    var fic_num = document.formficha.fic_num.value;
    var fic_fecIn = document.formficha.fic_fecIn.value;
    var fic_fecfin = document.formficha.fic_fecfin.value;
    var fic_progra = document.formficha.fic_progra.value;
    var fic_est = document.formficha.fic_est.value;
    var fic_jor = document.formficha.fic_jor.value;
    var fic_mod = document.formficha.fic_mod.value;
    var fic_ofer = document.formficha.fic_ofer.value;
    


    const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
    ajax.open("POST", "main.php", true); // Se usa el Controlador General y su Accion
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) // Estado 4 es DONE = TERMINADO
        {
            if (ajax.status == 200) // Estado 200 es SUCCESS = CORRECTO
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").value = "Guardar";
                document.formjornada.reset();
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
    ajax.send("ctrl=ficha&acti=actualizar&fic_num="+fic_num+"&fic_fecIn="+fic_fecIn+"&fic_fecfin="+fic_fecfin+"&fic_progra="+fic_progra+"&fic_est="+fic_est+"&fic_jor="+fic_jor+"&fic_mod="+fic_mod+"&fic_ofer="+fic_ofer+"&id="+id);
}

function ValidarF() {

    if (document.getElementById("btnguardar").value == "Actualizar") {
        Update();
    } else if (document.getElementById("btnguardar").value == "Guardar") {
        InsertFicha();
    }
}