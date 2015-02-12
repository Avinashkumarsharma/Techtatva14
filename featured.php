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
  	<a href="#">Featured Events</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
    </ul>
  </section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  <section id = "container">
    <nav id = "evname">
      <ul>
        <li><a href="#container">Robowars</a></li>
        <li><a href="#src">Fuel RC3</a></li>
        <li><a href="#sved">Vedanth</a></li>
        <li><a href="#spp">
         Presentation</a></li>
        <li><a href="#qi">Questionable Intelligence</a></li>
      </ul>
    </nav>
    <div id = "slider">
      <ul id="slippery">
        <li><a href="#robo"><img src="assets/sliders/robowars.jpg"  alt="Robowars"></a></li>                
        <li><a href="#rc"><img src="assets/sliders/fuel.jpg"  alt="Fuel Rc3"></a></li>
        <li><a href="#veda"><img src="assets/sliders/vedanth.jpg"  alt="Vedanth 4.0 | The Exhibition"></a></li>
        <li><a href="#paper"><img src="assets/sliders/paper.jpg"  alt="Paper Presentation| Let the ideas Flow"></a></li>
        <li><a href="#paper"><img src="assets/sliders/qi.jpg"  alt="Questionable Intelligence| Quiz"></a></li>
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
          <h1 id = "robo">Robo Wars</h1>
          <p>It began with the strike of a hammer. 
            The opponent tried to block it but failed. 
            Outside the ring his controlled grappled with the joystick. 
            Trying to bring it back into control. Yet Thor went on, smashing 
            away with the force of a Viking God, blow after blow, bending steel 
            and crushing metal. Thor’s controller gunned away with fury, this was
             what it had all been about. Unquestioned victory. But it wasn't going
              to end now, and in a final try for victory the man outside the ring pressed 
              a button, as the air filled with the sounds of whirring blades...
            <br>This was War. And only the best Robot would emerge in glory.</p>
            <h2>Rendered Cad Model of Arena</h2><br>
            <img src="uploads/cad.jpg" alt = "Rendered Cad Model" width = "500"><br>
            <h2>Problem Statement</h2><br>
            <a href="uploads/Robowars_problemstatement.pdf" target= "_blank">Download ProblemStatement</a>

           <br> <h2>Reference Material</h2><br>
            <a href="uploads/robowarsGuide.pdf" target= "_blank">Download Robowars Guide</a>
          <br><h3>
          <a href="https://docs.google.com/forms/d/1kAErRpjIlJfPcEryI-S1o24X_dTwqRmWwQi-jLTtmA4/viewform?usp=send_form" target = "_blank"> Click here to Register</a></h3>
          <br> <h2>Contact Details</h2>
	<p>Name : Disha<br> Phone: +919663562870<br>
  	    Name: Karl <br> Phone : +919916871049<br></p>
<div class = "breaker" id ="src"></div>
            <h1 id = "rc">Fuel RC3 </h1>
              <blockquote>‘Racing is an art. Racing with passion, that’s high art!’</blockquote>
              <p>A sound only comparable to a Monster Truck Rally that would make Mozart wish 
he could hear again! Here’s presenting the third edition of the national level Nitro 
RC Car championship, Fuel RC3.</p>
<p>The smell of burning rubber and Nitro ethanol, all swirling out together on race 
tracks with twisted turns, ramps and obstacles; it’s an opportunity for all racing 
enthusiasts to participate and witness exhilarating speeds, stunts and guaranteed 
high adrenaline action! </p>
<h2>EVENT STAGES</h2><br>
<ul>
  <li><b>TIME ATTACK: </b>Speed and Handling Test. A race against the clock, with cars battling 
  it out to finish with the best timings!</li>
  <li><b>BURNOUT:</b> Acceleration Test. With the sound of roaring engines, racers push 
  pedal to the metal as cars duke it out with raw speed!</li>
  <li><b>STUNT MANIA:</b> Skill Set Challenge. An obstacle course that will push the limits of 
  both cars and drivers to the breaking point!</li>
  <li><b>GRAN PREMIO DE MANIPAL:</b> The finale. The race for glory, the best that Fuel RC3 
  has to offer will descend onto the most exciting circuit!</li>
</ul>
<h2>Guidelines</h2><br>
 <a href="uploads/fuelrc3_general_guidelines.pdf" target= "_blank">Download General Guidelines</a>
<br><h2>Contact Details</h2>
<p>Name : RANBIR GREWAL<br> Phone: +919008772528<br>
  Name: ROHAN MAITY <br> Phone : +919008756610<br>
</p>
<div class = "breaker" id ="sved"></div>
<h1 id = "veda">Vedanth <span>4.0</span></h1>
<p>Yet again, continuing with our efforts we present to you VEDANTH 4.0 - 
  an even bigger endeavour, with more challenging projects and a larger portfolio of events.
   With a host of other extravaganzas, VEDANTH 4.0 will show you what the next-level of Robotics is! This time, 
  we thrive to present to you the most cutting-edge projects. Come, get enthralled!</p>
  <h2>Tentative Projects</h2>

  <h3>Swarm Robotics - Smart Traffic Demonstration</h3><br>
  <p>This project aims at reducing the traffic, rather smartly. In a daily situation of a traffic jam, we can reduce the traffic by intimidating the other vehicles about the
   traffic ahead of them & provide them with an alternate route to their destination.</p>
  
  <h3>Rubik's Cube Solver</h3><br>
  <p>The project aims at building a robot that automatically solves the cube using 
    algorithms designed entirely by the team, using Image Processing.</p>
  
  <h3>Lift Automation:</h3><br>
  <p>This proposed idea is to make an 
    eco-friendly lift which would be operated only in the 
    presence of a user. The presence of a passenger would trigger a 
    sensor which in turn will activate the fans, lights and floor buttons. 
    Hence, the power consumed when nobody is using the lift is reduced to a great extent.
</p>
  
  <h3>Prepaid Energy Meter using AVR</h3><br>
  <p>Everyone wishes to save energy and money.  
    Minimizing your monthly electricity bill is a good place to start.
     What makes it difficult is that your bill only tells the total amount of electric energy
      that was consumed during a long time window, typically one month.  
      A working solution would be to frequently log the values from your energy meter to a notebook, 
      and then draw a graph to reveal the before-after effect. But things like this
       need to be automated to become practical. So we will use a home PC, and build 
       a measurement device that can be simply attached on top of the electricity meter.
        To keep it completely harmless and safe, we will use an optical sensor. 
        The measurement device continuously observes energy consumption and logs it into a 
        file on your PC's hard drive. 
    Then, you can easily draw graphs with a spreadsheet app.</p>
  
  <h3>Mobile Controlled Home Appliances and Home Security and Automation System</h3><br>
  <p>This prototype of home automation has centralized control of lighting, appliances,
   security locks of gates and other systems, to provide improved convenience, comfort,
    energy efficiency and security.</p>
  
  <h3>Route Relay Interlocking System</h3><br>
  <p>The project is about the RRI system being implemented into the indian railways in
   which the signalling and route setting of the train is interlinked using relays.
    We have used a line follower as a train & line as the track, necessitating a 
    6-sensor array. Also the train is equipped with a Rx Rf module for communication purposes. 
    Depending on track status, signals will be changed and appropriate message sent to 
    Rx module which decides the course of action via an on-board microcontroller.</p>
  
  <h3>Speech RecognitionRoute Relay Interlocking System</h3><br>
  <p>A program used to test and recognize voices among a given pool of voices. 
    The correct voice can be identified and used for home security purposes.</p>
  
  <h3>Image Processing to adjust Color on Display Screens</h3><br>
  <p>The project involves manipulation of the display text color based on the projector 
    screen/walls background. So as to display the most contrasting color, in realtime. 
    This can be well implemented in smart advertisements or slogan boards.
     It involves extraction of the red green and blue planes to select the value of the
      contrasting color and then displaying it as the text color.</p>
  
  <h3>3d Image Convertorirtual Mouse</h3><br>
  <p>Have you heard about Image Processing? Sounds scary, doesn’t it? 
Do you know what what we can do with it? No? We certainly do and through this project we will be able convert any 2D image into an awesome 3D image.
</p>
  
  <h3>Electronic Drums</h3><br>
  <p>As the name goes, this project is about Drums, but with an electronic twist. 
    In general the drums are very costly, not portable. 
    These electronic drums are very cost effective, and are very portable and easy to handle.</p>
<h2>Contact Details</h2>
<p>Name :Kishore Khed<br> Phone: +919740573056<br>
</p>
<div class = "breaker" id ="spp"></div>
<h1 id = "paper">Paper Presentation</h1>
<p>TechTatva '14 invites the bright minds across this nation to
 present their ground breaking ideas and take part in the Technical 
 Paper Presentation Competition hosted by MIT, Manipal. Every year around 400 talented 
 individuals from various engineering streams participate and exhibit their ideas in front 
 of our esteemed panel of judges.
</p>
<h2>Details Of the Competition</h2>
<ul>
<li>The  abstract must be original and should not break any copyright laws. 
  Also, it must  follow the <a href="uploads/IEEE_abstract _template.doc">IEEE format.</a></li>
  <li>There is no restriction on the subject.</li>
<li>Deadline for the submission of abstracts is 23 Sept, 2014.</li>
<li>There can be a team of maximum 4 participants.</li>
<li>Time limit for presentation is 10 minutes.</li>
<li>Send in your abstracts to <a href="mailto:paperpresentation@techtatva.in">paperpresentation@techtatva.in</a></li>
</ul>
<h3>All short listed candidates shall present their papers during TechTatva i.e within 8-11 Oct, 2014.</h3>

<h2>Short-listed Candidated</h2>
<p>We are pleased to announce the results for the Paper Presentation TT'14 (first round), the following link contains the list of selected abstracts. We expect all the selected participants to send in their details to paper.presentation.tt14@gmail.com(do not sent to alternate email ID) and a confirmation on whether they will be attending the event. </p>
<p><a href = "https://docs.google.com/spreadsheets/d/1DrscnzCJVyiRIJp4-f54jUd5J5QJM-JyHKHpfOnBdOE/edit?usp=sharing">Click here for results</a></p>
<p><a href = "https://www.facebook.com/MITtechtatva/photos/a.132413296839019.36802.120623421351340/713295792084097/?type=1&theater">Click here for schedule</a></p>
<p>Details must contain :</p>
<ol>
<li>Name of team mates . 
<li>College Name 
<li>Title of Paper 
<li>Branch of all participants. 
</ol>
<p>We will be sending a confirmation email with the rest of the details by 4th October to the selected participants. </p>

<h2>Contact Details</h2>
<p>Name :Srishti <br> Phone: +919740588560<br>
  Name :Mukul <br> Phone: +919481028183<br>
</p>
<h1 id = "qi">Questionable Intelligence</h1>
<p>A science and technology Quiz designed to test participants’ knowledge relating to 
  the latest developments in Technology along with all things Science. 
  Teams answer a series of questions spread over 2 rounds to be crowned winners.</p>
  <h2>Round 1</h2>
  <p>This is a written preliminary round, where all teams get a crack at the same set of questions. 
    Teams will be eliminated based on their performance.</p>
   <h2>Round 2</h2>
   <p>The top 6 teams from Round 1 battle it out in the stage round to be crowned winners.</p>
    <h2>Rules</h2>
    <ol>
      <li>A team can have a maximum of 3 members.</li>
      <li>The Quizmaster’s decision is final and binding.</li>
    </ol>
    <h2>Contact Details</h2>
<p>Name :Akhilesh Oberoi <br> Phone: +919740446188<br>
  Name :Kunal Aggarwal <br> Phone: +919740442573<br>
</p>
  </section>
  <footer>
  </footer>
  </body>
  </html>