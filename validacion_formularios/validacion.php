<?php

    if(isset($_POST['submit'])){

        if (empty($nombre)) {
            
            echo "<p class='error'> Debes agregar un nombre 🤓</p>";

        }else{

            if(strlen($nombre) >15){

                echo "<p class='error'> El nombre tiene muchos caracteres😮 </p>";

            }

        }

        if (empty($edad)) {
            
            echo "<p class='error'> Debes agregar la edad 🤡</p>";

        }else{
            if(!is_numeric($edad)){

                echo "<p class='error'> La edad debe ser numérica 🤑🤑 </p>";

            }
        }

        if (empty($correo)) {
            
            echo "<p class='error'> Debes agregar un correo 🐭🐭</p>";

        }else{

            if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){

                echo "<p class='error'> El correo es incorrecto 😋 </p>";

            }

        }

    }

?>