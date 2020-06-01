<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name', 'Enginnova News') }}</title>
    <link rel="icon" href="{{asset('blog_assets/img/enginnova.ico')}}" />
    @yield('meta')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/bootstrap.min.css')}}" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/animate.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/owl.carousel.min.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/all.css')}}" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('blog_assets/css/themify-icons.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/magnific-popup.css')}}" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/slick.css')}}" />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('blog_assets/css/style.css')}}" />
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="background-color: rgb(0, 89, 255);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="http://www.enginnova.co" target="_blank">
                            <img src="{{asset('blog_assets/img/logoE.png')}}" width="100" height="50" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blogs')}}">Acceuil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://www.enginnova.co/info/apropos">A propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://www.enginnova.co/info/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('breadcrumb')

    @yield('content')

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <a href="{{route('blogs')}}" class="footer_logo_iner"> </a>
                        <h4>A propos</h4>
                        <p>
                            Enginnova s’emploie à révolutionner le monde du travail et du
                            recrutement en donnant la possibilité aux citoyens des pays du
                            Sud de travailler à distance pour les entreprises des pays du
                            Nord et Vice versa.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Contact Info</h4>
                        <p>Lomé (Togo) : +228 92991111</p>
                        <p>Lille (France) : +33 06 19 28 64 88</p>
                        <p>Email : contact@enginnova.co</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Réseaux Sociaux</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.instagram.com/enginnova/">Instagram</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/enginnovaofficial/">Facebook</a>
                            </li>
                            <li><a href="https://twitter.com/enginnova">Twitter</a></li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCTw67X7GRnOqivZgYCjDS8Q">Youtube</a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/enginnova">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Légal</h4>
                        <p>
                            <a href="http://enginnova.co" target="_blank">Mentions Légales, Conditions Générales d'Utilisation et
                                Politique de confidentialité.</a>
                        </p>
                        <!-- <div id="mc_embed_signup">
                          <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscribe_form relative mail_part">
                              <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                  class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                  onblur="this.placeholder = ' Email Address '">
                              <button type="submit" name="submit" id="newsletter-submit"
                                  class="email_icon newsletter-submit button-contactForm"><i
                                      class="far fa-paper-plane"></i></button>
                              <div class="mt-10 info"></div>
                          </form>
                      </div> -->
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-8">
                    <div class="copyright_text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved |
                            <a href="http://enginnova.co" target="_blank">Enginnova</a>,
                            <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://www.facebook.com/enginnovaofficial/" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/enginnova" class="single_social_icon"><i class="fab fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('blog_assets/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('blog_assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('blog_assets/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('blog_assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('blog_assets/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('blog_assets/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('blog_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('blog_assets/js/slick.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/contact.js')}}"></script>
    <script src="{{asset('blog_assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('blog_assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('blog_assets/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('blog_assets/js/custom.js')}}"></script>
    <script src='{{asset("blog_assets/js/socialShare.js")}}'></script>
</body>

</html>