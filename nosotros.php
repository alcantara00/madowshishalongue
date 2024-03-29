<?php 
    // Insertem el Header
    require 'includes/funciones.php';
    incluirTemplate('temp_header', $inicio = false);
?>

    <main class="contenedor seccion">
        <h1 class="titulo-pagina">Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/contacta.avif" type="image/avif">
                    <source srcset="build/img/contacta.jpg" type="image/webp">
                    <img src="build/img/contacta.jpg" type="image/jpeg" alt="Imagen nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut metus tincidunt, finibus turpis quis, laoreet justo. Aenean blandit in lacus quis iaculis. Sed vitae elementum libero, ac volutpat arcu. Pellentesque rhoncus ornare mauris, vitae finibus augue commodo eget. Curabitur in risus eu metus accumsan bibendum nec sed lectus. Donec aliquet commodo odio nec aliquet. Duis in nulla sed velit porttitor condimentum in ac nulla. In auctor in nibh vitae euismod. Donec tempus condimentum ex, ut euismod sapien. Nunc non ex diam. Phasellus dictum, eros sit amet interdum commodo, sapien ante accumsan dui, vitae mollis purus nisl nec sapien. Mauris eu erat et nibh hendrerit elementum. </p>
            </div>

        </div>
    </main>


    <section class="section nosotros-club">
        <h2>EL CLUB</h2>
        <ul class="nosotros-lista">
            <li>
                <picture>
                    <source srcset="build/img/nosotros_2.avif" Type="image/avif">
                    <source srcset="build/img/nosotros_2.webp" type="image/webp">
                    <img src="build/img/nosotros_2.jpg" type="image/jpeg" alt="Imagen discoteca">
                </picture>
                <p class="primer-nos">La experiencia MADOW es una combinación de música, iluminación deslumbrante y un ambiente festivo. Es el lugar perfecto para bailar, disfrutar de buena música y sumergirte en un ambiente vibrante y enérgico. Ya sea que vayas con amigos o conozcas a nuevas personas en la pista de baile, MADOW te brinda una experiencia nocturna inolvidable.</p>
            </li>
            <li class="galeria">
                <h3>Sala Principal</h3>
                <ul class="galeria-imagenes">
                    
                </ul>
                <ul class="galeria-imagenes2">
                    
                </ul>
                <p>La sala principal de la discoteca Cocoa Mataró es un espacio moderno y sofisticado, con una pista de baile amplia y bien iluminada. Cuenta con un sistema de sonido de alta calidad y una decoración que crea una atmósfera vibrante. Hay varias barras bien surtidas, un escenario principal donde actúan DJs reconocidos y un personal amable. En resumen, es el lugar perfecto para disfrutar de la música, bailar y vivir una experiencia nocturna emocionante.</p>
            </li>
            <li>
                <h3>La terraza</h3>
                <picture>
                    <source srcset="build/img/nosotros_3.avif" Type="image/avif">
                    <source srcset="build/img/nosotros_3.webp" type="image/webp">
                    <img src="build/img/nosotros_3.jpg" type="image/jpeg" alt="Imagen discoteca">
                </picture>
                <p class="terraza-nos">LLa terraza de Cocoa Mataró es un espacio al aire libre que ofrece una pista de baile. Es el lugar perfecto para socializar y pasar momentos más tranquilos mientras te sumerges en la experiencia de la discoteca.</p>
            </li>
            <li>
            <h3> Interior de la Terraza</h3>
               
            </li>

        </ul>
    </section>
    <section class="mas-nosotros seccion contenedor">
        <h2>Más sobre Nosotros</h2>
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
    </section>  
    
<?php

    // Insertem el Footer
    incluirTemplate('temp_footer');
?>