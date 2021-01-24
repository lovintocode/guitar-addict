<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Addict</title>

    <!-- Estilos css -->
    <link rel="stylesheet" href="css/css_general.css">
    <link rel="stylesheet" href="css/css_index.css">
    <!-- Fin Estilos css -->
    
    <link rel="icon" href='https://imagehost-f75ac.web.app/flavicon.ico'>
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
            <h1>Guitar Addict</h1>
        </header>
        <!-- Fin Header -->

        <!-- Left Section -->
        <?php
            imprimirArtIndex();
        ?>
        <!-- Fin Left Section -->

        <!-- Right Section-->
        <?php
            imprimirArtInt();
        ?>  
        <!-- Fin Right Section -->

    </div>
    <!-- Fin Container-->

    <!-- Footer -->
    <?php
        include "html/footer.html";
    ?>
    <!-- Fin Footer -->

</body>
</html>