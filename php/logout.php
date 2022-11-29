<?php
// Inicialize a sessão
session_start();
 
// Destrua a sessão.
session_destroy();
 
// Redirecionar para a página de inicial
header("location: ../paginainicial.php");
exit;
?>