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
<?php }


function injectKakJS() { ?>
    <script>
    /*!
     * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
     * Code licensed under the Apache License v2.0.
     * For details, see http://www.apache.org/licenses/LICENSE-2.0.
     */

    (function($) {
        "use strict"; // Start of use strict

        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: ($($anchor.attr('href')).offset().top - 50)
            }, 1250, 'easeInOutExpo');
            event.preventDefault();
        });

        // Highlight the top nav as scrolling occurs
        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 51
        })

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
            $('.navbar-toggle:visible').click();
        });

        // Fit Text Plugin for Main Header
        $("h1").fitText(
            1.2, {
                minFontSize: '35px',
                maxFontSize: '65px'
            }
        );

        // Offset for Main Navigation
        $('#mainNav').affix({
            offset: {
                top: 100
            }
        })

        // Initialize WOW.js Scrolling Animations
        new WOW().init();

    })(jQuery); // End of use strict

    $(document).ready(function() {
        registerListeners();
    });

    function registerListeners() {

        $('#aspForm').submit(function(e) {
            if (validateAspForm()) {
                $.ajax({
                  method: 'post',
                  url: '<?php echo get_template_directory_uri() . '/php/aspa.php'; ?>',
                  data: {
                    name: $('#aspName').val(),
                    email: $('#aspEmail').val(),
                    tel: $('#aspTel').val(),
                  },
                  success: function(data) {
                    $('#aspName').val('');
                    $('#aspEmail').val('');
                    $('#aspTel').val('');
                    $('#aspForm #success-message').fadeIn().delay(3000).fadeOut();
                  }
                });
            }
            return false;
        });

        $('.contact-form').submit(function(e) {
            if (validateContactForm()) {
                $.ajax({
                  method: 'post',
                  url: '<?php echo get_template_directory_uri() . '/php/mail.php'; ?>',
                  data: {
                    name: $('#name-field').val(),
                    email: $('#email-field').val(),
                    message: $('#message-field').val(),
                  },
                  success: function(data) {
                    $('#name-field').val('');
                    $('#email-field').val('');
                    $('#message-field').val('');
                    $('.contact-form #success-message').fadeIn().delay(3000).fadeOut();
                  }
                });
            }
            return false;
        });


        $('#about .Dave img').dblclick(function() {
            festa();
        });
    }

    function validateAspForm() {
        var name = $('#aspName').val();
        var email = $('#aspEmail').val();
        var tel = $('#aspTel').val();
        var validForm = true;

        if (!name) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#aspName').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        }

        if (!email) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#aspEmail').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        } else {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if (!re.test(email)) {
                var l = 10;
                for( var i = 0; i < 10; i++ ) {
                    $('#aspEmail').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
                }
                validForm = false;
            }
        }

        if (!tel) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#aspTel').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        }

        return validForm;
    }

    function validateContactForm() {
        var name = $('#name-field').val();
        var email = $('#email-field').val();
        var message = $('#message-field').val();
        var validForm = true;

        if (!name) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#name-field').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        }

        if (!email) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#email-field').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        } else {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if (!re.test(email)) {
                var l = 10;
                for( var i = 0; i < 10; i++ ) {
                    $('#email-field').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
                }
                validForm = false;
            }
        }

        if (!message) {
            var l = 10;
            for( var i = 0; i < 10; i++ ) {
                $('#message-field').animate({'margin-left': "+=" + (l = -l) + 'px'}, 35);
            }
            validForm = false;
        }
        return validForm;
    }

    </script>
<?php } ?>
