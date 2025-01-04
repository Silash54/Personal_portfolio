<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/style.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand navbar-logo" href="#"> <img src="{{ asset('frontend/images/logo.png') }}" alt="logo"
                    class="logo-1"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link" href="" data-scroll-nav="0">Register</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">Login</a> </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <!-------Banner Start------->
    <section class="banner" data-scroll-index='0'>
        @include('frontend.main')
    </section>
    <!-------Banner End------->
    <!-------About End------->
    <section class="about section-padding prelative" data-scroll-index='1'>
        <div class="container">
            @include('frontend.Layout.project')
        </div>
    </section>
    <!-------About End------->
    <!-------Video Start------->
    <section class="video-section prelative text-center white">
        <div class="section-padding video-overlay">
            <div class="container">
                <h3>Watch Now</h3>
                <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
                <div class="video-popup">
                    <div class="video-src">
                        <div class="iframe-src">
                            <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Video End------->
    <!-------Features Start------->
    <section class="feature section-padding" data-scroll-index='2'>
        <div class="container">
            @include('frontend.Layout.skill')
        </div>
    </section>
    <!-------Features End------->
    <!-------Team Start------->
    <section class="team section-padding" data-scroll-index='3'>
        <div class="container">
           @include('frontend.Layout.experience')
        </div>
    </section>
    <!-------Team End------->
    <!-------Testimonial Start------->
    <section class="testimonial section-padding" data-scroll-index='4'>
        <div class="container">
            @include('frontend.Layout.education')
        </div>
    </section>
    <!-------Testimonial End------->
    <!-------FAQ Start------->
    <section class="faq section-padding prelative" data-scroll-index='5'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectioner-header text-center">
                        <h3>Frequently Asked Questions</h3>
                        <span class="line"></span>
                        <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem
                            faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                                <h4>Nam tellus felis, dignissim quis dui ?</h4>
                                <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est,
                                    ultricies et tellus ac, euismod placerat orci. Donec commodo.</p>
                            </div>
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.2s">
                                <h4>Mauris scelerisque, dui non faucibus vulputate ?</h4>
                                <p>Sed tempus in neque ac rhoncus. Phasellus vehicula, erat tempor malesuada egestas,
                                    mauris tellus malesuada erat, at vestibulum nulla ex et lectus. Nullam elit est,
                                    ultricies et tellus ac, euismod placerat orci.</p>
                            </div>
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
                                <h4>Nullam elit est, ultricies et tellus ac ?</h4>
                                <p>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh. Vivamus euismod nunc eu
                                    leo faucibus, vel elementum justo posuere. In sed varius nisi. Curabitur id porta
                                    ipsum, et vestibulum dui.</p>
                            </div>
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.4s">
                                <h4>Suspendisse fermentum placerat enim, at pellentesque augue elit est ?</h4>
                                <p>Vivamus euismod nunc eu leo faucibus, vel elementum justo posuere. In sed varius
                                    nisi.</p>
                            </div>
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
                                <h4>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh ?</h4>
                                <p>Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est,
                                    ultricies et tellus ac, euismod placerat orci. Donec commodo dapibus congue.</p>
                            </div>
                            <div class="col-md-6 faq-content wow fadeInUp" data-wow-delay="0.6s">
                                <h4>Donec commodo dapibus congue ?</h4>
                                <p>Nullam elit est, ultricies et tellus ac, euismod placerat orci fermentum placerat
                                    enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod
                                    placerat orci. Donec commodo dapibus congue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------FAQ End------->
    <!-------Contact Start------->
    <section class="contact section-padding" data-scroll-index='6'>
        <div class="container">
            @include('frontend.Layout.contact')
        </div>
    </section>
    <!-------Contact End------->
    <!-------Download End------->
    <section class="download section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectioner-header text-center white">
                        <h3>Download Our App</h3>
                        <span class="line"></span>
                        <p class="white">Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce
                            sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="section-content text-center">
                        <ul>
                            <li><a href="#"><img src="{{ asset('frontend/images/appstore.png') }}" class="wow fadeInUp"
                                        data-wow-delay="0.4s" /></a></li>
                            <li><a href="#"><img src="{{ asset('frontend/images/playstore.png') }}" class="wow fadeInUp"
                                        data-wow-delay="0.7s" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------Download End------->
    <footer class="footer-copy">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p>2018 &copy; Applight. Website Designed by <a href="http://w3Template.com" target="_blank"
                            rel="dofollow">W3 Template</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- scrollIt js -->
    <script src="js/scrollIt.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW();
        wow.init();
        $(document).ready(function(e) {

            $('#video-icon').on('click', function(e) {
                e.preventDefault();
                $('.video-popup').css('display', 'flex');
                $('.iframe-src').slideDown();
            });
            $('.video-popup').on('click', function(e) {
                var $target = e.target.nodeName;
                var video_src = $(this).find('iframe').attr('src');
                if ($target != 'IFRAME') {
                    $('.video-popup').fadeOut();
                    $('.iframe-src').slideUp();
                    $('.video-popup iframe').attr('src', " ");
                    $('.video-popup iframe').attr('src', video_src);
                }
            });

            $('.slider').bxSlider({
                pager: false
            });
        });

        $(window).on("scroll", function() {

            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 50) {
                $('.navbar-logo img').attr('src', 'images/logo-black.png');
                navbar.addClass("nav-scroll");

            } else {
                $('.navbar-logo img').attr('src', 'images/logo.png');
                navbar.removeClass("nav-scroll");
            }

        });
        $(window).on("load", function() {
            var bodyScroll = $(window).scrollTop(),
                navbar = $(".navbar");

            if (bodyScroll > 50) {
                $('.navbar-logo img').attr('src', 'images/logo-black.png');
                navbar.addClass("nav-scroll");
            } else {
                $('.navbar-logo img').attr('src', 'images/logo-white.png');
                navbar.removeClass("nav-scroll");
            }

            $.scrollIt({

                easing: 'swing', // the easing function for animation
                scrollTime: 900, // how long (in ms) the animation takes
                activeClass: 'active', // class given to the active nav element
                onPageChange: null, // function(pageIndex) that is called when page is changed
                topOffset: -63
            });
        });
    </script>
</body>

</html>
