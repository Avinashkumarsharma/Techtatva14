<?php
$mail_to="webmaster@techtatva.com";
$subject="Techtatva Contact| HelpLine";
$status="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!isset($_POST['name']) ||
       !isset($_POST['email']) ||
       !isset($_POST['msg'])) {
        $status="All fields Required";
        
    } else {
    $mail=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $name=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $msg=filter_var($_POST['msg'],FILTER_SANITIZE_STRING);
    if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
        //send mail;
        $headers = 'From: '.$mail."\r\n".'Reply-To: '.$mail."\r\n" .'X-Mailer: PHP/'.phpversion();
        $check=mail($mail_to, $subject, $msg, $headers); 
        if($check)
            $status = "Message sent";
        else
            $status = "Error Sending Message ";
        }
        else {
            $status="Invalid Details";
        }
    }
    
}
else{
    $status="";
}
?>

<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/schedule.css">
<link rel="stylesheet" type="text/css" href="src/contact.css">
<style type="text/css">
.subheading:after {
  content: none;
}
#oldschool{

}
#oldschool li {
  display: inline-block;
  list-style: none;
}
#oldschool td img {
  max-width: 200px !important;
  min-width: initial;
  border-radius: 10px;
  border: solid 5px #fff;
  box-shadow: 0 0 1px #aaa;
  margin-right: -0.5em;
}
td span {
  font-size: 1.5em;

}
td {
  padding: 1em;
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
  	<a href="#">Contact Us</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
    </ul>
  </section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  <section id = "container">
    <section id = "oldschool">
      <table>
        <tr>
         <td><img src="assets/convener.jpg" alt = "Jal Panchal, convener"></td>
         <td><p><span></span><b>Convener<b></span><br><span>Jal Panchal</span><br>
              <span>Email:</span> convener@techtatva.in<br>
              <span>Phone:</span> +919740981697
          <p/></td>

          <td><img src="assets/co-convener.jpg" alt = "Jal Panchal, convener"></td>
         <td><p><span></span><b>Convener<b></span><br><span>Aparna Sandhu</span><br>
              <span>Email:</span>convener@techtatva.in<br>
              <span>Phone:</span> +918123677470
          <p/></td>
         
        </tr>
      </table>
    </section>
    <div id = "emailsec">
    <caption class="text"><h1><span>Contact Us</span></h1></caption>
        <div id="wrapper">
            <form method="post" action="contact.php">
            <table>
            <tr>
           <td> <label for="name" >name</label></td>
           <td> <input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
           <td><label for="email">email</label></td>
            <td><input type="email" id="email" name="email" required></td>
            </tr>
             </table>
            <textarea rows="10" cols ="50" placeholder="message here" name="msg" id="msg" required></textarea>
            <span  class="olive"><?php echo $status ?></span><input type="submit" name="submit" id="submit" value="Send"/>
            </form>
        </div>
      </div>
  </section>
  <footer>
    <figure>

      <a href="http://www.facebook.com/avi.loyola" target = "_blank">
        <img src="assets/theNoob.png" alt = "Meet the Developer"><p>theNoob</p></a>
      
    </figure>
  </footer>
  </body>
  </html>