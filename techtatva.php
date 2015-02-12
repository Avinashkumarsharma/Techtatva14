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
  	<a href="#">About Techtatva</a>
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
        <li><a href="#slide1"><img src="assets/sliders/tt14.jpg"  alt="TechTatva 2014"></a></li>                
        <li><a href="#slide2"><img src="assets/sliders/tt142.jpg"  alt="Techtatva a Glimpse"></a></li>
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
        <section id = "content">
          <h1>Techtatva | <span>Integrating Ideas</span></h1>
          <p>Thousands of ideas and thousands of combinations within those ideas sums up to Infinite possibilities! Imagine if Einstein and Da Vinci worked together. They could have created wonders. Now, you can too. Come with us on a journey of discovering the inner talent in you.</p>

<p>Throughout the years, TechTatva has been a platform for young, innovative minds across the country to come together and present their ideas in umpteen ways.</p>

<p>Ideas collect strength and are derived from the coming together or unification of great minds. It’s not just about the ideas, it’s about realizing the countless ways in which these ideas can positively affect us.</p>

<p>New ideas and new technology unified in infinite ways is what TechTatva is about this year. Even ideas which seem to be irrational as infinity at a point might turn out well if integrated with the right ones. </p>
 
<p>Our ability to solve many problems no longer depends much on cramming for new ideas, but on making use of the knowledge and ideas we already have.</p>

        </section>
  </section>
  <footer>
  </footer>
  </body>
  </html>