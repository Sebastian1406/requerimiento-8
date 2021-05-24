<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>

    <main>

        <form action="" method="post" class="formulario">

            <div class="formulario_grupo">

                <label class="formulario_label" for="nombre">Tu Nombre:</label>
                <input class="formulario_input" type="text" name="nombre" id="nombre" require>

            </div>
            <div class="formulario_grupo">
                <label class="formulario_label" for="email">Tu Email:</label>
                <input class="formulario_input" type="text" name="email" id="email">

            </div>
            <div class="formulario_grupo">

                <label class="formulario_label" for="asunto">Asunto:</label>
                <input  class="formulario_input" type="text" name="asunto" id="asunto" require>

            </div>
            <div class="formulario_grupo">

                <label class="formulario_label" for="mensaje">Mensaje:</label>
                <textarea  class="formulario_input" name="mensaje" id="mensaje" require></textarea>

            </div>
            <div class="formulario_grupo">

                <input type="submit" id="enviar">


            </div>
        </form>

    </main>
    
<?php


    include("email.php")


?>

    </body>


</html>