<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Pokemon</title>
</head>
<body>
    <form action="registrar.php" method="post">
        <h1>Agregar Pokemon</h1><br>

        <label>Nombre:</label>
        <input type="text" name="txtNombre" required>
        <br><br>

        <label>Codigo:</label>
        <input type="number" name="txtCodigo" required> 
        <br><br>
        
        <input type="submit" name="btnRegistrar" value="Registrar">
    </form>
    <?php
        if(isset($_POST['txtNombre'])&& isset($_POST['txtCodigo']))

            require_once"conexion.php";
    ?>
    
</body>
</html>