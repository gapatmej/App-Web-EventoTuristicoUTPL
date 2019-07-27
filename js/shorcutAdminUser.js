var pathImages = "";
var pathAplication = "";


function cargarDescripcionCurso(){
    var descripcion = $('#dropCurso option:selected').attr('descripcion');
    var nombreImagen = $('#dropCurso option:selected').attr('nombreImagen');
    
    $("#txtDescripcionCurso").text(descripcion);
    $("#imgCurso").attr("src",pathImages+"cursos/"+nombreImagen);
}

function cargarDescripcionTaller(){
    var descripcion = $('#dropTaller option:selected').attr('descripcion');
    var costo = $('#dropTaller option:selected').attr('costo');
    var nombreImagen = $('#dropTaller option:selected').attr('nombreImagen');

    $("#txtDescripcionTaller").text(descripcion);
    $("#txtCostoTaller").val(costo);
    $("#imgTaller").attr("src",pathImages+"talleres/"+nombreImagen);
}

function guardarInscripcion(){
    if($('#dropCurso option:selected').val() == 0){
        alert("Por favor seleccione un curso ...");
        return false;
    }
    
    if($('#btnGuardar').text() == "Guardar"){
        $('#frmAdmin').submit(function(event)
        {
            var action = pathAplication+"AdminUsuario/crearInscripcion";
            $(this).attr('action', action);
        });
    }
    else if($('#btnGuardar').text() == "Actualizar"){
        $("#txtInscripcion").prop('disabled', false);
        $('#frmAdmin').submit(function(event)
        {
            var action = pathAplication+"AdminUsuario/actualizarInscripcion";
            $(this).attr('action', action);
        });
    }
    
    
    return true;
}

function agregarTaller(){
    var item = $('#dropTaller option:selected').attr('value');

    if( $("#txtInscripcion").val().length == 0)
    {
        alert("Primero debes guardar la Inscripcion ... ");
        return false;
    }
    
    if( item == 0)
    {
        alert("Selecciona un taller ... ");
        return false;
    }
    
    $("#txtInscripcion").prop('disabled', false);
    
    $('#frmAdmin').submit(function(event)
    {
        var action = pathAplication+"AdminUsuario/insertarDetalle";
        $(this).attr('action', action);
    });
    
    return true;
}