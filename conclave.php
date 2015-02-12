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
  	<a href="#">Manipal Conclave</a>
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
        <li><a href="#slide1"><img src="assets/sliders/conclave.jpg"  alt="Manipal Conclave"></a></li>                
        
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
          <h1>Manipal Conclave</h1>
          <p>The Manipal Conclave is MIT’s initiative to bring together 
            the most diverse, interesting, thought provoking and inspiring 
            people we can find. Spread over a weekend before the fest The 
            Conclave promises to be an eclectic and egalitarian platform for 
            ideas from across the country. Bringing together brilliant, 
            cutting-edge minds from all disciplines that impact the world today, 
            all the while trying to impress upon the participants the theme of
            this year’s fest, Integrating Ideas.</p>
          
          <p>In brief, it shall be a series of events varying from talks to debates, 
            from panels to AMA’s between some of the best minds in the country in each field, 
            and the students from one of the most diverse colleges in the nation</p>
        </section>
  </section>
  <footer>
  </footer>
  </body>
  </html>
