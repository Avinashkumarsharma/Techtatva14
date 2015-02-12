<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/style.css">
	<link href="favicon.png" rel="icon">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta property="og:title" content="TechTatva14| Integrating Ideas" />
        <meta property="og:description" content="Techtatva14|Integrating Ideas, Manipal Institute of Technology's Technical Fest " />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://techtatva.in" />
        <meta property="og:image" content="http://techtatva.in/favicon.png" />
        <style type="text/css">
        footer {
          max-height: 60px;
          position: relative;
          z-index: 1000;
        }
        .footer img {
          height: 50px;
          width: 150px;
 
          cursor: pointer;
        }
        footer li {
          display: inline-block;
          margin-right: 0.5em;
        }
        footer ul {
          margin-top: 2.5em;
          margin-left: 6em;
        }
        </style>
</head>
<body>

  <canvas id = "canvas"></canvas>
	<header>
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
  <section id = "container">
    <figure class = "inline logobig"> 
      <img src="assets/logobig.png" alt = "TechTatva'14 | Integrating Ideas" />
    </figure>
    
    <section id = "content" class = "pull-right">
      <article class "inline"> <p>Manipal Institute of Technology's <br> annual Technical fest is back<br>
        8th - 11th October</p>
        <p><button id = "explore" >Explore</button></p>

      </article>

    </section>
    
  </section>
  <section id = "explore-container">
    <figure id = "close">
   <img src="assets/close.png" alt = "close"  class = "cancle-fit">
    </figure>
    <div class = "video-container">
      <iframe src="https://www.youtube.com/embed/bDN7ml8cadU" 
      frameborder="0" width="560" height="315"></iframe>
    </div>
  </section>
<script src = "src/core.js"></script>
<script src = "src/notify.js"></script>
<script src = "src/tt14_fragments.js"></script>
<script type="text/javascript">
  $('#explore').click(function(){
    $("#explore-container").toggleClass('flip');
  });
  $("#close").click(function(){
    $("#explore-container").removeClass('flip');
  });
  $(document).keyup(function(e){
    if(e.keyCode == 27)
      $("#explore-container").removeClass('flip');
  });
  </script>
  <footer>
    <ul class ="footer">
      <li><a href="https://play.google.com/store/apps/details?id=chipset.techtatva"><img src="assets/android.png"></a></li>
      <li><a href="https://itunes.apple.com/in/app/techtatva14/id922178880?mt=8"><img src="assets/apple.png"></a></li>
      <br>
      <li><a href="https://www.facebook.com/MITTechTatva"><img src="assets/fb.png" style="margin-left:40px; width: 50px"></a></li>
       <li><a href="https://twitter.com/ttmitmanipal"><img src="assets/twitter.png" style="width: 50px"></a></li>
       <li><a href="http://instagram.com/techtatva_mitmanipal"><img src="assets/instagram.png" style="width: 50px"></a></li>
       <li><a href="https://www.youtube.com/TechTatva"><img src="assets/youtube.png" style="width: 50px"> </a></li>
    </ul>
  </footer>
</body>

</html>