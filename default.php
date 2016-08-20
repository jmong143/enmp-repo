<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ENMP - Travel Agency Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo2.png" alt="logo" style = "height:40px; width:200px;"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Gallery</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(./images/slider/s1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                   <h2 class="boxed animation animated-item-1">Lorem ipsum dolor sit amet, sit sumo</h2>
                                    <p class="boxed animation animated-item-2">Id errem saepe mel, no sea dicam soleat, ei quo praesent deseruisse temporibus. Cetero minimum vis in. Altera scripta argumentum no vel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(./images/slider/s2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">Nec tollit appetere ceteros, eum unum vitae ad</h2>
                                    <p class="boxed animation animated-item-2">Ut nibh lorem repudiare eos, ei elitr animal sea, mea probo eripuit consectetuer ex. cu quas appetere convenire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(./images/slider/s3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Cetero minimum vis in. Altera scripta</h2>
                                    <p class="animation animated-item-2">Pellentesque habitant morbi tristique senectus et netus et malesuada fames</p>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <img src = "./images/flights/domestic.png" class = "icon-md img-responsive"/>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Domestic Flights</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <img src = "./images/flights/international.png" class = "icon-md img-responsive"/>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">International Flights</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Services</h3>
                    <p>Please check some of our services offred</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/passport.jpg" alt="">
                                                <h5>
                                                    Passporting
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Passporting" href="./images/portfolio/full/passport.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/not-available.jpg" alt="">
                                                <h5>
                                                    Domestic Ticketing
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Domestic Ticketing" href="./images/portfolio/full/not-available.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/not-available.jpg" alt="">
                                                <h5>
                                                    International Ticketing
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="./images/portfolio/full/not-available.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/not-available.jpg" alt="">
                                                <h5>
                                                    Tour Packages Local/International
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Tour Packages Local/International" href="./images/portfolio/full/not-available.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/not-available.jpg" alt="">
                                                <h5>
                                                    Pilgrimage Tours
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Pilgrimage Tours" href="./images/portfolio/full/not-available.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="./images/portfolio/full/not-available.jpg" alt="">
                                                <h5>
                                                    Visa Assistance
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Visa Assistance" href="./images/portfolio/full/not-available.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->
    
    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a href = "index.html">ENMP Express World Tours & Travel</a> | All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li>
                            <a href="https://www.facebook.com/" target = "_blank" title = "Like Us On Facebook"><img src = "./images/social-media/fb.png" style="height:30px; width:30px">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target = "_blank" title = "Follow Us On Twitter"><img src = "./images/social-media/twitter.png" style="height:30px; width:30px">
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/share?url=https%3A%2F%2Fpremium.wpmudev.org%2Fblog%2Fhow-to-display-a-link-to-your-google-profile-on-your-wordpress-site%2F" onclick="javascript:window.open( this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600' );
                            return false;" title = "Share on Google Plus"><img src = "./images/social-media/google.png" style="height:30px; width:30px">
                            </a>
                        </li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
            social_tools:false,
            deeplinking:false,      
        });
    });
        </script>
</body>
</html>