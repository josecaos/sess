<?php 
    session_start();
    session_destroy();
    echo 'Has terminado tu sesion.';
?>
<script> location.href= "index.php"; </script>