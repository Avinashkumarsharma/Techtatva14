<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techtatva'14|Integrating Ideas</title>
<script src = "src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="src/reset.css">
<link rel="stylesheet" type="text/css" href="src/core.css">
<link rel="stylesheet" type="text/css" href="src/schedule.css">
</head>
<style type="text/css">
.clash {
  display: none;
}
</style>
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
  	<a href="#">Schedule</a>
  </section> 
  <section class = "dropdown hide">
    <ul class = "category">
      <li><a href="uploads/schedule.xlsx">Download Schedule</a></li>
    </ul>
  </section>
  
  <section id = "container">
    <div id = "days">
      
    </div>
    <div id = "inner-wrapper">
    <aside id = "elist">
      <ul class = "list">
        <li>GOTO</li>
      </ul>
    </aside>
    <aside id ="dummy"></aside>
    <section id = "schedule">
      <div id = "sch-wrapper">
        <div class = "line"></div>

        <div class = 'time' id = "clone">
          <div class = "left">
            <table >
            <tr>
            <td></td>
            <td></td>
            </tr> 
            </table>
            <p></p>
          </div>
          <div class = 'right'>
            <div class = "name"><span class = "circle circle-yellow"></span></div>
            <div class = "clash">
              <ul>
                <li>Clashes</li>
              </ul> 
            </div>
          </div>
        </div>

      </div>
    </section>
    </div>
  </section>
  <script src = "src/core.js"></script>
  <script src = "src/notify.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      var flag = false;
      function getxml() {
        $.get('data/schedule.xml',{}, function(data) {
        var xml = $(data);
        var days = $(xml).find('day');
        days.each(function(index) {
          var d = $(this).attr("id");
          flag = true;
          updateday($(this));
          var e = $(this).find("event");
          e.each(function(index){
            var name, from, to, dd, mm, place, clash, id;
             id = $(this).attr("id");
             name = $(this).find('name');
             from = $(this).find('time>from').text();
             to = $(this).find('time>to').text();
             dd = $(this).find('time>dd').text();
             mm = $(this).find('time>mm').text();
             place = $(this).find('place').text();
             clash = $(this).find('clash');
             updategoto(name, id);
             updateschedule(name, from, to, dd, mm, place, clash, id, d);
          });
        });
        $("#days>a").eq(0).addClass("active");
        $("#days").find("a").click(function(e){
          $("#days a").each(function(i) {
            $(this).removeAttr("class");
          });
          $(this).addClass("active");
      });
        });
      }
      getxml();
      function updateday(day) {
        var id = day.attr("id");
       var link = $("<a></a>").attr("href", '#'+id).text(id);
       $('#days').append(link);
      }
      function updategoto(name, id){
        var a = $('<a><span class = "circle"></span>'+ name.text() +'</a>').attr("href",'#'+id);
        a.find("span").addClass(name.attr("class"));
        var li = $("<li></li>").append(a);
        $('.list').append(li);
      }
      function updateschedule(name, from, to, dd, mm, place, clash, id, d){
        var left, right, clone;
        clone = $("#clone").clone(true).attr("id", id);
        left = clone.find(".left");
        right = clone.find(".right");
        if(flag) {
         left.attr("id", d);
          flag = false;
        }
        left.find("td").eq(0).html(from +'<br>'+ to);
        left.find("td").eq(1).html(dd+'<br>'+mm);
        left.find("p").text(place);
        right.find('.name').html('<span class = "circle"></span>'+name.text())
        .find('span').addClass(name.attr("class"));
        clone.append(left).append(right);
        $("#sch-wrapper").append(clone);
        clash.find("e").each(function(i){
          var id = $(this).attr("id");

          var a = $('<a><span class = "circle"></span>'+ $(this).text() +'</a>')
          .attr("href",'#'+id);
          a.find('span').addClass($(this).attr("class"));
          var li = $('<li></li>').append(a);
          clone.find('.clash > ul').append(li);
        });
      }
    });
  
  </script>
  </body>
  </html>
