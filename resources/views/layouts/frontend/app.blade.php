<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/imgs/logo/Atikin Verse-Image1695185076.jpg')}}">

    <!-- ========== Page Title ========== -->
    @yield('title')

    <!-- ========== Start Fonts Style ========== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600&amp;family=Syne:wght@400;500;600&amp;family=Yantramanav:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- ========== Start Stylesheet ========== -->

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <!-- ========== End Stylesheet ========== -->
</head>

<body>
    <!-- Main -->
    <main class="main-page homepage">
        <!-- Header Bar -->
        <!-- <div class="header-bar">
            <div class="custom-container">
                <div class="header-bar-body d-flex align-items-center justify-content-between">
                    <div class="left">
                        <select class="country-select" name="country" id="country">
                            <option value="en">EN</option>
                            <option value="uk">UK</option>
                            <option value="dz">DZ</option>
                        </select>
                    </div>
                    <div class="right">
                        <p>
                            Level up your business with <a href="about.html" data-word="ATIKIN VERSE." id="dataWord">ATIKIN VERSE.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Header -->
      @include('layouts.frontend.header')

        <!-- Header end -->

        <!-- Hero Section -->
 
@yield('body')

          <!-- Footer -->
        @include('layouts.frontend.footer')
         <!-- Footer end-->
    </main>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap.min.js')}}"></script>
    <script src="{{asset('assets/js/Draggable.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/client-marquee.js')}}"></script>
    <script src="{{asset('assets/js/theme-custom.js')}}"></script>
    <script src="{{asset('assets/js/form1.js')}}"></script>
    <script src="{{asset('assets/js/subscribe-form.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>