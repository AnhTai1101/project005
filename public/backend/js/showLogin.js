
$(document).ready(function(){
    $('.hide-data').hide();
    $('.show-input').click(function(){
        var id = $(this).closest('tr').attr('data-id');
        $(this).closest('tbody').find('.hide-data[data-id='+id+']').show();
        $(this).closest('tbody').find('.show-data[data-id='+id+']').hide();
    })
    $('.hide-input').click(function(){
        var id = $(this).closest('tr').attr('data-id');
        $(this).closest('tbody').find('.hide-data[data-id='+id+']').hide();
        $(this).closest('tbody').find('.show-data[data-id='+id+']').show();
    })

})