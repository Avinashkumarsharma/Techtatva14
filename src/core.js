$(document).ready(function(){
        console.log("Greetings, theNoob");
	$('.overlay').hide();
	$("#stack").click(function(){
		$('.overlay').show();
		$('#sidebar').show().animate({right: 0}, 500);
	});
	$('.overlay').click(function(){
		$('.overlay').hide();
		$('#sidebar').animate({right: -220, 
							  duration:500, 
							complete:function(){
			$("#sidebar").hide();
		}});
	});
	if($("#count>p").text()=="")
		$("#count>p").hide();
	$("#bell").click(function(e){
		$('#notification').toggleClass("show hide");
		var x = parseInt($('#count>p').text());
		var y = parseInt(localStorage['count']);
		var n = x + y;
		if($('#count>p').css('display') == 'block')
			localStorage['count'] = n;
		$('#count>p').fadeOut();
	});
	$('.subheading').click(function() {
		$('.dropdown').fadeIn().toggleClass("show hide");
	});
	$.get('data/menu.xml',{},function(data){
		var menu = $(data).find("menu").text();
		$(".menu").html(menu);
	});
	$("#container, .marginfix").click(function(ev) {
		var  d = $(".dropdown").hasClass("show");
		var n = $("#notification").hasClass("show");
		if(d) {
			$(".subheading").click();
		}
		if(n) {
			$("#bell").click();
		}
		if(n && d) {
			$("#bell").click();
			$(".subheading").click();
		}
	});
});