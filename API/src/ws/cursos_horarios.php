<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

require_once("../modelo/alumno.php");

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    if (!isset($_GET["correo"])) {
        echo json_encode(["error" => "Debe enviar el correo"]);
        http_response_code(400);
        exit;
    }

    $correo = $_GET["correo"];

    $alumno = new Alumno();
    $alumno->setCorreo($correo);

    $resultado = $alumno->obtenerCursosYHorarios();

    echo json_encode($resultado, JSON_PRETTY_PRINT);
    http_response_code(200);
}
?>
