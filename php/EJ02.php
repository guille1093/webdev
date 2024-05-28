<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 02</title>
</head>
<body>

    <form method="post">
        Ingrese un número: <input type="number" name="numero">
        <input type="submit" value="aceptar" name="enviar">
    </form>


    <?php
        if (isset($_POST['numero'])){
            $inputNumber = $_POST['numero'];
            $primeNumbers = array();
            $i = $inputNumber + 1;

            while (count($primeNumbers) < 16){
                $isPrime = true;
                for ($j = 2; $j < $i; $j++){
                    if ($i % $j == 0){
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime){
                    $primeNumbers[] = $i;
                }
                $i++;
            }
            echo "<table border='1' align='center'> ";
                $aux = 0;
                foreach ($primeNumbers as $prime) {
                    if ($aux % 4 == 0){
                        echo "<tr>";
                    }
                    echo "<td>".$prime."</td>";
                    $aux++;
                    if ($aux % 4 == 0){
                        echo "</tr>";
                    }
                }
                
            echo "</table> ";
        }
    ?>
    
</body>
</html>
