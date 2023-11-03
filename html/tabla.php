<?php

include ("./php/conexion.php");

$consulta = "select * from usuarios where status = 1";
$querry = mysqli_query($conexion, $consulta);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <a href="crear_usu.php">crear usuario</a>
        <table>
            <div class="titulo">
                <h2>Usuarios</h2>
            </div>
            <thead>
                <th></th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Nombre del perfil</th>
                <th>Cargo</th>
                <th>Permiso</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($querry )): ?>
                    <tr>
                        <td></td>
                        <td><?= $row['Nombre']; ?></td>
                        <td><?= $row['Usuario'];?></td>
                        <td><?= $row['Clave'];?></td>
                        <td><?= $row['nombre_perfil'];?></td>
                        <td><?= $row['rol'];?></td>
                        <td><a href="php/eliminar.php?id=<?= $row['Usuario'] ?>">b</a></td>
                        <td><a href="for_editar.php?id=<?= $row['Usuario'] ?>">e</a></td>                
                    </tr>
                     <?php endwhile; ?>

            </tbody>
        </table>

    
</body>
</html>