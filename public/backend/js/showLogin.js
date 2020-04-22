
$(document).ready(function(){
    $('.hide-data').hide();
    $('.show-input').click(function(){
        $(this).parent().parent().children('.hide-data').show();
        $(this).parent().parent().hide();
    })
})