/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ajax(url, parametros, funcion) {
    $.ajax({
        'type': 'POST',
        'url': url,
        'datatype': 'json',
        'data': parametros,
        success: function (data, textStatus, jqXHR) {
            funcion(data);
        },
        beforeSend: function (xhr) {
            console.log('Enviando petición');
        }, error: function (e) {
            console.log(e);
        }
    });
}
