<?php
include '../../models/drivers/ConexDB.php';
include '../../models/entities/entity.php';
include '../../models/entities/Notas.php';
include '../../controllers/notasController.php';

use app\controllers\notasController;
$controller = new notasController();
$result = $controller->saveNewNotas($_POST)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Resultado</h1>
<?php
if($result){
    echo '<p>Data saved succesfully!</p>';
}else{
    echo '<p>Couldnt save data :c</p>';
}
    ?>
    <a href="../inicio.html">Volver</a>

</body>
</html>