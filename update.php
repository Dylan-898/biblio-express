<?php
include("conexion.php");
$con = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM libros WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"
    <title>Editar Libros</title>
</head>
<body>
    <div class="libros-form">
       <form action="edit_libro.php" method="POST">
            <h1>Editar libro</h1>

            <input type="text" name="id" value="<?= $row['id'] ?>">

            <input type="text" name="titulo" placeholder="Título"
                   value="<?= $row['titulo'] ?>"

            <input type="text" name="isbn" placeholder="ISBN"
                   value="<?= $row['isbn'] ?>">

            <input type="text" name="publicacion" placeholder="Fecha de publicación"
                   value="<?= $row['publicacion'] ?>">

            <input type="text" name="idioma" placeholder="Idioma"
                   value="<?= $row['idioma'] ?>">

            <input type="text" name="paginas" placeholder="Número de páginas"
                   value="<?= $row['paginas'] ?>">

            <input type="submit" name="Agregar Libro" value="Actualizar Información">
        </form>
    </div>
</body>
</html>