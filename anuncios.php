<?php 
    // Insertem el Header
    require 'includes/funciones.php';
    incluirTemplate('temp_header');
?>

    <main class="contenedor seccion">
        <h1 class="titulo-pagina">Anuncios</h1>
        <?php
                $limite = 10;
                include 'includes/templates/temp_anuncios.php';
            ?>
    </main>
    
<?php

    // Insertem el Footer
    incluirTemplate('temp_footer');
?>