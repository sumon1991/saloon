<?php include( "./inc/connect.php" ); ?>
<?php


//Set useful variables for paypal form
$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_id = 'info@codexworld.com'; //Business Email

?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/health-beauty/beauty-salon/v1.0/page-gallery-4col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2016 12:46:36 GMT -->
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="HairCare- Beauty Salon & Barber HTML5 Template for Women & Men" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>HairCare- Beauty Salon & Barber HTML5 Template for Women & Men</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-lemon.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- external javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="images/preloaders/1.gif" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top sm-text-center bg-theme-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-6">
            <div class="widget m-0 mt-5 no-border">
              <ul class="list-inline text-right sm-text-center">
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-phone"></i> 123-456-789 </div>
                </li>
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> contact@yourdomain.com </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 text-right flip sm-text-center">
            <div class="widget m-0">
              <ul class="social-icons icon-dark icon-circled icon-theme-colored icon-sm">
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter">
        <div class="container">
          <div class="row">
            <nav id="menuzord-right" class="menuzord no-bg"> <a class="menuzord-brand pull-left flip logoNoMargin" href="javascript:void(0)"><img src="images/logo-wide-white.png" alt=""></a>
              <ul class="menuzord-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li class="active"><a href="videos.html">Videos</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Videos</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="portfolio-gallery grid-2 gutter clearfix"> 
			  
			  <?php
	     //$db = 'login_logout';
		//fetch products from the database
		$results1 = "SELECT * FROM `tbl_users_video`";
		//echo $results1;
		$results=mysql_query($results1) or die(mysql_error());
		
		while($row = mysql_fetch_assoc($results)){ 
		//echo $row['image'];
	
	?>
	
	
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> 
				 
				  
				  <video class="img-fullwidth" controls>
					  <source src="admin/user_video/<?php echo $row['videoPic']; ?>" type="video/mp4" alt="project">
					 
					</video>
				  
				  
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <br/>Name: <?php echo $row['videoName']; ?>
					  <br/>Price: <?php echo $row['videoPrice']; ?>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="admin/user_video/<?php echo $row['videoPic']; ?>" data-title="<span class='btmBtns'><a href='bankinfo.html' class='btn btn-info'>
					<span>Buy Now</span>
					
					
					</a>
					</span>">View more</a>
                  </div>
          <div class="thubmFormDiv">        
				  <form action="<?php echo $paypal_url; ?>" method="post">

						<!-- Identify your business so that you can collect the payments. -->
						<input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
        
						<!-- Specify a Buy Now button. -->
						<input type="hidden" name="cmd" value="_xclick">
        
						<!-- Specify details about the item that buyers will purchase. -->
						<input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
						<input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
						<input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
						<input type="hidden" name="currency_code" value="USD">
        
						<!-- Specify URLs -->
						<input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/cancel.php'>
						<input type='hidden' name='return' value='http://localhost/paypal_integration_php/success.php'>

        
						<!-- Display the payment button. -->
						<input class="btn btn-info" type="submit" name="submit" border="0"
						 alt="PayPal - The safer, easier way to pay online" value="Buy Now">
						<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
					</form>
					</div>
                </div>
  <?php } ?> 
  
  
                <!-- Portfolio Item End --> 
                <!-- Portfolio Item Start -->

              <!-- End Portfolio Gallery Grid -->
                          
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
  <footer id="footer" class="footer divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg7.jpg" data-parallax-ratio="0.7">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark"> 
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">            
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>            
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Body Building</a></li>
              <li><a href="#">Fitness Classes</a></li>
              <li><a href="#">Weight lifting</a></li>
              <li><a href="#">Yoga Courses</a></li>
              <li><a href="#">Training</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hourse">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Colosed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-30">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +61 3 1234 5678 <br>
              +12 3 1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="social-icons icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Calendar Event Data --> 
<script src="js/calendar-events-data.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/demo/health-beauty/beauty-salon/v1.0/page-gallery-4col.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2016 12:46:37 GMT -->
</html>