<?php 
    // Insertem el Header
    require 'includes/funciones.php';
    incluirTemplate('temp_header', $inicio = true);

?>

    <main class="contenedor seccion">
        <!-- NUESTRA FILOSOFÍA -->
        <h1 class="titulo-pagina"> Nuestra Filosofia</h1>
        <div class="iconos-nosotros">
            <div class="icono-template">
                <img src="/madowshishalongue/build/img/nosotros_divertirse.jpg">
                <h2 class="h2-bien">Pasarlo Bien</h2>
                <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget efficitur nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
            </div>
            <div class="icono-template">
                <img src="/madowshishalongue/build/img/nosotros_shisha.jpg">
                <h2 class="h2-inhale">Inhale the best exhale the stress</h2>
                <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget efficitur nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
            </div>
            <div class="icono-template">
                <img src="/madowshishalongue/build/img/nosotros_coctel.jpg">
                <h2>Siempre Referescandote</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget efficitur nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
            </div>
        </div>

        <!-- LO QUE SE PUEDE TOMAR -->
        <section class="contenedor seccion">
            <h1  class="titulo-pagina">Lo que puedes Tomar</h1>
            
            <?php
                $limite = 3;
                include 'includes/templates/temp_anuncios.php';
            ?>
        </section>

        <!-- CONTÁCTANOS -->
        <section class="imagen-contacto">
            <h2>Tus cóctels Favoritos</h2>
            <p>Reseva mesa para que no te quiten el lugar!</p>
            <a href="contacto.php" class="boton-marron">Contáctanos</a>
        </section>

        <div class="contenedor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro Blog</h3>
                <?php
                    include 'includes/templates/temp_blog.php';
                ?>
            </section>

            <section>
                <h3>Testimoniales</h3>
                <?php 
                    include 'includes/templates/temp_testimoniales.php';
                ?>
            </section>
        </div>

    </main>
    
<?php
    // Insertem el Footer
    incluirTemplate('temp_footer');
?>
