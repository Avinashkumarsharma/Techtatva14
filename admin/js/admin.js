$(document).ready(function() {
    $('.delete').click(function(){
        var elem = $(this).parent();
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url : 'work.php',
            data: {'id':id, 'delete': 1},
            success:function(data){
                console.log(elem);
                elem.fadeOut();
            }
        });
    });
    $('.update').click(function(){
            var id = $(this).attr('id');
            var link = $(this).parent().find('td').eq(2).text();
            var info = $(this).parent().find('td').eq(1).text();
            $('#update').val(id);
            $('#info').val(info);
            $('#url').val(link);
        });
});