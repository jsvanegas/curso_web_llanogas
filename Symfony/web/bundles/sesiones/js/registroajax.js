
var registro={
    init:function(){
        $('#btnGuardar').on('click',function(){
            var nombre = $('#txtNombre').val();
            var correo = $('#txtCorreo').val();
            var clave =  $('#txtClave').val();
            var obj ={};
            obj.nombre = nombre;
            obj.correo = correo;
            obj.clave = clave;
            ajax('ajax/peticion', obj, function (data){
                alert(data.mensaje);
            });
        });
    }
};
registro.init();