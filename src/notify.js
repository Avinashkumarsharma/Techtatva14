function init() {
	if(localStorage && !localStorage['count']) {
		localStorage['count'] = 0;
	}
}
function getcount() {
	var count = 0;
	var ret;
	if(localStorage && localStorage['count'])
		count = localStorage['count'];
	$.ajax({
            type: 'POST',
            url:'notify.php',
            data:{count:'3'},
            success:function(data) {
            	var newcount = data - count;
            	ret = data;
            	if(parseInt(localStorage['count']) < data){
            		$("#count>p").text(newcount).fadeIn();

            	}
            }
        });
	return ret;

}
function getlist() {
	$.ajax({
            type: 'POST',
            url:'notify.php',
            data:{info:'1'},
            success:function(data) {
                $("#notice").html(data);
               
            }
        });
}
init();
getcount();
getlist();

setInterval(function(){
		getcount();
        getlist();
    }, 1000*60*100);