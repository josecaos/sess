/*
written by @joseCao5
*/
var val_url = 'back/validacion.php';
var new_url = 'back/ingresar_usuario.php';
// valida ingreso de sesion
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
function valida_nuevo_usuario(nu,ne,np,renp) {
  if (renp === np ) {
    // debug
    // alert(nu + np + renp);
    //
    $.ajax({
      url: new_url,
      type: 'POST',
      data: 'userIn=' + nu + '&emailIn=' + ne +'&passIn=' + np + '&repassIn=' + renp,
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
    alert(nu,ne,np,renp);

  }//if

}
