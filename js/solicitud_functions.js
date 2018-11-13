/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function buscarPersona(abuscar) {
    //$("#modal1").modal("show");
    esto = $("#buscarpor").val();
    //console.log("a buscar :"+abuscar+" por "+esto)
    $.ajax({
        url: 'buscarPersona_tabla_bot.php',
        type: "POST",
        data: {
            buscarpor: esto,
            termino:abuscar
        },
        success: function(r) {
            $("#contenedor-tabla").html(r);
        }
    });
}

function seleccionarPersona(ci, nombre) {
    $("#ci-rif").val(ci);
    $("#solicitante").val(nombre);
    //solicitudes anteriores
    $.ajax({
        url: "solicitud_de_servicio_antecedentes.php",
        type: "POST",
        data: {
            ci_rif:ci
        },
        success: function(r) {
            $("#tabla-solicitudes-anteriores").html(r);
        }
    });
    // nuevo solicitud
    $.ajax({
        url:'solicitud_de_servicio_nuevo.php',
        success: function(r){
            $("#nueva-solicitud").html(r);
        }
    });
}

function ver_servicioDatos(solicitud_id) {
    // not yet implemented
}

function abrirModalBuscarPersona() {
    $.ajax({
        url: 'buscarPersona_formulario_top.php',
        success: function(r) {
            $("#modal-contenido").html(r);
        }
    }).done(function() {
        $("#modal1").modal("show");
    });
    
}

function buscarServicio(condicion) {
    console.log("condicion: "+condicion)
    servicio = $("#por_servicio").val();
    buscarpor = $("#buscarpor").val();
    $.ajax({
        url:'buscarServicio_tabla_bot.php',
        type: "POST",
        data: {
          buscarpor:buscarpor,
          termino:condicion,
          por_servicio:servicio
        },
        success: function(r) {
            $("#contenedor-tabla").html(r);
        }
    });
}

function seleccionarSolicitud(numero) {
    $.ajax({
        url:'ejecutarServicio_datosDeServicio.php',
        type: "POST",
        data: {
            numero:numero
        },
        success: function(r) {
            $("#datos-servicio").html(r);
           // console.log(r);
        }
    });
}

function recargar_servicios_antecedentes(cedula) {
    console.log("recargar_servicios_antecedentes, cedula:"+cedula)
    $.ajax({
       url: 'solicitud_de_servicio_antecedentes.php',
       type: 'POST',
       data: {
           ci_rif:cedula
       },
       success: function(r) {
           $("#tabla-solicitudes-anteriores").html(r);
       }
    });
    
    $.ajax({
       url: 'solicitud_de_servicio_nuevo.php',
       success: function (r) {
           $("#nueva-solicitud").html(r);
       }
    });
}
