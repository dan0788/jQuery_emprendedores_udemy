<?php

/*
  toda bdd creada debe tener al menos una fila de datos
 */
include 'conexion.php';

class requests {

    function code() {
        $code = $_POST['RQ'];
        if (empty($code)) {
            return $code;
        }
        return $code;
    }

    function btnIngresar() {
        $a = new conection();
        $a->conectar("root", "", "test");
        $form = $_POST['Form'];
        $fila = $a->getInfofromDB("gestion_agosto");
        /* obtener string de columnas */
        $columnas = "";
        foreach ($fila as $index => $element) {
            foreach ($element as $key => $value) {
                $columnas .= $key . ",";
            }
            break;
        };
        $columnas = rtrim($columnas, ",");
        /* ----------------------------- */
        /* recomendación: revisar filtros de php para validar contenido */
        $form1 = explode('&', $form);
        $name = substr($form1[0] . "&", 8, -1);
        $pass = substr($form1[1] . "&", 11, -1);
        $name = filter_var($name, FILTER_SANITIZE_STRING); //limpia la variable de código malicioso
        $pass = filter_var($pass, FILTER_SANITIZE_STRING); //limpia la variable de código malicioso
//        filter_var($pass,FILTER_VALIDATE_EMAIL);//valida si es una diraccion de email válida
        $data = "'" . $name . "','" . $pass . "'";
        $lastID = $a->counterRows("gestion_agosto");
        $a->setInfoToDB("gestion_agosto", $columnas, $data, $lastID);
        $a->cerrarConexion();
    }

    function btnUsers() {
        $a = new conection();
        $a->conectar("root", "", "test");
        $list = $a->getInfofromDB("gestion_agosto");
        echo json_encode($list, JSON_FORCE_OBJECT);
        $a->cerrarConexion();
    }

    function validacionUsers() {
        $a = new conection();
        $a->conectar("root", "", "test");
        $usuario = $_POST['SUCURSAL'];
        $list = $a->getInfofromDB("gestion_agosto");
        foreach ($list as $key => $value) {
            foreach ($value as $index => $element) {
                if ($element === $usuario) {
                    echo True;
                }
            }
        }
        $a->cerrarConexion();
    }

}

$rq = new requests();
$code = $rq->code();
/* ---------------------- */
switch ($code) {
    case "RQ1":
        $rq->btnIngresar();
        break;
    case "RQ2":
        $rq->btnUsers();
        break;
    case "RQ3":
        $rq->validacionUsers();
        break;
    default:
        echo"No se puede validar";
        break;
}
