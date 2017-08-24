<?php

function render_splash() { ?>
    <header style="background-image: url(<?php the_field('splash_picture'); ?>)">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Kårhuskommittén KåK</h1>
                <hr>
                <p><?php the_field('splash_tagline'); ?></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Läs mer om oss!</a>
            </div>
        </div>
    </header>
<?php }

?>
