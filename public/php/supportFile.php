<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>

    <!-- Estilos css -->
    <link rel="stylesheet" href="css/css_general.css">
    <link rel="stylesheet" href="css/css_support.css">
    <!-- Fin Estilos css --> 

    <link rel="icon" href="images/logo.jpg">
</head>
<body>

    <!-- Navegación -->
    <?php
        include "html/nav.html";
    ?>
    <!-- Fin Navegación -->

    <!-- Container -->
    <div class='container'>

        <!-- Header -->
        <header class='header'>
            <h1>Soporte</h1>
        </header>
        <!-- Fin Header -->

        <!-- Left Section -->
        <section class='left'>
            <h2 class='titulo-left'>Preguntas frecuentes</h2>
            <ul class='list-left'>
                <li class='item-left'><a href="#"> ¿Porque no me regalas una guitarra ?</a> </li>
                <li class='item-left'><a href="#"> ¿Que te gusta hacer los viernes por la tarde ?</a> </li>
                <li class='item-left'><a href="#"> ¿Si tocas un Am en una escala de D que invocas ?</a> </li>
                <li class='item-left'><a href="#"> ¿A que la cosa está jodida con el Covid ?</a> </li>
                <li class='item-left'><a href="#"> ¿No se me ocurren mas preguntas frecuentes ?</a> </li>
                <li class='item-left'><a href="#"> ¿Podria ser que no ? ¿Podría ser ...?</a> </li>
            </ul>
        </section>
        <!-- Fin Left Section -->

        <!-- Right Section -->
        <section class='right'>
            <h2 clasS='titulo-right'>Contacto</h2>
            <form action="" method='post' class='form'>
                <ul class='list-right'>
                    <li class='item-right'>
                        <input type="text" placeholder='Nombre' name='name'>
                    </li>
                    <li class='item-right'>
                        <input type="text" placeholder='Email' name='email'>
                    </li>
                    <li class='item-right'>
                        <textarea name="resumen" placeholder='Resumen del problema'></textarea>
                    </li>
                    <li class='item-right'>
                        <input type="submit" value='Enviar' class='form-button'>
                    </li>
                </ul>
            </form>
        </section>
        <!-- Fin Right Section -->

    </div>
    <!-- Fin Container -->

    <!-- Footer -->
    <?php
        include "html/footer.html";
    ?>
    <!-- Fin Footer-->

</body>
</html>