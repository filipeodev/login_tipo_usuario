<?php 
session_start();
session_destroy();

// header('Location:index.php?pagina=logar');
header('Location:../view/logar.php');
exit();
?>