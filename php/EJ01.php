<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 01</title>
</head>
<body>

    <form action="" method="post">
        Ingrese un número entre 1 y 9: <input type="text" name="numero" id="">
        <input type="submit" value="aceptar" name="enviar">
    </form>

    <?php
        $submit = $_REQUEST['enviar'];
        if ($submit){
            $number = $_REQUEST['numero'];
            echo "<table border='1' align='center'>";
            echo 
                "<tr>
                    <td colspan= 2> Tabla del ".$number."</td>
                </tr>";
                for ($i=1; $i <= 10; $i++) { 
                    echo 
                    "<tr>
                        <td>" .$i. "</td>
                        <td>".($number*$i)."</td>
                    </tr>";
                }
            echo  "</table>";
        }
    ?>

</body>
</html>
