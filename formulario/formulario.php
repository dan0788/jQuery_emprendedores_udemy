<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniel Ayala">
        <meta name="keywords" content="Formulario">
        <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="formulario.js?ts=<?= time() ?>" type="text/javascript"></script>
        <link rel="stylesheet" href="formulario.css?ts=<?= time() ?>">
        
    </head>
    <body>
        <form method="POST" id="formulario">
            <div>
                <h4>Nombre</h4>
                <input id="nombre" type="text" placeholder="Ingrese su nombre aquí" name="nombre"/>
            </div>
            <div>
                <h4>Apellido</h4>
                <input id="apellido" type="text" placeholder="Ingrese su apellido aquí" name="apellido">
            </div>
            <div>
                <h4>Usuario</h4>
                <input id="user" type="text" placeholder="Ingrese su usuario aquí" name="user">
            </div>
            <div>
                <h4>Contraseña</h4>
                <input id="pass" type="password" placeholder="Ingrese su contraseña aquí" name="pass">
            </div>
            <div>
                <h4>Repita la contraseña</h4>
                <input id="repeat_pass" type="password" placeholder="Repita su contraseña" name="repeat_pass">
            </div>
            <button id="enviar" type="submit">Enviar</button>
            <div id="enviarBox">
                
            </div>
        </form>
        <div>
            <button id="mostrar">Mostrar datos</button>
        </div>
        <div>
            <select id="selector">
            </select>
        </div>
    </body>
</html>

<?php