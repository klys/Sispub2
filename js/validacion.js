function isNumberKey(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }

function validarTexto(campo, expresion, tag) {
    if (!(campo.value.match(expresion))) 
    {
        $("#"+tag).html('Este campo es obligatorio y debe contener mínimo 3 caracteres alfanumericos y maxímo 45.');
        campo.focus();
    } 
    else
    {
        $("#"+tag).html("");
    }
}

