
<?php

include("conexion.php");
$con = conexion();

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$isbn = $_POST["isbn"];
$publicacion = $_POST["publicacion"];
$idioma = $_POST["idioma"];
$paginas = $_POST["paginas"];

$sql = "UPDATE libros SET titulo='$titulo', isbn='$isbn', publicacion='$publicacion', idioma='$idioma', paginas='$paginas' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: index.php");
};
?>