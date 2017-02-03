var listaUsuarios = null;	

$('#btnAgregar').on('click', limpiarFormulario);
$('#btnGuardar').on('click', guardarUsuario);
$('#btnEliminar').on('click', confirmarEliminarUsuario);

function limpiarFormulario(){
	$('#div_lista div.item-seleccionado').removeClass('item-seleccionado');
	$('#div_detalle input').val('');
	$('#div_detalle input#txtNombre').focus();
}

function confirmarEliminarUsuario(){
	$('div#dialogoConfirmacion').dialogo({
        resizable: false,
        heigth: 140,
        modal: true,
        title: 'Confirmar Operación',
        buttons: {
            'Sí': eliminarUsuario, 
            Cancelar: function () {
                $(this).dialog('close');
            }
        }
    });
}

function eliminarUsuario(){
	$('#dialogoConfirmacion').dialog('close'); //cierra el dialogo que está abierto
	var seleccionado = $('#div_lista .item-seleccionado');
	var idUsuario = seleccionado.attr('data-id');
	__cnn.ajax({
		'url':'../achagua/eliminar',
		'data': { IdUsuario:idUsuario },
		'completado':cargarUsuarios
	});
}

function guardarUsuario(){
	var seleccionado = $('#div_lista .item-seleccionado');
	if(seleccionado.length > 0){
		modificarUsuario(seleccionado);
	}else{
		registrarUsuario();
	}
}

function registrarUsuario(){
	var form = $('#formulario_usuario');
	var clave1 = form.find('#txtClave').val();
	var clave2 = form.find('#txtClave2').val();
	if(clave1.trim().length === 0 || (clave1!==clave2)){
		__dom.lanzarAlerta('Las claves no pueden estar vacías y deben coincidir', 'Error de validación');
		return;
	}


	var usuario = {
		nombre:form.find('#txtNombre').val(),
		correo:form.find('#txtCorreo').val(),
		clave:clave1
	};
	__cnn.ajax({
		url:'../sesiones/ajax/peticion',
		data:usuario,
		completado:function(data){
			cargarUsuarios();
		}
	})
}

function modificarUsuario(seleccionado){
	//idUsuario,  version, nombre, correo, clave
	
	var usuario = {
		idUsuario:seleccionado.attr('data-id'),
		nombre:$('#txtNombre').val(),
		correo:$('#txtCorreo').val(),
		clave:$('#txtClave').val(),
		version:seleccionado.attr('data-version')
	};
	__cnn.ajax({
		url:'../achagua/modificar',
		data:usuario,
		completado:function(data){
			cargarUsuarios();
		}
	});
}

/**
 * Función que sirve para consultar por medio de AJAX, todos los usuarios de la BD
 */
function cargarUsuarios(){
	limpiarFormulario();
	__cnn.ajax({
		url:'../achagua/consultar',
		completado:onConsultarCompleto
	});
}


function onConsultarCompleto(data){
	switch(data.codigo){
		case -1:
			controlarError(data);
		break;
		case 0:
			mostrarMensajeSinDatos();
		break;
		case 1:
			cargarListaUsuarios(data);
		break;
	}
}


function controlarError(data){
	console.error(data.mensaje, data);
}

function mostrarMensajeSinDatos(){
	console.info('No hay datos');
}

function cargarListaUsuarios(data){
	listaUsuarios = data.datos;
	var div_lista = $('#div_lista').empty();
	for (var i = 0; i < listaUsuarios.length; i++) {
		var usuario = listaUsuarios[i];
		var nuevaDiv = $('<div>')
							.addClass('div-item')
							.attr({
								'data-id':usuario.id_usuario, 
								'data-version':usuario.registro_version
							});
		var pNombre = $('<p>').text(usuario.nombre);
		var pCorreo = $('<p>').text(usuario.correo);
		nuevaDiv.append(pNombre, pCorreo);
		div_lista.append(nuevaDiv);
		nuevaDiv.on('click', seleccionarUsuario);
	}
}

function seleccionarUsuario(){
	//_this se refiere al objeto sobre el cual se disparó el evento
	//en este caso _this será una de las divisiones que están en la lista de usuarios.
	var _this = $(this);
	var idUsuario = _this.attr('data-id');
	var usuario = obtenerUsuarioPorId(idUsuario);
	if (!usuario) {
		return;
	}

	_this.addClass('item-seleccionado').siblings('.item-seleccionado').removeClass('item-seleccionado');
	//se recomienda buscar en divisiones y no en todo el documento
	var formulario_usuario = $('#formulario_usuario');
	formulario_usuario.find('#txtNombre').val(usuario.nombre);
	formulario_usuario.find('#txtCorreo').val(usuario.correo);

}

function obtenerUsuarioPorId(idUsuario){
	for (var i = 0; i < listaUsuarios.length; i++) {
		if(listaUsuarios[i].id_usuario == idUsuario){
			return listaUsuarios[i];
		}
	}
	return false;
}

cargarUsuarios();