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

function initializeElevator() { ?>
    <!-- Elevator JavaScript -->
    <script src="<?php echo get_template_directory_uri() . '/js/elevator.min.js'; ?>"></script>
    <script>
        window.onload = function() {
            var elevator = new Elevator({
                element: document.querySelector('.elevator-button'),
                mainAudio: '<?php echo get_template_directory_uri() . '/audio/elevator.mp3'; ?>',
                endAudio: '<?php echo get_template_directory_uri() . '/audio/ding.mp3'; ?>'
            });
        }
    </script>
<?php }

function initializeFest() { ?>
<script type="text/javascript">
    function randomColor() { // All creds to Adrian Bjugård (@qng.se) for this awesome color generator! ;)
        var color = "#"+((1<<24)*Math.random()|0).toString(16);
        document.getElementById("news").style.backgroundColor = color
        document.getElementById("facilities").style.backgroundColor = color
        document.getElementById("about").style.backgroundColor = color
        document.getElementById("contact").style.backgroundColor = color
        document.getElementById("footer").style.backgroundColor = color
    }

    function loop() {
        randomColor();
        setTimeout(loop, 50);
    };

    function festa(){
        var mainAudio;
        mainAudio = new Audio('<?php echo get_template_directory_uri() . '/audio/fest.mp3'; ?>');
        mainAudio.setAttribute( 'preload', true );
        mainAudio.setAttribute( 'loop', true );
        mainAudio.play();
        loop();
    }
</script>
<?php } ?>
