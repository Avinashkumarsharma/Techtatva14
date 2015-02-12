<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery|Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/gallery.css">
<script src ="src/jquery.easing.1.3.js"></script>
<script src ="src/mousewheel.js"></script>
<script src ="src/gallery.js"></script>
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
        <li><a href="">Home</a></li>
        <li><a href="">Register</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Events</a></li>
        <li class = "submenu" >
          <ul >
            <li><a href="">Constructure</a></li>
            <li><a href="">Code Heat</a></li>
            <li><a href="">Code Heat</a></li>
            <li><a href="">Code knocout</a></li>
            <li><a href="">Constructure</a></li>
            <li><a href="">Code Heat</a></li>
            <li><a href="">Code Heat</a></li>
            <li><a href="">Code knocout</a></li>
        </ul>
      </li>
      <li><a href="">Schedule</a></li>

      </ul>
		</section>
    <div class="clear"></div>
	</nav>
  <div class = "overlay"></div>
  <div id = "placeholder"></div>
  <section class = "subheading">
  	<a href="#">the Gallery</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
      <!--<li><a href=""></a></li>
      <li><a href=""></a></li>-->
    </ul>
  </section>
  <section id = "container">
    <section id = "canvas">
      <figure id = "dummy">
      <div class ="loader">
        <img src="assets/loader.gif">
      </div>
      <img src="#" class = "pic">
      <div class = "imgoverlay">
        <p class = "title"></p>
        <p class = "likes"></p>
        <p class = "desc"></p>
      </div>
    </figure>
  </section>
</section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  </body>
  </html>