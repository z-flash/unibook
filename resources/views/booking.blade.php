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
        <style rel="stylesheet">
            body{
                background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
                }
                .contact-form{
                    background: #fff;
                    margin-top: 10%;
                    margin-bottom: 5%;
                    width: 70%;
                }
                .contact-form .form-control{
                    border-radius:1rem;
                }
                .contact-image{
                    text-align: center;
                }
                .contact-image img{
                    border-radius: 6rem;
                    width: 11%;
                    margin-top: -3%;
                    transform: rotate(29deg);
                }
                .contact-form form{
                    padding: 14%;
                }
                .contact-form form .row{
                    margin-bottom: -7%;
                }
                .contact-form h3{
                    margin-bottom: 8%;
                    margin-top: -10%;
                    text-align: center;
                    color: #0062cc;
                }
                .contact-form .btnContact {
                    width: 50%;
                    border: none;
                    border-radius: 1rem;
                    padding: 1.5%;
                    background: #dc3545;
                    font-weight: 600;
                    color: #fff;
                    cursor: pointer;
                }
                .btnContactSubmit
                {
                    width: 50%;
                    border-radius: 1rem;
                    padding: 1.5%;
                    color: #fff;
                    background-color: #0062cc;
                    border: none;
                    cursor: pointer;
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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
              @endif
            </div>
          </nav>
        </header>
        <!-- END header -->

        <div class="flex-center position-ref full-height">
            <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/bc.jpg);">
              <div class="container">
                <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="container contact-form">
                    <div class="contact-image">
                        <span id="socialIcon" class="icon"><i class="fa fa-check-square"></i>&nbsp;&nbsp;
                    </div>
                    <form method="post" action="{{ route('booking') }}" enctype="multipart/form-data">


                        <h3>Drop Us a Message</h3>
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="example" placeholder="From">
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control" id="example1" placeholder="Till">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="mySelect" class="form-control form-control">
                                        <option value="" selected disabled hidden>Choose a social media</option>
                                        <option value="Telegram" >Telegram</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="GooglePlus">GooglePlus</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
            <script src="/js/bootstrap-datetimepicker.min.js" defer></script>
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
            <script>
                (function($){
            	function floatLabel(inputType){
            		$(inputType).each(function(){
            			var $this = $(this);
            			// on focus add cladd active to label
            			$this.focus(function(){
            				$this.next().addClass("active");
            			});
            			//on blur check field and remove class if needed
            			$this.blur(function(){
            				if($this.val() === '' || $this.val() === 'blank'){
            					$this.next().removeClass();
            				}
            			});
            		});
            	}
            	// just add a class of "floatLabel to the input field!"
            	floatLabel(".floatLabel");
                })(jQuery);
            </script>
            <script defer>
                $(function () {
                $('#example').datetimepicker();
                });
                $(function () {
                $('#example1').datetimepicker();
                });
            </script>
            <script defer>
            var classes = {Telegram: "fa-telegram", Instagram: "fa-instagram", Facebook: "fa-facebook-square", GooglePlus: "fa-google-plus-square"};


            $('#mySelect').on('change', function() {
              var value = $(this).val();
              $(".title").html(value);

              // Remove current icon.
              $("#socialIcon i").attr("class","");

              // Set the new icon.
              $("#socialIcon i").addClass("fa").addClass(classes[value]);
            })
            </script>
    </body>
</html>
