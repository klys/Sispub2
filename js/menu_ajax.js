/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function menu_parroquias() {
    $.ajax({
        url: 'parroquias.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });   
}

function menu_solicitudes(){
    $.ajax({
        url: 'solicitudes.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });   
}
/*
function menu_subsolicitudes() {
    $.ajax({
        url: 'subsolicitudes.php',
        success: function(r) {
            $("contenido").html(r);
        }
    });
}
*/
function menu_beneficiarios() {
    $.ajax({
        url: 'solicitantes.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });   
}

function menu_tipoBeneficiario() {
    $.ajax({
        url: 'tdpersona.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });   
}

function menu_solicitudServicio() {
    $.ajax({
        async:false,
        url: 'solicitud_de_servicio.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });
}

function menu_ejecutarServicio() {
    $.ajax({
        url: 'ejecutar_servicio.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    })
}

function submenu_solicitante_listado() {
    $.ajax({
        url: 'solicitante_listado.php',
        success: function(r) {
            $("#subcontenido").html(r);
            $("#submenu").html("<li role='presentation' class = 'active'><a href='javascript:submenu_solicitante_listado()'>Listado</a></li> <li role='presentation'><a href='javascript:submenu_solicitante_nuevo()'>Agregar</a></li>");
        }
    });
}

function submenu_solicitante_nuevo() {
    $.ajax({
        url: 'solicitante_formulario.php',
        success: function (r) {
            $("#subcontenido").html(r);
            $("#submenu").html("<li role='presentation'><a href='javascript:submenu_solicitante_listado()'>Listado</a></li> <li role='presentation' class = 'active'><a href='javascript:submenu_solicitante_nuevo()'>Agregar</a></li>");
        }
    });
}

function menu_reporte_personas() {
    $.ajax({
        url: 'reporte_personas.php',
        success: function (r) {
            $("#contenido").html(r);
        }
    });
}

function menu_reporte_solicitudes() {
    $.ajax({
        url: 'reporte_solicitudes.php',
        success: function (r) {
            $("#contenido").html(r);
        }
    });
}

function menu_registro() {
    $.ajax({
        url: 'registro_consultor.php',
        success: function(r) {
            $("#contenido").html(r);
        }
    });
}

/** ajax sintaxis de ayuda
 * $.ajax({
                       url: 'solicitud_editor.php',
                       data: {};
                       success: function(r){
                           $("#panel-solicitudesGOT").html(r);
                       }
                   }).done(function(){
                       botones_shatogot();
                   });
 */