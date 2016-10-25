<?php
session_start();
if(isset($_POST["Logout"])) {
	session_destroy();
	exit("<meta http-equiv=\"refresh\" content=\"0\">");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/health-beauty/beauty-salon/v1.0/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2016 12:43:08 GMT -->
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

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/custom-rev-slider.html"></script>

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
    <div id="spinner"> <img src="images/preloaders/1.gif" alt=""> </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-middle p-0 bg-black-222 xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0"> <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="images/logo-wide-white.png" alt=""></a> </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right sm-text-center">
                <div class="font-20 text-white-f1 text-uppercase mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-24"></i> +(012) 345 6789</div>
                <a class="font-12 text-gray" href="#">Call us for more details!</a> </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border m-0">
              <div class="mt-10 mb-10 text-right sm-text-center">
			  <div class="font-20 text-black-f1 text-uppercase mb-5 font-weight-600">
			  <?php
				if(isset($_SESSION["Email_login"])){
 echo $_SESSION["Email_login"];
 echo'<form action="" method="Post">
 <input type="submit"	name="Logout" value="Logout">
 </form>';
}else{
 echo '<a href="login_final.php">Log In</a>';
}
         ?>     
	</div>	 
                <a class="font-12 text-gray" href="#"> info@yourdomain.com</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed navbar-dark">
        <div class="container">
          <nav>
            <div id="menuzord" class="menuzord no-bg">
              <ul class="menuzord-menu">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
              <ul class="pull-right flip hidden-sm hidden-xs">
                <li><a class="btn btn-black bg-black-333 mt-20 text-white no-border bs-modal-ajax-load" data-toggle="modal" data-target="#BSParentModal" href="ajax-load/reservation-form.html">Book Now</a> </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0"> 
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
              
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg9.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description=""> 
                <!-- MAIN IMAGE --> 
                <img src="images/bg/bg9.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina> 
                <!-- LAYERS --> 
                
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme font-playfair text-white font-weight-400 m-0" 
                  id="rs-1-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-160']"
                  data-fontsize="['48']"
                  data-lineheight="['78']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Get Your Dreamy </div>
                
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-theme-colored text-uppercase font-playfair font-weight-600" 
                  id="rs-1-layer-2"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-80']"
                  data-fontsize="['90']"
                  data-lineheight="['114']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Hairstyle </div>
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-right font-raleway text-white" 
                  id="rs-1-layer-3"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['18']"
                  data-lineheight="['34']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:300;">We Provide Our best opportunity and qualified trainers<br>
                  for best workout yourself as you want </div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-transparent btn-circled mr-10" href="ajax-load/reservation-form.html" data-target="#BSParentModal" data-toggle="modal">Booking Now</a> </div>
              </li>
              
              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg17.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description=""> 
                <!-- MAIN IMAGE --> 
                <img src="images/bg/bg17.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina> 
                <!-- LAYERS --> 
                
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-2-layer-1"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-140']"
                  data-fontsize="['72']"
                  data-lineheight="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:400;"><i class="flaticon-salon-scissors-and-comb"></i> </div>
                
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-70']"
                  data-fontsize="['24']"
                  data-lineheight="['64']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:400;">- Estimated Since 1986 - </div>
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-uppercase text-center font-playfair text-white" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-10']"
                  data-fontsize="['72']"
                  data-lineheight="['100']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;">We Are With You </div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['80']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-lg btn-circled mr-10" href="#">Learn More</a> </div>
              </li>
              
              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg15.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description=""> 
                <!-- MAIN IMAGE --> 
                <img src="images/bg/bg15.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina> 
                <!-- LAYERS --> 
                
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-white text-uppercase font-playfair font-weight-400" 
                  id="rs-3-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-160']"
                  data-fontsize="['42']"
                  data-lineheight="['78']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Most Popular Barber </div>
                
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase font-playfair text-theme-colored font-weight-600 m-0" 
                  id="rs-3-layer-2"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-80']"
                  data-fontsize="['100']"
                  data-lineheight="['114']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Saloon </div>
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme font-raleway text-white" 
                  id="rs-3-layer-3"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['20']"
                  data-fontsize="['18']"
                  data-lineheight="['34']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:300;">We Provide Our best opportunity and qualified trainers<br>
                  for best workout yourself as you want </div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['90']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored btn-circled mr-10" href="#">Booking Now</a> </div>
              </li>
            </ul>
          </div>
          <!-- end .rev_slider --> 
        </div>
        <!-- end .rev_slider_wrapper --> 
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
              sliderType:"standard",
              jsFileLocation: "js/revolution-slider/js/",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "gyges",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      }
                  },
                    bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [620, 768, 960, 720],
              lazyType: "none",
              parallax:"mouse",
              parallaxBgFreeze:"off",
              parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: 1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script> 
        <!-- Slider Revolution Ends --> 
      </div>
    </section>
    
    <!-- Section: welcome -->
    <section id="welcome">
      <div class="container pt-80 pb-80">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="p-60 pt-40 pb-40" data-bg-img="images/about/2.jpg">
                <h3 class="text-theme-colored text-uppercase letter-space-2">Opening Hours! <br>
                  <span class="text-white">Check Our Class Here</span></h3>
                <div class="item-html divider" >
                  <ul class="list-unstyled text-uppercase text-white mb-20">
                    <li class="clearfix pt-5 pb-5"> <span class="pull-left mr-30"> Monday - Friday </span>
                      <div class="value font-weight-800"> 9.00 - 20.00 </div>
                    </li>
                    <li class="clearfix pt-5 pb-5"> <span class="pull-left mr-80"> Saturday </span>
                      <div class="value font-weight-800"> 10.00 - 16.00 </div>
                    </li>
                    <li class="clearfix pt-5 pb-5"> <span class="pull-left mr-90"> Sunday </span>
                      <div class="value font-weight-800"> 9.30 - 18.00 </div>
                    </li>
                  </ul>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam velit, a reiciendis deleniti, blanditiis aliquam quam, iste voluptate saepe provident quasi numquam, inventore. Sunt, facilis!.</p>
                  <a href="#" class="btn btn-theme-colored btn-flat btn-lg mt-20">Online Reservation</a> </div>
              </div>
            </div>
            <div class="col-md-6 mt-sm-60"> <i class="flaticon-scissors font-60"></i>
              <h5 class="letter-space-8 text-uppercase text-theme-colored">Welcome to the salonZone</h5>
              <h3 class="text-uppercase">obcaecati ad tempora vitae quidem Dolores.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente ex quasi, pariatur harum! Tempora esse quae in ea reprehenderit veritatis molestiae atque, incidunt aut explicabo voluptatum, quibusdam temporibus! Quasi, culpa.</p>
              <ul class="list-inline mt-20">
                <li><a href="#"><img class="img-circle" src="images/hair-style/1.jpg" alt=""></a></li>
                <li><a href="#"><img class="img-circle" src="images/hair-style/2.jpg" alt=""></a></li>
                <li><a href="#"><img class="img-circle" src="images/hair-style/3.jpg" alt=""></a></li>
                <li><a href="#"><img class="img-circle" src="images/hair-style/4.jpg" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-white-9" data-bg-img="images/bg/bg8.jpg" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-80 pb-md-20">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-md-50">
            <div class="funfact text-right mr-20">
              <div class="funfact-icon xs-pull-none pull-right flip mr-sm-150 mr-xs-0 mr-40 mr-md-30"> <i class="pe-7s-smile text-black-light mt-20 font-48"></i> </div>
              <div class="funfact-content xs-pull-none pull-left flip">
                <h2 data-animation-duration="2000" data-value="754" class="animate-number text-theme-colored font-montserrat font-48 font-weight-300 line-top-right">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-raleway font-18 text-black-333 mt-5">Happy People </h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-md-50">
            <div class="funfact text-right mr-20">
              <div class="funfact-icon xs-pull-none pull-right flip mr-sm-150 mr-xs-0 mr-40 mr-md-30"> <i class="pe-7s-like text-black-light mt-20 font-48"></i> </div>
              <div class="funfact-content xs-pull-none pull-left flip">
                <h2 data-animation-duration="2000" data-value="984" class="animate-number text-theme-colored font-montserrat font-48 font-weight-300 line-top-right">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-raleway font-18 text-black-333 mt-5">People Likes </h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-md-50">
            <div class="funfact text-right mr-20">
              <div class="funfact-icon xs-pull-none pull-right flip mr-sm-150 mr-xs-0 mr-40 mr-md-50"> <i class="pe-7s-medal text-black-light mt-20 font-48"></i> </div>
              <div class="funfact-content xs-pull-none pull-left flip">
                <h2 data-animation-duration="2000" data-value="106" class="animate-number text-theme-colored font-montserrat font-48 font-weight-300 line-top-right">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-raleway font-18 text-black-333 mt-5">Award Won </h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-md-50">
            <div class="funfact text-right mr-20">
              <div class="funfact-icon xs-pull-none pull-right flip mr-sm-150 mr-xs-0 mr-40 mr-md-30"> <i class="pe-7s-coffee text-black-light mt-20 font-48"></i> </div>
              <div class="funfact-content xs-pull-none pull-left flip">
                <h2 data-animation-duration="2000" data-value="469" class="animate-number text-theme-colored font-montserrat font-48 font-weight-300 line-top-right">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-raleway font-18 text-black-333 mt-5">Cup Of Coffee </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Pricing -->
    <section class="pricing">
      <div class="container pt-70 pb-70 pb-sm-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our <span class="text-black font-weight-300">Pricing</span></h2>
              <p class="text-uppercase letter-space-4">Join our gymzone club and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase">Join our gymzone club </h3>
              <h5 class="letter-space-4 font-weight-400 text-theme-colored">Lorem ipsum dolor sit.</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ullam assumenda deserunt!</p>
              <a class="btn btn-theme-colored btn-flat mt-10" href="#"> View More</a> <img  class="img-fullwidth mt-40" src="images/about/5.png" alt=""> </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20"> <img class="img-circle border-rounded border-8px" width="150" src="images/pricing/s1.jpg" alt=""> </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2">Woman's Haircut</h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">$80</span> </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?</p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="#">Buy This pakage</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20"> <img class="img-circle border-rounded border-8px" width="150" src="images/pricing/s2.jpg" alt=""> </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2">Woman's Haircut</h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">$45</span> </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?</p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="#">Buy This pakage</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20"> <img class="img-circle border-rounded border-8px" width="150" src="images/pricing/s3.jpg" alt=""> </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2">Woman's Haircut</h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">$75</span> </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?</p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="#">Buy This pakage</a> </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="pricing-table mb-30">
                    <div class="package-type">
                      <div class="thumb pull-left mr-20 mb-20"> <img class="img-circle border-rounded border-8px" width="150" src="images/pricing/s4.jpg" alt=""> </div>
                      <div class="price pt-30">
                        <h5 class="text-uppercase letter-space-2">Woman's Haircut</h5>
                        <span class="font-weight-800 font-36 text-center text-theme-colored">$55</span> </div>
                      <div class="clearfix"></div>
                      <div class="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti animi voluptatibus quaerat at, dicta quasi officia cupiditate enim, consequatur?</p>
                        <a class="btn btn-lg btn-colored btn-theme-colored text-uppercase btn-block btn-flat mt-20" href="#">Buy This pakage</a> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Reservation Form -->
    <section class="divider parallax" data-bg-img="images/bg/bg15.jpg" data-parallax-ratio="0.7">
      <div class="container pt-80 pb-70 pb-md-20">
        <div class="row">
          <div class="col-md-6"> 
            <!-- Reservation Form Start-->
            <form id="reservation_form" name="reservation_form" class="reservation-form p-50 pt-60 pb-60 mb-0 bg-light" method="post" action="http://kodesolution.com/demo/health-beauty/beauty-salon/v1.0/includes/reservation.php">
              <h3 class="font-raleway text-theme-colored mt-0 mb-20">Reservation Here</h3>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group mb-30">
                    <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <div class="styled-select">
                      <select id="person_select" name="person_select" class="form-control" required>
                        <option value="">Person</option>
                        <option value="1 Person">1 Person</option>
                        <option value="2 Person">2 Person</option>
                        <option value="3 Person">3 Person</option>
                        <option value="Family Pack">Full Family</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input name="reservation_date" class="form-control required date-picker" type="text" placeholder="Reservation Date" aria-required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group mb-0 mt-0">
                    <input name="form_botcheck" class="form-control" type="hidden" value="">
                    <button type="submit" class="btn btn-colored btn-theme-colored btn-lg btn-flat btn-submit" data-loading-text="Please wait...">Submit Now</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- Reservation Form End--> 
            
            <!-- Reservation Form Validation Start--> 
            <script type="text/javascript">
              $("#reservation_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script> 
            <!-- Reservation Form Validation Start --> 
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Gallery & -->
    <section id="gallery" class="bg-lighter">
      <div class="container-fluid pt-70 pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our <span class="text-black font-weight-300">Gallery</span></h2>
              <p class="text-uppercase letter-space-4">Join our gymzone club and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12"> 
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="portfolio-gallery grid-4 gutter clearfix"> 
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/1.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End --> 
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/2.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End --> 
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/3.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End --> 
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/4.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End --> 
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/5.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/6.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/6.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/7.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/7.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb"> <img class="img-fullwidth" src="images/gallery/8.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored"> <a href="#"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                    <a class="hover-link" data-rel="prettyPhoto[gallery2]" href="images/gallery/8.jpg" data-title="<span class='btmBtns'><button type='button' class='btn btn-info'><span>Buy Now</span></button></span>">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid --> 
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section:  Services-->
    <section id="services">
      <div class="container pt-70 pb-20 pb-sm-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Special <span class="text-black font-weight-300"> Services</span></h2>
              <p class="text-uppercase letter-space-4">Join our gymzone club and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center pl-0 pr-0 mb-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-female-hair-shape-and-face-silhouette text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Make Up</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center pl-0 pr-0 mb-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-razors text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Nails Design</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center pl-0 pr-0 mb-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-hairdresser-washing-the-hair-of-a-client-with-bubbles-shampoo text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Beauty services </strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center pl-0 pr-0 mb-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-scissors-and-comb text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Moustache Trim</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center mb-sm-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-hairdresser-with-combs text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Moustache Trim</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center mb-sm-20"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-long-female-hair-tincture text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Moustache Trim</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center mb-sm-0"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-hair-straightener-on-long-female-hair text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Moustache Trim</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3">
              <div class="icon-box text-center mb-sm-0"> <a href="#" class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl"> <i class="flaticon-salon-hairdryer-and-comb text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 letter-space-4 text-uppercase"><strong>Moustache Trim</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: trainer -->
    <section id="trainer" class="bg-lighter">
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title" >Our hair <span class="text-black font-weight-300">Expert</span></h2>
              <p class="text-uppercase letter-space-4">Join our gymzone club and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row ml-md-0">
            <div class="owl-carousel-3col">
              <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/1.png" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info">
                    <div class="social-network">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                    <div class="trainer-biography">
                      <h3 class="text-white">Steve Smith</h3>
                      <h5 class="text-white">Hair Expart</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/2.png" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info">
                    <div class="social-network">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                    <div class="trainer-biography">
                      <h3 class="text-white">Steve Smith</h3>
                      <h5 class="text-white">Beautician</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/3.png" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info">
                    <div class="social-network">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                    <div class="trainer-biography">
                      <h3 class="text-white">Steve Smith</h3>
                      <h5 class="text-white">Hair Expart</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/4.png" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info">
                    <div class="social-network">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                    <div class="trainer-biography">
                      <h3 class="text-white">Steve Smith</h3>
                      <h5 class="text-white">Hair Expart</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="trainer-item">
                  <div class="trainer-thumb"> <img src="images/team/5.png" alt="" class="img-fullwidth img-responsive"> </div>
                  <div class="trainer-info">
                    <div class="social-network">
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                      </ul>
                    </div>
                    <div class="trainer-biography">
                      <h3 class="text-white">Steve Smith</h3>
                      <h5 class="text-white">Hair Expart</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Clients -->
    <section class="divider parallax layer-overlay overlay-dark"  data-bg-img="images/bg/bg3.jpg" data-parallax-ratio="0.7" >
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="owl-carousel-6col clients-logo carousel">
              <div class="item"> <a href="#"><img src="images/clients/1.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/2.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/3.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/4.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/5.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/6.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/2.jpg" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/4.jpg" alt=""></a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: News & Blog -->
    <section id="news">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="news-title bg-black p-40" data-bg-img="images/about/2.jpg">
                <h2 class="text-uppercase text-theme-colored"> News & <span class="text-white">Blog</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic amet tenetur quis voluptatem, eum ipsam ea temporibus quas ratione necessitatibus! Ea dicta tempore?</p>
                <a href="#" class="btn btn-theme-colored btn-flat btn-lg text-uppercase mt-20">View All</a> </div>
            </div>
            <div class="col-md-8">
              <div class="owl-carousel-2col owl-carousel">
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="images/news/1.jpg"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <ul>
                              <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> 265 <br>
                                Likes</a></li>
                              <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> 72 <br>
                                comments</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                      <h5 class="entry-title mt-0 pt-0 text-uppercase letter-space-2"><a href="#">Sponsor a child today</a></h5>
                      <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                      <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left">Read more</a>
                      <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a href="#">Admin |</a></li>
                        <li> Nov 13, 2015</li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="images/news/2.jpg"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <ul>
                              <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> 265 <br>
                                Likes</a></li>
                              <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> 72 <br>
                                comments</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                      <h5 class="entry-title mt-0 pt-0 text-uppercase letter-space-2"><a href="#">Sponsor a child today</a></h5>
                      <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                      <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left">Read more</a>
                      <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a href="#">Admin |</a></li>
                        <li> Nov 13, 2015</li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="images/news/3.jpg"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                        <div class="display-table">
                          <div class="display-table-cell">
                            <ul>
                              <li><a href="#" class="text-white"><i class="fa fa-thumbs-o-up"></i> 265 <br>
                                Likes</a></li>
                              <li class="mt-20"><a href="#" class="text-white"><i class="fa fa-comments-o"></i> 72 <br>
                                comments</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="entry-content border-1px p-20">
                      <h5 class="entry-title mt-0 pt-0 text-uppercase letter-space-2"><a href="#">Sponsor a child today</a></h5>
                      <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                      <a href="#" class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left">Read more</a>
                      <ul class="list-inline entry-date pull-right font-12 mt-5">
                        <li><a href="#">Admin |</a></li>
                        <li> Nov 13, 2015</li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                  </article>
                </div>
              </div>
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
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center"> <img src="images/logo-wide-white.png" alt="">
          <p class="font-12 mt-20 mb-20">NextEvent is a library of corporate and business templates with predefined web elements which helps you to build your own site. Lorem ipsum dolor sit amet elit.</p>
          <ul class="social-icons flat medium list-inline mb-40">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hourse">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues : </span>
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
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="twitter-feed list-border clearfix" data-username="Envato"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
            <ul class="list angle-double-right list-border">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Admin Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Copyright Notice</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Quick Contact</h6>
            <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="http://kodesolution.com/demo/health-beauty/beauty-salon/v1.0/includes/quickcontact.php" method="post">
              <div class="form-group">
                <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea name="form_message" class="form-control" required placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-flat btn-xs btn-transparent text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>
            
            <!-- Quick Contact Form Validation--> 
            <script type="text/javascript">
              $("#quick_contact_form2").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script> 
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copy-right p-20 bg-black-333">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
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

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- Mirrored from kodesolution.com/demo/health-beauty/beauty-salon/v1.0/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jul 2016 12:43:32 GMT -->
</html>