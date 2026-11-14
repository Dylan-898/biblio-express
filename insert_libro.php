<?php
include("conexion.php");
$con= conexion();


$id = null;
$titulo = $_POST["titulo"];
$isbn = $_POST["isbn"];
$publicacion = $_POST["publicacion"];
$idioma = $_POST["idioma"];
$paginas = $_POST["paginas"];


$sql = "INSERT INTO libros VALUES('$id', '$titulo', '$isbn', '$publicacion', '$idioma', '$paginas')";
$query = mysqli_query($con,$sql);

if ($query){
    Header("Location: index.php");
};
?>