/*
written by @joseCao5
*/
var val_url = 'validacion.php';
var new_url = 'ingresar_usuario.php';
var resultado = $('.resultado');
function validar(u,p) {
  $.ajax({
    url: val_url,
    type: 'POST',
    data: 'user=' + u + '&pass=' + p,
    beforeSend: function() {

      resultado.html('validando ...');

    },
    success: function(data) {

      resultado.html(data);

    }
  });
};
//
// pasa datos para agregar usuario
function valida_nuevo_usuario(nu,np,renp) {
  if (renp === np ) {
    // debug
    // alert(nu + np + renp);
    //
    $.ajax({
      url: new_url,
      type: 'POST',
      data: 'userIn=' + nu + '&passIn=' + np + '&repassIn=' + renp,
      beforeSend: function() {

          resultado.html('Ingresando nuevo usuario ...')

      },
      success: function(resp) {

        resultado.html(resp);

      },
      error: function(server) {

        console.log('¡Hay un error en la red! -> ' + server.status + ' ' + server.statusText);

      }
    });

  } else {

    resultado.empty().html("Las contraseñas no coinciden, pf! ");

  }//if

}
