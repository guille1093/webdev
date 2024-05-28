<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 04</title>
</head>
<body>
    <form method="post">
        Ingrese un número: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $inputNumber = $_POST['numero'];
            if (!is_numeric($inputNumber) || strpos($inputNumber, '.') !== false) {
                echo 'Debe ingresar un número entero';
            } elseif ($inputNumber < 0) {
                echo 'El número debe ser positivo';
            } else {
                $inputNumber = intval($inputNumber);

                $units = $inputNumber % 10;
                $tens = ($inputNumber % 100) / 10;
                $hundreds = ($inputNumber % 1000) / 100;
                $thousands = ($inputNumber / 1000);

                echo "El número $inputNumber se descompone en:";
                echo "$thousands millares; $hundreds centenas; $tens decenas y $units unidades";
            }
        }
    ?>
</body>
</html>
