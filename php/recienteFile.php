<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Estilos css -->
    <link rel="stylesheet" href="css/css_general.css">
    <link rel="stylesheet" href="css/css_reciente.css">
    <!-- Fin Estilos css -->

    <link rel="icon" href="https://imagehost-f75ac.web.app/flavicon.ico">
</head>
<body>

    <!-- Navegación -->
    <?php
        include "html/nav.html";
    ?>
    <!-- Fin Navegación -->

    <!-- Container -->
    <div class='container'>
        <header class='header'>
            <h1>Más reciente</h1>
        </header>
        <?php
            imprimirArtReciente();
        ?>
    </div>
    <!-- Fin Container -->

    <!-- Footer -->
    <?php
        include "html/footer.html";
    ?>
    <!-- Fin Footer -->

</body>
</html>