<?php

    session_start();

    //DESTRUIR LA SESIÓN Y REDIRIGIR AL USUARIO A LA PAG DEL LOGIN
    session_unset();
    session_destroy();
    header('location:login.php');


?>