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
<script src="src/slippry.min.js"></script>
<style type="text/css">
.subheading:after {
  content: none;

}
#container {
  width: 100%;
  margin: 0 auto;
}
#content {
  width: 85%;
  margin: 3em auto;
}
#content p {
  font-family: 'Open Sans', sans-serif;
  font-size: 1.4em;
  line-height: 1.8em;
  color: #666;
  padding-bottom: 1.5em;
  text-align: justify;
}
#content h1 {
  font-family: 'Open Sans', 'Jura', sans-serif;
  font-size: 2.5em;
  color: #000;
  margin-bottom: 1em;
}
#content h1>span {
  color: #047a85;
}
</style>
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
  	<a href="#">Manipal Institute of Technology</a>
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
        <li><a href="#slide1"><img src="assets/sliders/mit1.jpg"  alt="Manipal Institute of Technology"></a></li>                
        <li><a href="#slide2"><img src="assets/sliders/mit2.jpg"  alt="Manipal at night"></a></li>
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
          <h1>Know Manipal Institute of Technology</h1>
          <p>Nestled in the shallow hills of the Western Ghats, Manipal Institute of Technology is one of the premiere private engineering colleges in India. The college boasts the current CEOs of Microsoft and Nokia, Satya Nadella and Rajiv Suri respectively, among its highly esteemed alumnus. Founded in 1957, this institute is one of the most prestigious private colleges in the country. With the intention of promoting technology and pushing the boundaries of innovation every year, M.I.T. holds a national level technical fest, TechTatva, which is open to all engineering colleges of the nation. The fest receives participation from various esteemed colleges of the country and has a unique theme every year around which its events revolve.</p>

<p>This TechTatva we bring to you a revamped version of the fest. Unlike previous years, the prime focus this year is on ideas; the bringing together of ideas that have a purposeful impact. Ideas collect strength and are derived from the coming together or unification of great minds. It’s not just about the ideas, it’s about realizing the ways in which these ideas can positively affect us. ‘New mornings. New ideas. New technology.’ is what TechTatva 2014 is about. Even ideas which seem to be irrational as infinity at a point might turn out well if integrated with the right ones. This fest gives you a whole realm of possibilities to explore. Bring out the Nick Fury in you and bring together ideas and create something as awesome as the Avengers, or an idea as unbreakable as the Justice League, and be a part of this tech extravaganza. From coding to robotics to gaming, there are a lot of opportunities to get hold of. It’s a platform to allow young budding engineers to showcase their creativity and innovation. So welcome to this forum that lets your thoughts run free; to think out of the box and without an obsession about the outcome. Welcome to TechTatva 2014: Integrating ideas.</p>
        </section>
  </section>
  <footer>
  </footer>
  </body>
  </html>