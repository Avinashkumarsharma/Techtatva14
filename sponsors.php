<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/schedule.css">
<link rel="stylesheet" type="text/css" href="src/slippry.css">
<link rel="stylesheet" type="text/css" href="src/special.css">
<script src="src/slippry.min.js"></script>
</head>

<body>
	<header>
	<figure class ="logo"><a href="."><img src="assets/logo.png"></a></figure>
 		<!-- Button on the header -->
 		<ul id = "menu">
 			<li>
  				<div id = "bell" >
  					<a href="#">
  						<div id = "count">
  						<p></p>
  					    </div>
  					 </a>
  					<div id = "notification"  class  = "hide">
               <ul id = "notice" class = "scrollbar">
               
               </ul>
  					</div>
  				</div>
 			</li>
 		</ul>
 		<div id = "menuicon">
      <span>Menu</span><span id = "stack"></span>
    </div>
	</header>
	<nav id = "sidebar" class = "show">
		<section class = "sidebar">
			<div id ="bartitle">
        <p>the <span>Navigator</span> </p>
      </div>
      <ul class ="menu scrollbar">
        
      </ul>
		</section>
    <div class="clear"></div>
	</nav>
  <div class = "overlay"></div>
  <div id = "placeholder"></div>
  <section class = "subheading">
  	<a href="#">Sponsors</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
    </ul>
  </section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  <section id = "container">
    <div id = "slider">
      <ul id="slippery">
        <li><a href="http://www.ril.com" target = "_blank"><img src="assets/sponsors/relianceJIo.jpg"  alt="Reliance Jio"></a></li>                
        <li><a href="http://www.ideabrahma.com" target = "_blank">
          <img src="assets/sponsors/ideabrahma.jpg"  alt="Idea Brahma"></a></li>
        <li><a href="#"><img src="assets/sponsors/others.jpg"  alt="Our Other Sponsors"></a></li>
      </ul>
    </div>
    <script>
            $(function() {
                var demo1 = $("#slippery").slippry({
                    transition: 'fade',
                    useCSS: true,
                    speed: 1000,
                    pause: 3000,
                    auto: true,
                    preload: 'visible'
                });

                $('.stop').click(function () {
                    demo1.stopAuto();
                });

                $('.start').click(function () {
                    demo1.startAuto();
                });

                $('.prev').click(function () {
                    demo1.goToPrevSlide();
                    return false;
                });
                $('.next').click(function () {
                    demo1.goToNextSlide();
                    return false;
                });
                $('.reset').click(function () {
                    demo1.destroySlider();
                    return false;
                });
                $('.reload').click(function () {
                    demo1.reloadSlider();
                    return false;
                });
                $('.init').click(function () {
                    demo1 = $("#demo1").slippry();
                    return false;
                });
            });
        </script>
  <footer>
  </footer>
  </body>
  </html>