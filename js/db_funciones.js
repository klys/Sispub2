/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function msj(texto, tipo) {
    switch(tipo) {
        case 'exito':
            $("#mensaje-sistema").html("<p class = 'bg-primary'>"+texto+"</p>").delay(3000).queue(function(n) {
                        $(this).html("");
                        n();
                        })
        break;
        case 'error':
            $("#mensaje-sistema").html("<p class = 'bg-primary'>"+texto+"</p>").delay(3000).queue(function(n) {
                        $(this).html("");
                        n();
                        })
        break;
        case 'advertencia':
            $("#mensaje-sistema").html("<p class = 'bg-primary'>"+texto+"</p>").delay(3000).queue(function(n) {
                        $(this).html("");
                        n();
                        })
        break;
        default:
            $("#mensaje-sistema").html("...");
    }
}

function db_parroquia_borrar(id) {
    $.ajax({
        url: 'parroquia_borrar.php',
        type: 'POST',
        data: {parroquia_id:id},
        success: function (data){
            //alert("Parroquia borrada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
        setTimeout(menu_parroquias(),1000)
    );
}

function db_parroquia_guardar() {
    $.ajax({
        url:'parroquia_guardar.php',
        data:{
            'nombre-parroquia':$("#nombre-parroquia").val()
        },
        success: function(data) {
            //alert("Parroquia guardada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
            setTimeout(menu_parroquias(),1000)
            );
}

function db_solicitud_borrar(id) {
    $.ajax({
        url: 'solicitud_borrar.php',
        type: 'POST',
        data: {solicitud_id:id},
        success: function (data){
            //alert("Parroquia borrada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
        setTimeout(menu_solicitudes(),1000)
    );
}

function db_solicitud_guardar() {
    $.ajax({
        url:'solicitud_guardar.php',
        data:{
            'nombre-solicitud':$("#nombre-solicitud").val()
        },
        success: function(data) {
            //alert("Parroquia guardada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
            setTimeout(menu_solicitudes(),1000)
            );
}

function db_tdp_borrar(id) {
    $.ajax({
        url: 'tdp_borrar.php',
        type: 'POST',
        data: {tdp_id:id},
        success: function (data){
            //alert("Parroquia borrada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
        setTimeout(menu_tipoBeneficiario(),1000)
    );
}

function db_tdp_guardar() {
    $.ajax({
        url:'tdp_guardar.php',
        data:{
            'nombre-tdp':$("#nombre-tdp").val()
        },
        success: function(data) {
            //alert("Parroquia guardada.");
            msj(data,"exito");
            console.log(data);
        }
    }).done(
            setTimeout(menu_tipoBeneficiario(),1000)
            );
}

function db_solicitantes_guardar() {
    console.log($("#codigo-de-area-telefonico").val())
    console.log($("#telefono").val())
    telefono = $("#codigo-de-area-telefonico").val() + "-" + $("#telefono").val();
    $.ajax({
       type: "POST",
       url: "solicitante_guardar.php",
       data: {
           ci_rif:$("#ci-rif").val(),
           solicitante: $("#solicitante").val(), 
           sector: $("#sector").val(),
           direccion:$("#direccion").val(),
           parroquia:$("#parroquia").val(),
           telefono:telefono,
           tipo: $("#tipo-de-persona").val()
       },
       success: function(r) {
           msj(r,"exito");
           console.log(r);
       }
    }).done(
            setTimeout(menu_beneficiarios(),2000)
            );
}

function db_solicitantes_borrar(ci) {
    $.ajax({
        url: 'solicitante_borrar.php',
        type: "POST",
        data: {
            ci:ci
        },
        success: function(r) {
            msj(r, "exito");
        }
    }).done(
            setTimeout(submenu_solicitante_listado(),2000)
            );
}

function db_solicitudServicio_guardar() {
    //console.log("ci-rif: "+$("#ci-rif").val()+", servicio: "+$("#servicio").val()+", observacion: "+$("#observacion").val());
    
    $.ajax({
        url:'servicio_guardar.php',
        type:'POST',
        data: {
            ci_rif:$("#ci-rif").val(),
            tipo:$("#servicio").val(),
            observacion:$("#observacion").val()
        },
        success: function(r) {
            msj(r,"exito");
        }
    }).done(
            setTimeout(recargar_servicios_antecedentes($("#ci-rif").val()),2000)
            );
}

function db_ejecutarServicio(numero) {
    $.ajax({
        url:'ejecutar_servicio_actualizarEjecucion.php',
        type:'POST',
        data: {
            numero:numero,
            fechaEjecucion:$("#fecha_ejecucion").val(),
            supervisor:$("#supervisor").val()
        },
        success: function(r) {
            msj(r,"exito");
        }
    });
}
