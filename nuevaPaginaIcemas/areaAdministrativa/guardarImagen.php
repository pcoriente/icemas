<?php

include './dao/DAO.php';
$target_path = "../images/carousel/";
$target_path = $target_path . basename($_FILES['uploadedfile']['name']);
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    try {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $ruta = $target_path . $_FILES['uploadedfile'][''];
        $dao = new DAO();
        $sql = "INSERT INTO slider(titulo, descripcion, ruta, activo) VALUES ('$titulo','$descripcion', '$ruta', '0')";
        $dao->ejecutarSentencia($sql);
        header('Location: Slider.php');
    } catch (Exception $ex) {
        $mensaje = $dao->formatoError($ex->getMessage());
        echo $mensaje;
    }
} else {
    echo "Ha ocurrido un error, trate de nuevo!";
}
?>