<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <div>
        <input name="nombre">
        <input name="apellido">
        <input name="direccion">
    </div>
    <!-- CORRECCIÓN: SCRIPT AL FINAL DEL BODY -->
    <script>
        document.getElementsByName('nombre')[0].value = 'nada'; // CORRECCION: SE CAMBIA getElementsByClassName POR getElementsByName
        document.getElementsByName('apellido')[0].value = 'todo'; // CORRECCION: getElementsByName RETORNA UN ARRAY DE ELEMENTOS, SE AGREAGA [0] PARA ACCEDER AL PRIMER ELEMENTO COMO INDICE
        var input = document.getElementsByName('direccion')[0];
    </script>
</body>


</html>