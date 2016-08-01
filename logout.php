<?php
session_start();
session_destroy();
echo 'Has terminado tu sesion.';
?>
<script>

setTimeout(function() {

  location.href= "../index.php";

},3000);

</script>
