<!doctype html>
<html lang="en">

<head>
    <title>Tropisianimal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="template/https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="template/fonts/icomoon/style.css">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/jquery-ui.css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="template/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="template/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="template/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="template/css/aos.css">

    <link rel="stylesheet" href="template/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

<div class="container">
<nav id="nav" class="navbar navbar-expand-md navbar-dark fixed-top bg-transparent">
<div class="col-6 col-xl-2">
                <div class="mb-0 site-logo"><a href="template/index.html" class="mb-0">Tropisianimal<span class="text-primary">.</span> </a></div>
            </div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="navbar-collapse collapse show" id="navbarCollapse">
<ul class="navbar-nav mr-auto">          
</ul>
<form class="form-inline mt-2 mt-md-0">
<ul class="navbar-nav site-menu main-menu">
          <li class="nav-item">
            <a class="nav-link mr-4 text-white "  href="{{url('/home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 text-white "  href="{{url('/tentang')}}">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 text-white "  href="{{url('/berita')}}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 text-white "  href="{{url('/galeri')}}">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4 text-white "  href="{{url('/kontak')}}">Kontak</a>
          </li>
  </ul>
</form>
</div>
</nav>
</div>

</header>


        <!-- MAIN -->

       

        <div class="slide-item overlay" style="background-image: url('template/images/hero_1.png'); height: 300px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <h1 class="heading mb-5" style="margin-top: -200px;" style="font-size: 20px;">Galeri</h1>

                    </div>
                </div>
            </div>
        </div>


        @yield('content')

        <footer class="site-footer bg-black" style="margin-top: -20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-4">Tropisianimal</h2>
                        <ul class="list-unstyled">
                            <p> Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Architecto, neque, dolorem. Iusto dolore <br> omnis ex vero consequatur et deserunt officia incidunt <br> at illum corrupti adipisci consectetur, veniam veritatis?
                                Neque, cupiditate.</p>
                        </ul>
                    </div>
                    <div class="col-lg-3" style="margin-left: 200px;">
                        <h2 class="footer-heading mb-4">Useful Link</h2>
                        <ul class="list-unstyled">
                        <li><a class="text-white">Blog</a></li>
                        <li><a href="berita">Hewan</a></li>
                            <li><a href="galeri">Galeri</a></li>
                            <li><a class="text-white">Testimonial</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3" style="margin-left: -100px;">
                        <h2 class="footer-heading mb-4">Privacy</h2>
                        <ul class="list-unstyled">
                        <li><a class="text-white">Karir</a></li>
                            <li><a href="tentang">Tentang Kami</a></li>
                            <li><a href="kontak">Kontak Kami</a></li>
                            <li><a class="text-white">Servis</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3" style="margin-left: -100px;">
                        <h2 class="footer-heading mb-4">Contact Info</h2>
                        <ul class="list-unstyled">
                            <li><a class="text-white">tropisianimal@gmail.com</a></li>
                            <li><a class="text-white">+62 812 3456 7890</a></li>
                            <li><a class="text-white">Kota Bandung, Jawa Barat</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p class="copyright"><small>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>

                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <!-- .site-wrap -->

    <script src="template/js/jquery-3.3.1.min.js"></script>
    <script src="template/js/jquery-ui.js"></script>
    <script src="template/js/popper.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/owl.carousel.min.js"></script>
    <script src="template/js/jquery.countdown.min.js"></script>
    <script src="template/js/jquery.easing.1.3.js"></script>
    <script src="template/js/aos.js"></script>
    <script src="template/js/jquery.fancybox.min.js"></script>
    <script src="template/js/jquery.sticky.js"></script>
    <script src="template/js/isotope.pkgd.min.js"></script>


    <script src="template/js/main.js"></script>
    <script type="text/javascript">
        $(window).on("scroll", function(){
			if($(window).scrollTop() > 100){
        $("#nav").removeClass("bg-transparent");
				$("#nav").addClass("bg-white");
			} else {
        $("#nav").removeClass("bg-white");
        $("#nav").addClass("bg-transparent");
			}
		});
    </script>

</body>

</html>