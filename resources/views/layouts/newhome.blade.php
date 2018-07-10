<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">   
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">             <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/datepicker.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">

    <style>
            body{background-color:#f5f5f5;font-family:Century Gothic;}
            .card{background-color:#fff;padding:40px;width:100%;margin:40px;box-shadow:0px 0px 5px #b5b5b5;}
        </style>
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    
    </style>                                  <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>
            <div class="tm-top-bar" id="tm-top-bar">
                <!-- Top Navbar -->
                <div class="container">
                    <div class="row">
                        
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="/">
                                <img src="{{asset('img/logo.png')}}" alt="Site logo">
                                Travel Booking
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto ">
                                  <li class="nav-item">
                                    <a class="nav-link" id="home" href="{{route('navigation.home')}}">Home</a>
                                  
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact" href="{{route('navigation.contact')}}">Contact Us</a>
                                
                                        @guest
                                        <li class="nav-item">
                                   <a id="newlink" class="nav-link" href="{{ route('login') }}">Login</a>
                               </li>
                                   <li class="nav-item">
                                   <a id="newlink1" class="nav-link" href="{{ route('register') }}">Register</a>
                                   </li>
                                  @else
                                <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-content" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="padding: 0.5cm">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" style="size:4px ">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                                    </li>
                                  </li>
                                </ul>
                            </div> 

                        </nav>            
                    </div>
                </div>
            </div>
            </div>

            <div>
                @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
          </div>
              @endif
         </div>
            @yield('content')
            
           
            
           @yield('nextcontent')
           
            <footer class="tm-bg-dark-blue">
                <div class="container">
                    <div class="row">
                        <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                        Copyright &copy; <span class="tm-current-year">2018</span> Find Hotels
                        
                        </a></p>        
                    </div>
                </div>                
            </footer>
        </div>
        
        <!-- load JS files -->
        <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="{{asset('js/popper.min.js')}}"></script>                    <!-- https://popper.js.org/ -->       
        <script src="{{asset('js/bootstrap.min.js')}}"></script>                 <!-- https://getbootstrap.com/ -->
        <script src="{{asset('js/datepicker.min.js')}}"></script>                <!-- https://github.com/qodesmith/datepicker -->
        <script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        <script src="{{asset('slick/slick.min.js')}}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
              <script>
                           var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 27.700769, lng: 85.300140},
        zoom: 8
      });
              </script>
        <script>

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(13.7567928,100.5653741),
                    scrollwheel: false
                };

              /*  map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
              });*/

                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
              });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDIr8yyIr-ET8zvJKHLvII-w_8TGwIwioU&callback=initialize';
                document.body.appendChild(script);
            } 

            function setCarousel() {
                
                if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                    $('.tm-article-carousel').slick('destroy');
                } 

                if($(window).width() < 438){
                    // Slick carousel
                    $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                }
                else {
                 $('.tm-article-carousel').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    });   
                }
            }

            function setPageNav(){
                if($(window).width() > 991) {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 79
                    });   
                }
                else {
                    $('#tm-top-bar').singlePageNav({
                        currentClass:'active',
                        offset: 65
                    });   
                }
            }

            function togglePlayPause() {
                vid = $('.tmVideo').get(0);

                if(vid.paused) {
                    vid.play();
                    $('.tm-btn-play').hide();
                    $('.tm-btn-pause').show();
                }
                else {
                    vid.pause();
                    $('.tm-btn-play').show();
                    $('.tm-btn-pause').hide();   
                }  
            }
       
            $(document).ready(function(){

                $(window).on("scroll", function() {
                    if($(window).scrollTop() > 100) {
                        $(".tm-top-bar").addClass("active");
                    } else {
                        //remove the background property so it comes transparent again (defined in your css)
                       $(".tm-top-bar").removeClass("active");
                    }
                });      

                // Google Map
                loadGoogleMap();  

                // Date Picker
                const pickerCheckIn = datepicker('#inputCheckIn');
                const pickerCheckOut = datepicker('#inputCheckOut');
                
                // Slick carousel
                setCarousel();
                setPageNav();

                $(window).resize(function() {
                  setCarousel();
                  setPageNav();
                });

                // Close navbar after clicked
               // $('.nav-link').click(function(){
                    //$('#mainNav').removeClass('show');
               // });
           
                // Control video
                $('.tm-btn-play').click(function() {
                    togglePlayPause();                                      
                });

                $('.tm-btn-pause').click(function() {
                    togglePlayPause();                                      
                });

                // Update the current year in copyright
                $('.tm-current-year').text(new Date().getFullYear());                           
            });
             document.getElementById("newlink").onclick = function () {
                location.href = "{{ route('login') }}";
                };
                document.getElementById("newlink1").onclick = function () {
                location.href = "{{ route('register') }}";
                };
                 document.getElementById("home").onclick = function () {
                location.href = "{{ route('navigation.home') }}";
                };
                 document.getElementById("nav2").onclick = function () {
                location.href = "{{ route('navigation.sec2') }}";
                 document.getElementById("blog").onclick = function () {
                location.href = "{{ route('navigation.blog') }}";
                };
                document.getElementById("contact").onclick = function () {
                location.href = "{{ route('navigation.contact') }}";
                };
            </script>
            <script type="text/javascript">
                $.fn.stars = function() {
    return $(this).each(function() {
        // Get the value
        var val = parseFloat($(this).html());
        // Make sure that the value is in 0 - 5 range, multiply to get width
        var size = Math.max(0, (Math.min(5, val))) * 16;
        // Create stars holder
        var $span = $('<span />').width(size);
        // Replace the numerical value with stars
        $(this).html($span);
    });
}
            </script>
                
<script type="text/javascript">
    $(function() {
    $('span.stars').stars();
});
</script>  
        <script src="{{asset('js/toastr.min.js')}}"></script>  
      <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @elseif(Session::has('nope'))
            toastr.warning("{{Session::get('nope')}}")
        @endif

    </script>      
    <script type="text/javascript">
        
    </script> 

</body>
</html>
