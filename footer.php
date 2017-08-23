<!-- FOOTER -->
<section class="bg-chs-white" id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                Kårhuskommittén KåK<br>
                Chalmers Studentkår<br>
                Teknologgården 2<br>
                412 58 Göteborg
            </div>

            <div class="col-md-3">
                <div class="logo text-center">
                    <img src="img/logo.png">
                </div>
            </div>

            <div class="col-md-3">
                <div class="logo text-center">
                    <img src="img/chs/chs_logo.gif">
                </div>
            </div>

            <div class="col-md-3">
                <a href="https://www.facebook.com/karhuskommitten/"><i class="fa fa-facebook fa-5x"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp
                <a href="mailto:info@kak.chs.chalmers.se"><i class="fa fa-envelope fa-5x"></i></a> &nbsp&nbsp&nbsp&nbsp
                <a href="http://kak.chs.chalmers.se"><i class="fa fa-home fa-5x"></i></a>
            </div>
        </div>

        <div class="row text-center" style="margin-top: 35px">
            <!-- Back to top -->
            <div class="elevator-button btn btn-primary">Ta hissen upp</div>
        </div>
    </div>
</section>


<!-- jQuery -->
<script src="<?php echo get_template_directory_uri() . '/js/jquery.js'; ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri() . '/js/bootstrap.min.js'; ?>"></script>


<!-- Plugin JavaScript -->
<script src="<?php echo get_template_directory_uri() . '/js/jquery.easing.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/jquery.fittext.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/wow.min.js'; ?>"></script>


<!-- Custom KaK JavaScript -->
<script src="<?php echo get_template_directory_uri() . '/js/kak.js'; ?>"></script>

<!-- Elevator JavaScript -->
<script src="<?php echo get_template_directory_uri() . '/js/elevator.min.js'; ?>"></script>
<script>
    window.onload = function() {
        var elevator = new Elevator({
            element: document.querySelector('.elevator-button'),
            mainAudio: 'audio/elevator.mp3',
            endAudio: 'audio/ding.mp3'
        });
    }
</script>

<!-- Fest! -->
<script src="<?php echo get_template_directory_uri() . '/js/fest.js'; ?>"></script>


</body>

</html>
