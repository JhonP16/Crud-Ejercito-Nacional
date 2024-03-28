<?php

    //declaro la sesión para iniciar

    session_start();

    $_SESSION['usuario'] = "pepe";
    header("location:panel_administrador.php");

?>