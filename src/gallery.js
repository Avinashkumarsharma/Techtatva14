(function(){
	Gallery = {
		albums 	:["714439935303016","707903499289993","539408142806197"],
		count 	: 0,
		data    : null,
		offset 	: 0,
		limit   : 12,
		url		: "http://graph.facebook.com/",
		loading : false,
		init: function(){
			//console.log(this.albums[this.count]);
			var url = this.url + this.albums[this.count]+"/photos?limit=";
			url += this.limit+"&offset="+this.offset;
			this.loading = true;
			$.getJSON(url, function(data){
				Gallery.data = new Array();
				Gallery.data.push(data);
				Gallery.bindlistener();
				Gallery.prepare();

			});
			

		},
		prepare:function() {
			var image, likes, title, desc;
			data = this.data[this.offset]['data'];
			$.each(data, function(key, val) {
				//console.log(val);
				if(val.likes && val.likes.paging.next) {
				var likeurl = val.likes.paging.next;
				likeurl = likeurl.substr(0, likeurl.indexOf("?"))+"?summary=1";
				$.getJSON(likeurl, function(data) {
					var index = Math.floor(val['images'].length/2);
					image = val['images'][index];
					title = new Date(val["created_time"]).toLocaleDateString();
					desc = val['name'];
					likes = data.summary.total_count;
					Gallery.update(image, title, likes, desc);
				});
			}
			else {
					var index = Math.floor(val['images'].length/2);
					image = val['images'][index];
					title = new Date(val["created_time"]).toLocaleDateString();
					desc = val['name'];
					if(val.likes)
					likes = val.likes.data.length;
					else
					likes = 0;
					Gallery.update(image, title, likes, desc);
			}

			});
		},
		update:function(image, title, likes, desc) {
			fig = $("#dummy").clone(true);
			fig.removeAttr("id");
			fig.find(">img").attr("src", image.source).load(function(){
				var h = $(this).height();
				$(this).parent().css("max-height", 260);
				$(this).parent().find('.loader').hide();
			});
			fig.find('.imgoverlay .likes').text(likes);
			fig.find('.imgoverlay .title').text(title);
			fig.find('.imgoverlay .desc').text(desc);
			$("#canvas").append(fig);
			this.loading = true;
		},
		bindlistener:function() {
			$('body').on('keydown mousewheel', function(event){
				$('body, html').stop();
				if($(window).scrollLeft() + $(window).width() > ($(document).width() - 100) 
					&& Gallery.loading) {
       				Gallery.loading = false;
       				//console.log("Loading next..");
       				Gallery.loadnext(); 
       			}
       			else{
       				if(event.deltaY < 0 || event.keyCode == 39) {
						$('body, html').animate({scrollLeft:'+=500'}, 2000, 'easeOutQuart',
						 function(){ });
					}
					else if(event.deltaY > 0 || event.keyCode == 37) {
						$('body, html').animate({scrollLeft:'-=500'}, 2000, 'easeOutQuart',
						 function(){ });
					}
       			}
			});
		},
		loadnext:function() {
			if(this.data[this.offset]['paging']['next']) {
				var next = this.data[this.offset]['paging']['next'];
				$.getJSON(next, function(data) {
					if(!data.data.length) {
						//console.log(data);
						Gallery.changealbum();
					}
					else{
					Gallery.data.push(data);
					Gallery.offset++;
					Gallery.prepare();
					}
				});
			}
		},
		changealbum:function() {
			this.count++;
			var url = this.url + this.albums[this.count]+"/photos?limit=";
			url += this.limit + "&offset=" + this.offset;
			//console.log(url);
			$.getJSON(url, function(data){
				Gallery.data.push(data);
				Gallery.offset++;
				Gallery.prepare();
			});

		}
	};
	$(document).ready(function(){
		Gallery.init();
	});
})();