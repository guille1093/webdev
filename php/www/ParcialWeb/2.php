<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $for = range(1, 100);
    $salida = array();
    foreach ($for as $value) {
        $salida[$value] = $value; // CORRECCION: indice no estaba definido, se agrega $value como iterador
    }
    print_r($salida);
    ?>
</body>

</html>