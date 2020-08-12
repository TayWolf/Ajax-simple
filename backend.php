<?php
    // Mensaje que recibe la función peticionGET() mediante AJAX 
    // Si usa la función peticionGET() descomente el echo de abajo y comente la condición if
    // echo('Hola mundo con AJAX!');

    // Recibir el dato mediante AJAX que nos manda la funcion peticionPOST()
    // Verificamos si existe un método POST con isstet()
    if (isset($_POST)) {
        // En este caso si existe entonces devolvemos el username
        echo 'Se recibió el usuario: '.$_POST['username'].' correctamente!';
    }
?>