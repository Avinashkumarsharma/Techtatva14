<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/event.css">
<script src = "src/core.js"></script>
<script src = "src/masonry.pkgd.min.js"></script>
<script src = "src/events.js"></script>
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
  	<a href="#">Categories</a>
  </section> 
  <section class = "dropdown hide ">
    <ul class = "category scrollbar" id = "category">
    </ul>
  </section>
  <!--main container -->
  <div class = "marginfix"></div>
<section id = "container">
  <div class = "loader"><p class = "status">Loading..</p></div>
  <article class = "event" id ="dummy">
    <figure class = "yellow">
      <span class = "etitle"><p></p></span>
      <img src=""></figure>
    <section class = "summary">
      <p></p>
      <input type = "button" name = "know" value = "know more.." class = 'know'>
    </section>
  </article>
<div id = "details">
  <div class ="evname">
   <h1>Acumen</h1>
   <div class = "eclose"></div>
  </div>
  <div class = "edetails scrollbar">
  </div>
</div>
</section>
  <script src = "src/notify.js"></script>
</body>

</html>