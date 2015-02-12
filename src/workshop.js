$(document).ready(function(){
      var strip = [];
      function shuffle(array) {
      var currentIndex = array.length, temporaryValue, randomIndex;
      while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
         temporaryValue = array[currentIndex];
         array[currentIndex] = array[randomIndex];
         array[randomIndex] = temporaryValue;
       }
       return array;
     }
      function updateStrip(id, name, color, logo, summary ) {
            $update = $("#dummy").clone(true);
            $update.removeAttr("id").attr("id", id);
            $update.find("figure").removeAttr("class").addClass(color)
            .find(".etitle p").text(name);
            $update.find("figure > img").attr("src", logo);
            $update.find(".summary p").html(summary);
           strip.push($update);
          // strip = shuffle(strip);

          }
      function filter(ev, el) {
          var _this, cl, h,s;
          _this = $(el);
          cl = _this.attr("class");
          s = $("article figure[class = '"+cl+"']");
          s.parent().show();
          h  = $("article figure").not("."+cl);
          h.parent().hide();
          $('#container').masonry({columnWidth: 240,itemSelector: '.event'});
      }
      $(".eclose").click(function(ev){
        $("#details").fadeOut();
      });
      $(".know").click(function(ev) {
        $("#details").fadeIn();
        var id = $(this).parent().parent().attr("id");
        $.get('data/workshops.xml',{}, function(data) {
          var xml = $(data);
          var details = xml.find("event[id = '"+id+"']");
          var name = details.find("name").text();
          var content = details.find("detail").text();
          $(".edetails").html(content);
          $(".evname>h1").html(name);
        });
      });
      $.get('data/workshops.xml',{}, function(data) {
        $('.loader').hide();
        xml = $(data);
        cat = xml.find('categorylist list');
        cat.each(function(key, val){
          $color = $(val).attr('color');
          $cat = $(val).text();
          $href = $(val).attr('href');
          $list = "<li><a href="+ $href +" class ="+$color+">"+$cat+"</a></li>"
          $('.category').append($list);
        });
        ev = xml.find('category');
        ev.each(function(index){
          var id, color, name, logo, summary;
          color = $(this).attr("color");
          $(this).find('event').each(function(index){
            id = $(this).find("id").text();
            name = $(this).find("name").text();
            logo = $(this).find("logo").text();
            summary = $(this).find("summary").text();
            updateStrip(id, name, color, logo, summary);
          });
        });
        strip = shuffle(strip);
        $("#container").masonry({columnWidth: 240,itemSelector: '.event'});
        $.each(strip, function(index, val) {
          $('#container').append(val).masonry( 'appended', val);
        });
        $("#container").masonry({columnWidth: 240,itemSelector: '.event'});
      $("#category li a").click(function(ev){
        filter(ev, this);
      });
    });
});