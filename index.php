<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AXIT Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
       
        <link rel="stylesheet" href="css/style.css">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700|Raleway:300,400" rel="stylesheet"> 
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- start navbar -->

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#axit-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand uppercase" href="#"><span>Ax</span><span class="main-color">it</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="axit-nav">
              
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <!-- end navbar -->

        <!-- start header -->
        <div class="header">
            <div class="overlay">
                <div class="container">
                    <div class="row centering-vh">
                        <div class="col-md-6">
                            <h1 class="uppercase text-center-xs-sm">Ax<span class="main-color">it</span></h1>
                            <p class="lead uppercase head-border text-center-xs-sm">MODERN AXURE TEMPLATE FOR BEAUTIFUL PROTOTYPES</p>
                            <p class="header-details text-center-xs-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                            <button class="btn-transparent"> Download </button>
                        </div>
                        <div class="col-md-offset-2 col-md-4 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-offset-1 col-xs-10 col-xs-offset-1 ">
                            <form class="center-block"  method="post" action="action.php">
                                <h2 class="h1 uppercase"> Try your <span class="main-color">Free</span> Trail Today</h2>
                                <div class="input-fields">
                                    <?=$statusMsg?>
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <input type="submit" class="btn btn-block main-bgcolor main-btn" name="submit" value="SUBSCRIBE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- start social media -->
        <div class="social-section  text-center-xs-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Social Media</h3>
                        <p>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                    <div class="col-md-8">
                        <i class="fa fa-facebook fa-3x fa-fw"></i>
                        <i class="fa fa-twitter fa-3x fa-fw"></i>
                        <i class="fa fa-google-plus fa-3x fa-fw"></i>
                        <i class="fa fa-pinterest fa-3x fa-fw"></i>
                        <i class="fa fa-instagram fa-3x fa-fw"></i>
                        <i class="fa fa-stumbleupon fa-3x fa-fw"></i>
                        <i class="fa fa-rss fa-3x fa-fw"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end social media -->

        <!-- start tabs-section -->
        <div class="tabs-section text-center-xs-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <ul class="list-unstyled tab-switch text-center">
                            <li class="selected" data-class="tab-one">Tab1</li>
                            <li data-class="tab-two">Tab2</li>
                            <li data-class="tab-three">Tab3</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <div class="tabs-content">
                            <div class="tab-one">
                                <h3>Tab1 with soft transition effect</h3>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>

                                <button class="btn btn-lg btn-download">Download</button>
                            </div>
                            <div class="tab-two">
                                <h3>Tab2 with soft transition effect</h3>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>

                                <button class="btn btn-lg btn-download">Download</button>
                            </div>
                            <div class="tab-three">
                                <h3>Tab3 with soft transition effect</h3>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                                <p class="lead">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>

                                <button class="btn btn-lg btn-download">Download</button>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive center-block" src="img/img1.png" alt="image1">
                    </div>
                </div>
            </div>
        </div>

        <!-- end tabs-section -->

        <!-- start sublist section -->
        <div class="sublist">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive center-block sub-img" src="img/img2.png" alt="image2">
                    </div>
                    <div class="col-md-6">
                        <div class="list-info">
                            <!-- start sublist -->
                            <h3 class="sublist-head head-border text-center-xs-sm">Sublist Section</h3>
                            <p class="sublist-details text-center-xs-sm">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.</p>
                            
                            <!-- start sublist list-icon1 -->
                            <div class="list-icon">
                                <i class="fa fa-cloud-upload fa-lg pull-left"></i>
                                <div class="desc pull-left">
                                    <h4>Upload</h4>
                                    <p>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.</p>
                                </div>
                            </div>
                            <!-- end sublist list-icon1 -->
                            <div class="clearfix"></div>

                            <!-- start sublist list-icon2 -->
                            <div class="list-icon">
                                <i class="fa fa-cloud-download fa-lg pull-left"></i>
                                <div class="desc pull-left">
                                    <h4>Download</h4>
                                    <p>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.</p>
                                </div>
                            </div>
                            <!-- start sublist list-icon2 -->
                        </div>
                        <!-- end sublist -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end sublist section -->

        <!-- start standard picture section -->
        <div class="standard-picture text-center-xs-sm">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="list-info">
                            <!-- start sublist -->
                            <h3 class="sublist-head head-border">Standard Picture Section</h3>
                            <p class="standard-picture-details">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.</p>
                            <p class="standard-picture-details">Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Proin gravida dolor sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>
                        </div>
                        <!-- end sublist -->
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive center-block" src="img/img4.png" alt="image3">
                    </div>
                </div>
            </div>
        </div>
        <!-- end sublist section -->

        <!-- Start this is awesome Section -->
        <section class="awesome text-center">
            <div class="container">
                <h2 class="h1 head-border-center uppercase">Why This is Awesome</h2>
                <p class="lead"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>

                <div class="row">
                    <div class="col-md-4 serv">
                        <div class="head">
                            <i class="fa fa-lightbulb-o fa-3x"></i>
                            <h3>Thoughtful Design</h3>
                        </div>
                        <p> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                    </div>
                    <div class="col-md-4 serv">
                        <div class="head">
                            <i class="fa fa-keyboard-o fa-2x"></i>
                            <h3>Well Crafted</h3>
                        </div>
                        <p> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                    </div>
                    <div class="col-md-4 serv">
                        <div class="head">
                            <i class="fa fa-flash fa-3x"></i>
                            <h3>Easy to Customize</h3>
                        </div>
                        <p> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End this is awesome Section -->

        <!-- Start Pricing Section -->
        <section class="pricing text-center">
            <div class="container">
                <h2 class="h1 head-border-center uppercase">Pricing Options</h2>
                <p class="lead pricing-details"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>

                <div class="row">
                    <div class="col-md-4">
                        <!-- start pricing box -->
                        <div class="pricing-box">
                            <h3 class="pricing-head">Basic</h3>
                            <div class="pricing-top">
                                <span class="price">
                                    <span class="currency">$</span>0
                                </span>
                                <span class="period">Free For Life</span>
                            </div>
                            <ul class="list-unstyled pricing-feature-list">
                                <li>1GB of space</li>
                                <li>1GB of bandwidth</li>
                                <li>3 Websites</li>
                                <li>Basic Customization</li>
                                <li>Wordpress Integration</li>
                                <li>Email Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pricing box -->
                    <div class="col-md-4">
                        <!-- start pricing box -->
                        <div class="pricing-box popular-box">
                            <div class="pricing-top">
                                <h3 class="pricing-head">Professional</h3>
                                <span class="price">
                                    <span class="currency">$</span>19
                                </span>
                                <span class="period">Monthly Payment</span>

                            </div>
                            <p class="popular">Our Most Popular</p>
                            <ul class="list-unstyled pricing-feature-list">
                                <li>1GB of space</li>
                                <li>1GB of bandwidth</li>
                                <li>3 Websites</li>
                                <li>Basic Customization</li>
                                <li>Wordpress Integration</li>
                                <li>Email Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pricing box -->
                    <div class="col-md-4">
                        <!-- start pricing box -->
                        <div class="pricing-box">
                            <div class="pricing-top">
                                <h3 class="pricing-head">Enterprise</h3>
                                <span class="price">
                                    <span class="currency">$</span>70
                                </span>
                                <span class="period">Monthly Payment</span>
                            </div>
                            <ul class="list-unstyled pricing-feature-list">
                                <li>1GB of space</li>
                                <li>1GB of bandwidth</li>
                                <li>3 Websites</li>
                                <li>Basic Customization</li>
                                <li>Wordpress Integration</li>
                                <li>Email Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- end pricing box -->
                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- Start this is awesome Section -->
        <section class="testimonial">
            <div class="container">
                <h2 class="h1 head-border-center uppercase text-center">What our customers are saying</h2>
                <p class="lead text-center"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-box">
                            <p class="testimonial-details"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                            <img class="img-responsive img-circle img-thumbnail pull-left" src="img/avatar.png" alt="avatar">
                            <div class="person pull-left">
                                <h4>Jeremy H.</h4>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-box">
                            <p class="testimonial-details"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                            <img class="img-responsive img-circle img-thumbnail pull-left" src="img/avatar.png" alt="avatar">
                            <div class="person pull-left">
                                <h4>Jeremy H.</h4>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-box">
                            <p class="testimonial-details"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan dolor sit amet lacus accumsan</p>
                            <img class="img-responsive img-circle img-thumbnail pull-left" src="img/avatar.png" alt="avatar">
                            <div class="person pull-left">
                                <h4>Jeremy H.</h4>
                                <p>Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="clearfix"></div>
        <!-- End testimonial Section -->

        <!-- Start stylish Section -->
        <section class="stylish text-center">
            <div class="overlay">
                <div class="container">
                    <h2 class="h1 head-border-center uppercase">Stylish Axure design</h2>
                    <p class="lead"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>
                    <button class="btn-transparent">Download</button>
                </div>
            </div>
        </section>
        <!-- End stylish Section -->

        <!-- Start contactus Section -->
        <section class="contactus text-center">
            <div class="container">
                <h2 class="h1 head-border-center uppercase">Contact Us</h2>
                <p class="lead"> sit amet lacus accumsan.viverra justo commodo.Proin gravida dolor sit amet lacus accumsan</p>

                <div class="row">
                    <form class="form-horizontal contactus-form">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name" >
                            <input type="email" name="email" class="form-control" placeholder="Email" >
                            <input type="password" name="password" class="form-control" placeholder="Subject" >
                        </div>
                        <div class="col-md-6">
                            <textarea name="message" class="form-control" placeholder="Message" rows="5" ></textarea>
                        </div>
                    </form>
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-download">Send Message</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End contactus Section -->

        <!-- start footer section -->
        <section class="footer text-center">
            <div class="container">
                    
                    <div class="footer-media">
                        <i class="fa fa-facebook fa-3x fa-fw"></i>
                        <i class="fa fa-twitter fa-3x fa-fw"></i>
                        <i class="fa fa-google-plus fa-3x fa-fw"></i>
                        <i class="fa fa-pinterest fa-3x fa-fw"></i>
                        <i class="fa fa-instagram fa-3x fa-fw"></i>
                        <i class="fa fa-stumbleupon fa-3x fa-fw"></i>
                        <i class="fa fa-rss fa-3x fa-fw"></i>
                    </div>
                    <h4><i class="fa fa-copyright"></i>2017 Axure Theme</h4>
            </div>
        </section>
        <!-- end footer section -->




        <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <script src="js/plugins.js"></script> -->
        <script src="js/main.js"></script>

    </body>
</html>
