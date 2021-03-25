<?php
//verificar la conexion con la base de datos
    include("con_db.php");
    if ($conexion){
        echo "Esta conectado!";
    }else{
        echo "No esta conectado!";
    }
//Verificar si se ejecuto el metodo post y comprobar si lo datos van llenos o vacios
    if (isset($_POST['registrar'])){

        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 ){
            $nombre = trim($_POST['nombre']);
            $email = trim($_POST['email']);
            $fechareg = date("d/m/y");
            $consulta ="INSERT INTO datos(Nombre, Email, fecha_reg) VALUES ('$nombre','$email','$fechareg')";
            $resultado = mysqli_query($conexion, $consulta);
                if ($resultado){
                    ?>
                        <h3 class="ok">Te has Suscrito Correctamente!</h3>
                    <?php
                }
                else {
                        ?>
                         <h3 class="bad">Oops! ha ocurrido un error</h3>
                        <?php
                }
        }else {
            ?>
                <h3 class="bad">Complete todos los campos!</h3>
            <?php
        }
    }
   



?>