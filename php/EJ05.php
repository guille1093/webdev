<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 05</title>
</head>
<body>
    
    <form method="post">
        Enter a binary number: <input type="number" name="number">
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if (isset($_POST['number'])) {
            $binaryNumber = $_POST['number'];

            if (!preg_match('/^[01]+$/', $binaryNumber)) {
                echo '<p>Please enter a valid binary number</p>';
            } else {
                $decimalNumber = bindec($binaryNumber);
                $hexadecimalNumber = dechex($decimalNumber);

                echo "The binary number $binaryNumber converted to decimal is $decimalNumber and in hexadecimal: $hexadecimalNumber";
            }
        }
    ?>
</body>
</html>
