<?php 
// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

if (isset($_SESSION['UsuarioID'])){
    header("Location: principal.php");
}else{
    header("Location: login.php");
} ?>