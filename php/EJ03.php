<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 03</title>
</head>
<body>

    <form method="post">
        Ingrese un número del 0 al 9: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        if (isset($_POST['numero'])) {
            $inputNumber = intval($_POST['numero']);
            
            $numberToWord = ['cero', 'uno', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve'];

            switch ($inputNumber) {
                case 0:
                    echo "La cifra $inputNumber se lee como $numberToWord[0]";
                    break;
                case 1:
                    echo "La cifra $inputNumber se lee como $numberToWord[1]";
                    break;
                case 2:
                    echo "La cifra $inputNumber se lee como $numberToWord[2]";
                    break;
                case 3:
                    echo "La cifra $inputNumber se lee como $numberToWord[3]";
                    break;
                case 4:
                    echo "La cifra $inputNumber se lee como $numberToWord[4]";
                    break;
                case 5:
                    echo "La cifra $inputNumber se lee como $numberToWord[5]";
                    break;
                case 6:
                    echo "La cifra $inputNumber se lee como $numberToWord[6]";
                    break;
                case 7:
                    echo "La cifra $inputNumber se lee como $numberToWord[7]";
                    break;
                case 8:
                    echo "La cifra $inputNumber se lee como $numberToWord[8]";
                    break;
                case 9:
                    echo "La cifra $inputNumber se lee como $numberToWord[9]";
                    break;
                default:
                    break;
            }
        }
    ?>

</body>
</html>
