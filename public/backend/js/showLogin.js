$('.show-login').click(function(){
    $('.show').toggle(500);
})
$('.edit-input').click(function(){
    $(this).parent().parent().find('td.fix').add('p').css('color','red');
    // console.log(name);
});