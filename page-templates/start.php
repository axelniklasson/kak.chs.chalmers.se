<?php
/**
* Template Name: KåK - Single page template
*/

get_header();
render_splash(); ?>

<section class="bg-chs-blue" id="news">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="section-heading">Senaste nytt</h2>
                <hr class="light">
                <?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <p><?php the_date(); ?></p>
                <?php the_content(); ?>
                <hr class="light">
                <!-- <a href="<?php the_permalink(); ?>">Visa inlägg</a> -->
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>
</section>

<section class="bg-img" id="bg-1">
    <div class="container">
        <img src="<?php the_field('picture_1'); ?>">
    </div>
</section>

<section class="bg-chs-green" id="facilities">
    <div class="container">
        <div class="row text-center">
            <h2>Lokaler vi har hand om</h2>
            <hr class="light">
        </div>

        <?php
        $args = array( 'post_type' => 'venues', 'posts_per_page' => 2, 'orderby' => 'menu_order', 'order' => 'ASC' );
        $loop = new WP_Query( $args );
        $count = 0;

        while ( $loop->have_posts() ) : $loop->the_post(); $count++;?>
        <div class="row wrapper">

            <?php if ($count % 2 == 1) : ?>
                <div class="col-md-5">
                    <img class="facilities-img wow fadeIn" src="<?php echo the_field('picture'); ?>">
                </div>
                <div class="col-md-7 text-center wow fadeIn" data-wow-delay="0.25s">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            <?php else : ?>
                <div class="col-md-5 col-md-push-7">
                    <img class="facilities-img wow fadeIn" src="<?php echo the_field('picture'); ?>">
                </div>
                <div class="col-md-7 col-md-pull-5 text-center wow fadeIn" data-wow-delay="0.25s">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; wp_reset_query(); ?>
</div>
</section>

<section class="bg-img" id="bg-2">
    <div class="container">
        <img src="<?php the_field('picture_2'); ?>">
    </div>
</section>

<section class="bg-chs-red" id="about">
    <div class="container">
        <div class="row text-center">
            <h2><?php the_field('kak_year'); ?></h2>
            <hr class="light">
        </div>
        <div class="row">
            <?php
            $args = array( 'post_type' => 'members', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order' => 'ASC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-4 text-center wow fadeIn">
                    <img class="img-circle " src="<?php the_field('picture'); ?>">
                    <h4><?php the_title(); ?></h4>
                    <h5><?php the_field('post'); ?></h5>
                </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php if (get_field('show_aspform')) : ?>
    <section class="bg-kak-brown" id="aspa">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="section-heading">Aspning</h2>
                    <hr class="light">
                    <h3>Klart du ska aspa KåK!</h3>
                    <p>Vi har löpande aspning i KåK och ifall du är intresserad av att veta mer eller redan nu vet med dig att du
                        vill aspa är det bara att skriva upp sig i formuläret nedan så återkommer vi så snart vi kan.</p>

                    <h4>Aspformulär</h4>
                    <form id="aspForm">
                        <input id="aspName" type"text" placeholder="Namn"></input>
                        <input id="aspEmail" type"email" placeholder="E-post"></input>
                        <input id="aspTel" type"tel" placeholder="Telefonnummer"></input>
                        <p id="success-message">Kul att du vill aspa! Vi hör av oss snart!</p>
                        <button type="submit">Skriv upp mig!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<section class="bg-img" id="bg-3">
    <div class="container">
        <img src="<?php the_field('picture_3'); ?>">
    </div>
</section>

<section class="bg-chs-purple" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="section-heading">Hör av er!</h2>
                <hr class="light">
                <form class="contact-form" method="get" novalidate>
                    <input name="name" type="text" placeholder="Namn" id="name-field"><br>
                    <input name="email" type="email" placeholder="Email" id="email-field"><br>
                    <textarea name="message" placeholder="Meddelande" id="message-field"></textarea><br>
                    <p id="success-message">Meddelandet skickades! Vi hör av oss så snart vi kan!</p>
                    <button type="submit">Skicka</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
