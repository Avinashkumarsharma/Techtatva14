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
<style type="text/css">
  /* News */
  body {
    overflow-y:hidden;
  }
  .news-slider {
    margin: 5em auto;
    box-shadow: 0 0 10px #dddddd;
  }
  .news-slider .text-content {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 1em;
    width: 30%;
    height: 100%;
  }
  .news-slider .text-content h2 {
    margin: 0;
  }
  .news-slider .text-content p {
    margin: 1em 0;
  }
  .news-slider .text-content a.button-link {
    padding: 0.25em 0.5em;
    position: absolute;
    bottom: 1em;
    right: 1em;
  }
  .news-slider .image-content {
    line-height: 0;
  }
  .news-slider .image-content img {
    max-width: 100%;
  }
  .news-slider .news-pager {
    text-align: right;
    display: block;
    margin: 0.2em 0 0;
    padding: 0;
    list-style: none;
  }
  .news-slider .news-pager li {
    display: inline-block;
    padding: 0.6em;
    margin: 0 0 0 1em;
  }
  .news-slider .news-pager li.sy-active a {
    color: #31ace2;
  }
  .news-slider .news-pager li a {
    font-weight: 500;
    text-decoration: none;
    display: block;
    color: #222;
  }
  .news-slider h1 {
    font-size: 1.5em;
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
  	<a href="#">Featured Workshops</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
    </ul>
  </section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  <section id = "container">
    <section id="news-demo">
      <article>
    <div class="text-content">
      <h1>Microsoft Windows Phone 8.1 App Dev</h1>
      <p>Windows Phone 8 is a new revamp of OS from UI perspective giving completely a 
        new and great user experience.   In this workshop, you will learn how you to develop 
        applications for Windows Phone and publish to marketplace. Microsoft aims for Apps for 
        Social Good.  Create solutions that address social and civic issues.  Please refer this
         link for ideas on such apps <a href = "http://www.appsforasia.com/Home/AppRequirements" target = "_blank">appsforasia</a>.  
        This theme aligns with Apps for Asia initiative by Microsoft. </p>
        <h2>24TH SEPTEMBER-28TH SEPTEMBER</h2>
        <br>
        <h2>24TH-27TH: 5:30-10:00 </h2><br>
        <h2>28TH: 9:30-12:30 and 2:00-5:00 and 6:00-9:00</h2><br>
        <h2>For 2nd Year and above, limited number of seats. There will be a screening test on 20th September</h2><br>
    </div>
    <div class="image-content"><img src="assets/sliders/windows.jpg" alt="Windows Phone Workshop"></div>
  </article>
  <article>
    <div class="text-content">
      <h1>Comic Design</h1>
      <p>WE BRING TO YOU THE COMIC DESIGN WORKSHOP.IT INCLUDES A LOT OF THING LIKE Drawing Methods in Western Style 
Real Art vs Comics Art  Shading and Coloring  Story and Composition Shading and Coloring Story and Composition Manual Drawing
AND MANY MORE ASPECTS WHICH YOU REQUIRE FOR COMIC DESIGN</p>
        <h2>28TH SEPTEMBER: 9:00-12:30 and 2:00-5:30</h2><br>
        <h2>Open for all</h2>
    </div>
    <div class="image-content"><img src="assets/sliders/comic.jpg" alt="Comic Design"></div>
  </article>

  <article>
    <div class="text-content">
      <h1>Augmented reality</h1>
      <p>Augmented reality (AR) is a cutting-edge technology that shows impressive promises when it comes to
affecting a human’s behavior at relevant moments. It allows for a digitally enhanced view of the real
world, connecting you with more meaningful content in your everyday life. With the camera and sensors
in a smart phone or tablet, AR adds layers of digital information – videos, photos, sounds – directly on
top of items in the world around us.</p>
        <h2>24TH SEPTEMBER-28TH SEPTEMBER</h2>
        <br>
        <h2>1ST OCTOBER-3RD OCTOBER</h2><br>
        <h2>1ST and 3RD 6:00-9:00 and 2ND 9:00-12:30 and 2:00-5:00  6:00-9:00</h2><br>
        <h2>Open For all</h2>
    </div>
    <div class="image-content"><img src="assets/sliders/augmented.jpg" alt="Augmented Reality"></div>
  </article>
  <article>
    <div class="text-content">
      <h1>Sixth Sense Technology</h1>
      <p>ITS TIME TO Interface our Physical World with Digital World through Image Processing. 
        The workshop includes finger counting using colour detection taking snapshot using 
        hand gestureand many more exciting things. The workshop is covered over a span of 5 days 
        3 hrs each.</p>
        <h2>1ST OCTOBER-3RD OCTOBER</h2>
        <br>
        <h2>1ST and 3RD 6:00-9:00 and 2ND 9:00-12:30 and 2:00-5:00 and 6:00-9:00</h2><br>
        <h2>Open For all</h2>
    </div>
    <div class="image-content"><img src="assets/sliders/sixthsense.jpg" alt="Sixth Sense Technology"></div>
  </article>
    <article>
    <div class="text-content">
      <h1>Interactive talk on Student satellite missions</h1>
      <p>Parikshit Student Satellite Team presents an interactive talk on student satellite projects.  Light will be thrown on the various subsystems involved, the opportunities created and the difficulties faced while designing a nanosatellite.   
Building a structure to withstand an acceleration of 11.5G, locating and maneuvering objects above an altitude of 700km, implementing a real time operating system, decoding beacon data, processing thermal images, designing 4 layered printed circuit boards and deployment into space are just a few terms you will come across during the talk.
</p>
        <h2>No delegate card required. All are invited.</h2>
        <br>
        <h2>Date: October 9th </h2><br>
    </div>
    <div class="image-content"><img src="assets/sliders/parikshit.jpg" alt="Interactive talk on Student satellite missions"></div>
  </article>
</section>
<script type="text/javascript">
  jQuery('#news-demo').slippry({
  // general elements & wrapper
  slippryWrapper: '<div class="sy-box news-slider" />', 
  elements: 'article', 
  adaptiveHeight: true,
  captions: false,
  pagerClass: 'news-pager',
  transition: 'horizontal', 
  speed: 1200,
  pause: 8000,
  autoDirection: 'prev'
});
</script>
  </section>
  <footer>
  </footer>
  </body>
  </html>