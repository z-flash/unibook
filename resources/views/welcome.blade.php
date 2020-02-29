<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <style>
              @import url(https://fonts.googleapis.com/css?family=Oswald);

              .link {
                display: inline-block;
                vertical-align: top;
                width: 100px;
                height: 34px;
                line-height: 36px;
                text-transform: uppercase;
                text-decoration: none;
                color: #fff;
                letter-spacing: 0.1em;
                text-align: center;
                font-size: 0.8rem;
                margin: 10px;
                position: relative;
              }
              .link span {
                position: absolute;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                text-align: center;
              }
              
              .wipe, .slide, .opacity {
                border: 2px solid #fff;
                border-radius: 4px;
                overflow: hidden;
              }
              
              .opacity {
                -webkit-transition: background-color 0.3s linear, color 0.3s linear;
                transition: background-color 0.3s linear, color 0.3s linear;
                background: rgba(100, 150, 255, 0);
              }
              .opacity:hover {
                color: #fff;
                background: #1565C0;
              }
              
              
              .wipe {
                -webkit-transition: color 0.3s ease-out;
                transition: color 0.3s ease-out;
              }
              .wipe::after {
                width: 100%;
                height: 100%;
                display: block;
                background-color: #fff;
                content: " ";
                position: absolute;
                top: 0;
                -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
                transition: -webkit-transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
                transition: transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
                transition: transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), -webkit-transform 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translateY(34px);
                        transform: translateY(34px);
                z-index: -1;
              }
              .wipe:hover {
                color: #124a58;
              }
              .wipe:hover::after {
                -webkit-transform: translateY(0px);
                        transform: translateY(0px);
              }
              
              .underline {
                border: 2px solid transparent;
              }
              .underline::after {
                width: 0%;
                height: 2px;
                display: block;
                background-color: #fff;
                content: " ";
                position: absolute;
                top: 34px;
                left: 50%;
                -webkit-transition: left 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), width 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
                transition: left 0.2s cubic-bezier(0.215, 0.61, 0.355, 1), width 0.2s cubic-bezier(0.215, 0.61, 0.355, 1);
              }
              .underline:hover::after {
                width: 100%;
                height: 2px;
                display: block;
                background-color: #fff;
                content: " ";
                position: absolute;
                top: 34px;
                left: 0;
              }
        </style>

    </head>
    <body>
         <header role="banner">
          <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
              <a class="navbar-brand" href="index.html">UniBook</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="link opacity" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="link opacity" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="link opacity" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    <a class="link opacity" href="{{ url('hotel') }}" >Hotel</a>
                    <a class="link opacity" href="{{ url('airline') }}" >Airline</a>
                    <a class="link opacity" href="{{ url('taxi') }}" >Taxi</a>
                </div>
              @endif  
            </div>
          </nav>
        </header>      
        <!-- END header -->

        <div class="flex-center position-ref full-height">
            <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/travel1.jpg);">
              <div class="container">
                <div class="row align-items-center site-hero-inner justify-content-center">
                  <div class="text-center">
                    <form class="form-inline element-animate" id="search-form">
                      <a class="link wipe" href="{{ url('booking') }}" style="width:300px;" >BOOK NOW</a>
                    </form>

                  </div>
                </div>
              </div>
            </section>
            <!-- END section -->

            <section class="feature-destination site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/bc.jpg);">
              <div class="container" style="padding-bottom: 50px; ">
                <div class="row">
                  <div class="col-md-4 element-animate" >
                    <a href="{{ url('hotel') }}" class="img-bg" style="background-image: url('images/hotel1.jpg')">
                      <div class="text">
                        <span class="icon ion-ios-location"></span>
                        <h2>Hotels</h2>
                        <p>click to book</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4 element-animate ">
                    <a href="{{ url('airline') }}" class="img-bg" style="background-image: url('images/airline2.jpg')">
                      <div class="text">
                        <span class="icon ion-ios-location"></span>
                        <h2>Airlines ticket</h2>
                        <p>click to book</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-4 element-animate ">
                    <a href="{{ url('taxi') }}" class="img-bg last" style="background-image: url('images/taxi.jpg')">
                      <div class="text">
                        <span class="icon ion-ios-location"></span>
                        <h2>Taxi</h2>
                        <p>click to book</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </section>
            <!-- END section -->

            <section class="site-section">
              <div class="container">
                <div class="row justify-content-center mb-5">
                  <div class="col-md-7 text-center">
                    <h2>Top Destinations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
                  </div>
                </div>
                <div class="row top-destination">
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/somoni.jpg" alt="Image placeholder">
                      <h2>Dushanbe, Tajik National Museum</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/rudaki.jpg" alt="Image placeholder">
                      <h2>Dushanbe, Rudaki Park</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/iskenderkul.jpg" height="110px" alt="Image placeholder">
                      <h2>Lake Iskenderkul</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/badakhshan.jpg" height="110px" alt="Image placeholder">
                      <h2>Badakhshan Mountains</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/sarez.jpg" height="110px" alt="Image placeholder">
                      <h2>Sarez Lake</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="place">
                      <img src="images/bahoriston.jpg" height="110px" alt="Image placeholder">
                      <h2>Sanatorium Bahoriston</h2>
                      <p>Visit This Place</p>
                    </a>
                  </div>
                </div>
              </div>
            </section>
            <!-- END section -->

            <footer class="site-footer">
              <div class="container">
                <div class="row mb-5">
                  <div class="col-md-4">
                    <h3 class="mb-4">About</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
                    <ul class="list-unstyled ">
                      <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">Dushanbe region I.Somoni str.Oshxuri Jomadaron 49/59</span></li>
                      <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">+992 931 960 666</span></li>
                      <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">jurazoda@mail.ru</span></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <h3 class="mb-4">Links</h3>
                    <ul class="list-unstyled ">
                      <li><a href="#">About</a></li>
                      <li><a href="#">Destination</a></li>
                      <li><a href="#">Contact</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h3 class="mb-4">Latest Blog</h3>
                    <ul class="list-unstyled blog-entry-footer">
                      <li><a href="#">
                        <span class="post-meta">March 08, 2020</span>
                        <h3>7 Best Destination in Tajikistan</h3></a>
                      </li>
                      <li><a href="#">
                        <span class="post-meta">March 08, 2020</span>
                        <h3>4 Hour Work Week And The Rest Is Travel</h3></a>
                      </li>
                      <li><a href="#">
                        <span class="post-meta">March 08, 2020</span>
                        <h3>Why You Should Travel Today</h3></a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h3>Connect</h3>
                    <p>
                      <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                      <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    </p>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-7 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </div>
                </div>
              </div>
            </footer>
            <!-- END footer -->
        </div>

        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/jquery-migrate-3.0.0.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.stellar.min.js"></script>

            <script>
              // This example displays an address form, using the autocomplete feature
              // of the Google Places API to help users fill in the information.

              // This example requires the Places library. Include the libraries=places
              // parameter when you first load the API. For example:
              // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

              var placeSearch, autocomplete;
              var componentForm = {
                street_number: 'short_name',
                route: 'long_name',
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
                country: 'long_name',
                postal_code: 'short_name'
              };
          
              function initAutocomplete() {
                // Create the autocomplete object, restricting the search to geographical
                // location types.
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                    {types: ['geocode']});
                
                // When the user selects an address from the dropdown, populate the address
                // fields in the form.
                autocomplete.addListener('place_changed', fillInAddress);
              }
          
              function fillInAddress() {
                // Get the place details from the autocomplete object.
                var place = autocomplete.getPlace();
            
                for (var component in componentForm) {
                  document.getElementById(component).value = '';
                  document.getElementById(component).disabled = false;
                }
            
                // Get each component of the address from the place details
                // and fill the corresponding field on the form.
                for (var i = 0; i < place.address_components.length; i++) {
                  var addressType = place.address_components[i].types[0];
                  if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                  }
                }
              }
          
              // Bias the autocomplete object to the user's geographical location,
              // as supplied by the browser's 'navigator.geolocation' object.
              function geolocate() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                      center: geolocation,
                      radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                  });
                }
              }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
                async defer></script>
          
            <script src="js/main.js"></script>

    </body>
</html>
