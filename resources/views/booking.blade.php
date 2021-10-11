<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        <title>ThinkClean - Booking</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

        <link rel="stylesheet" href="css/templatemo-softy-pinko.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    </head>
    
    <body class="booking-body">
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo" style="font-family: 'Lobster', cursive;color: #0062c0fa;font-size: 21px;">
                            <!-- <img src="images/logo.png" alt="Softy Pinko"/> -->
                            ThinkClean
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#features">About Us</a></li>
                            <li><a href="#features">Booking</a></li>
                            <li><a href="#work-process">Window Cleaning</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="booking-header" id="">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h2>Book Your Cleaning Service Now</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="booking-section">
        <div class="container">
            <div class="row booking-form">
                <div class="col-12">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Contact Information</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Address</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Address</label>
                                    <input type="text" class="form-control" id="name" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="email">Postcode</label>
                                    <input type="email" class="form-control" id="email" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="phone">City</label>
                                    <input type="text" class="form-control" id="phone" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Apartment/Suite</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Apartment/Suite">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>How big is your home?</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select autocomplete="off" class="form-control">
                                        <option label="One Bedroom Apartment Cleaning - $129" value="24" selected="selected">One Bedroom Apartment Cleaning - $129</option>
                                        <option label="Two Bedroom Apartment Cleaning - $139" value="25">Two Bedroom Apartment Cleaning - $139</option>
                                        <option label="Three Bedroom Apartment/House Cleaning - $169" value="26">Three Bedroom Apartment/House Cleaning - $169</option>
                                        <option label="Four Bedroom House Cleaning - $199" value="27">Four Bedroom House Cleaning - $199</option>
                                        <option label="Five Bedroom House Cleaning - $239" value="28">Five Bedroom House Cleaning - $239</option>
                                        <option label="Six Bedroom House Cleaning - $269" value="29">Six Bedroom House Cleaning - $269</option>
                                        <option label="Hourly Rate - $47.50 per hour per cleaner" value="31">Hourly Rate - $47.50 per hour per cleaner</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Select your add-ons</h5>
                                <hr/>
                            </div>
                            <div class="section-add-ons col-md-12">
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>End Of Lease Clean <br> $211</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Change Bedsheets <br> $10</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Deep Clean 1-3 Bedrooms <br> $59</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Oven <br> $49</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Clean inside of Fridge <br> $49</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Garage Sweep and Tidy <br> $25</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Small Balcony <br> $29</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Large Balcony <br> $49</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>One Load of Laundry <br> $20</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Carpet Steam Cleaning <br> $79</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Large Balcony <br> $49</p>
                                </div>
                                <div class="card-add-ons">
                                    <img class="" src="/images/icon1.png">
                                    <p>Large Balcony <br> $49</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>When would you like us to arrive?</h5>
                                <hr/>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="appointment">Date</label>
                                    <input type="date" class="form-control" id="appointment" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="appointmentHour">Hour</label>
                                    <input type="time" class="form-control" id="appointmentHour" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>More information</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label>Where can we park?</label>
                                <select autocomplete="off" class="form-control">
                                    <option>
                                        Park in my driveway
                                    </option>
                                    <option>
                                        There is street parking
                                    </option>
                                    <option>
                                        Paid parking is available nearby
                                    </option>
                                    <option>
                                        Park in our garage
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label>How will we gain access to your home?</label>
                                <select autocomplete="off" class="form-control input-lg ng-pristine ng-valid ng-touched" type="drop_down" ng-model="ctrl.customValue.value" ng-class="{error: ctrl.customFieldError.error}" tui-convert-to-number="" style="">
                                    <option value="">
                                    </option>
                                    <option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="5" data-other="false" data-default="false" value="5" class="ng-binding ng-scope">
                                    I will be home
                                    </option><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="6" data-other="false" data-default="false" value="6" class="ng-binding ng-scope">
                                    I will leave a key in a secret place (we will call on arrival to find out where).
                                    </option><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="7" data-other="false" data-default="false" value="7" class="ng-binding ng-scope">
                                    I will provide an access code
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label>Is your date & time flexible?</label>
                                <select autocomplete="off" class="form-control input-lg ng-pristine ng-valid ng-touched" type="drop_down" ng-model="ctrl.customValue.value" ng-class="{error: ctrl.customFieldError.error}" tui-convert-to-number="" style="">
                                    <option value="">
                                    </option>
                                    <!-- ngRepeat: option in ctrl.customField.options | orderBy:'order' --><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="8" data-other="false" data-default="false" value="8" class="ng-binding ng-scope">
                                    No
                                    </option><!-- end ngRepeat: option in ctrl.customField.options | orderBy:'order' --><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="9" data-other="false" data-default="false" value="9" class="ng-binding ng-scope">
                                    Time is flexible, date is not.
                                    </option><!-- end ngRepeat: option in ctrl.customField.options | orderBy:'order' --><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="10" data-other="false" data-default="false" value="10" class="ng-binding ng-scope">
                                    Date is flexible, time is not.
                                    </option><!-- end ngRepeat: option in ctrl.customField.options | orderBy:'order' --><option ng-repeat="option in ctrl.customField.options | orderBy:'order'" ng-class="{hidden: !option.active}" data-id="11" data-other="false" data-default="false" value="11" class="ng-binding ng-scope">
                                    Both date and time are flexible.
                                    </option><!-- end ngRepeat: option in ctrl.customField.options | orderBy:'order' -->
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>How often would you like your service?</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control">
                                    <option>One Time Cleaning</option>
                                    <option>Fortnightly Cleaning</option>
                                    <option>Monthly Cleaning</option>
                                    <option>Weekly Cleaning</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Special Instructions</h5>
                                <hr/>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary text-uppercase" style="background-color: #3693ef;border-color: #3693ef;">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="copyright">Copyright &copy; 2020 Softy Pinko Company - Design: TemplateMo</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="js/custom.js"></script>

  </body>
</html>