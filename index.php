<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con MySQL</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form action="" method="post">
    <h1>¡Suscribete!</h1>
    <br>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
        <br>
        <input type="email" name="email" id="email" placeholder="Email">
        <br>
        <input type="submit" value="Enviar" name="registrar">
    
    </form>

    <?php
        include("registrar.php");
    
        

    ?>

</body>
</html>