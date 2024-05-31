<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        #dni {
            background-color: blue;
        }

        /* CORRECCIÓN: 'Nombre' CAMBIADO A 'nombre' */
        #nombre {
            background-color: yellow;
        }

        #direccion {
            background-color: blue;
        }

        #apellido {
            border-radius: 90%;
        }
    </style>
</head>

<body>
    <?php
    // put your code here
    ?>
    <div>
        <legend>Persona 1</legend>
        <label>DNI</label>
        <input id="dni">
        <label>Nombre</label>
        <input id="nombre">
        <label>Apellido</label>
        <input id="apellido">
        <label>Direccion</label>
        <input id="direccion">
    </div>
    <div>
        <br>
        <legend>Persona 2</legend>
        <label>DNI</label>
        <!-- CORRECCIÓN: 'class' CAMBIADO POR 'id' -->
        <input id="dni">
        <label>Nombre</label>
        <input id="nombre">
        <label>Apellido</label>
        <input id="apellido">
        <label>Direccion</label>
        <input id="direccion">
    </div>
</body>

</html>