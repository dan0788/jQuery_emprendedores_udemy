<!doctype html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Daniel Ayala">
        <meta name="keywords" content="Formulario">
        <script src="jquery-3.6.0.min.js" type="text/javascript"></script>
        <script defer src="../font_awesome/js/all.js"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="formulario2.css?ts=<?= time() ?>">
        <script src="formulario2.js?ts=<?= time() ?>" type="text/javascript"></script>
        <script src="validacion.js?ts=<?= time() ?>" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <form action="" class="row justify-content-center" method="post" data-id="RQ1">
                <div class="container-fluid text-center">
                    <span class="badge bg-primary p-3 m-3">Formulario de ingreso</span>
                </div>
                <div class="container-fluid text-center">
                    <span class="badge bg-success p-3 m-3">Usuario</span>
                    <div class="row justify-content-center">
                        <div class="input-group" id="userInputBox">
                            <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-user-secret"></i></div>
                            <input type="text" class="form-control" placeholder="Ingrese su usuario" aria-label="Ingrese su usuario" aria-describedby="btnGroupAddon" name="usuario" id="usuario" data-id="RQ3">

                        </div>
                    </div>
                    <div id="usuarioYaExiste" class="alert alert-success my-3 col-2 row py-1">
                        <p>Este usuario ya existe</p>
                    </div>
                </div>
                <div class="container-fluid text-center mb-3">
                    <span class="badge bg-warning text-dark p-3 m-3">Contraseña</span>
                    <div class="row justify-content-center">
                        <div class="input-group" id="userInputBox">
                            <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-key"></i></div>
                            <input type="password" class="form-control" placeholder="Ingrese su contraseña" aria-label="Ingrese su contraseña" aria-describedby="btnGroupAddon" name="contrasena">
                        </div>
                    </div>
                </div>
                <button id="btnIngresar" type="submit" class="btn btn-outline-danger col-1">Ingresar</button>
            </form>
            <div class="justify-content-center row my-3">
                <div class="btn-group col-2">
                    <button id="btnUsers" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-id="RQ2">
                        Usuarios activos
                    </button>
                    <ul id="btnList" class="dropdown-menu">
                    </ul>
                </div>
            </div>
            <div id="caja">

            </div>
        </div>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

