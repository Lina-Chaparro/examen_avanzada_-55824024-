<?php
include '../models/drivers/conexDB.php';
include '../models/entities/entity.php';
include '../models/entities/Notas.php';
include '../controllers/notascontroller.php';


use app\controllers\notascontroller;
use app\models\entities\Notas;

$controller = new notascontroller();
$rows = $controller->queryAllNotas();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver notas</title>
</head>
<body>
<h1>Resultado de la operación</h1>


    <table>
        <thead>
            <th>
                <tr>Código</tr>
                <tr>Nombre</tr>
                <tr>Descripción</tr>
                <tr>Nota</tr>
            </th>
        </thead>
        <tbody>
        <?php
            foreach($rows as $row){
                echo '<tr>';
                echo '<td>'.$row->get('estudiante').'</td>';
                echo '<td>'.$row->get('descripcion').'</td>';
                echo '<td>'.$row->get('nota').'</td>';
                echo '<tr>';
            }
            ?>
        </tbody>

    </table>
    
    <a href="inicio.html">Volver</a>

</body>
</html>

