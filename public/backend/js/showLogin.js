
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
function changeImg(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#avatar').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function changeImg1(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#avatar1').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function changeImg2(input){
    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
    if(input.files && input.files[0]){
        var reader = new FileReader();
        //Sự kiện file đã được load vào website
        reader.onload = function(e){
            //Thay đổi đường dẫn ảnh
            $('#avatar2').attr('src',e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function() {
    $('#avatar').click(function(){
        $('#img').click();
    });
});
$(document).ready(function() {
    $('#avatar1').click(function(){
        $('#img1').click();
    });
});
$(document).ready(function() {
    $('#avatar2').click(function(){
        $('#img2').click();
    });
});