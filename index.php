<?php
include("conexion.php");
$con = conexion();

$sql = "SELECT * FROM libros";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Libros CRUD</title>
</head>
<body>
    <div class="libros-form">
        <form action="insert_libro.php" method="POST">
            <h1>Registrar Libro</h1>
            <input type="text" name="titulo" placeholder="Título">
            <input type="text" name="isbn" placeholder="ISBN">
            <input type="text" name="publicacion" placeholder="Fecha de publicación">
            <input type="text" name="idioma" placeholder="Idioma">
            <input type="text" name="paginas" placeholder="Número de páginas">

            <input type="submit" name="Agregar Libro" value="Enviar">
        </form>
    </div>

    <div class="libros-form">
        <table>
            <h2>Libros Registrados</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>ISBN</th>
                    <th>Publicación</th>
                    <th>Idioma</th>
                    <th>Páginas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row["id"] ?></th>
                        <th><?= $row["titulo"] ?></th>
                        <th><?= $row["isbn"] ?></th>
                        <th><?= $row["publicacion"] ?></th>
                        <th><?= $row["idioma"] ?></th>
                        <th><?= $row["paginas"] ?></th>
                        <td><a href="update.php?id=<?= $row['id'] ?>" class="libros-table--edit">Editar</a></td>
                        <td><a href="delete_libro.php?id=<?= $row['id'] ?>" class="libros-table--delete">Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
