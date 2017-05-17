$(function(){

    title3nd();
    function title3nd(){
        var words = $('.selectLi').html();
        $('.main-r h3').html(words);
        $('.title3nd').html(words);
    }

    $('#main .main-l li').on('click',function(){
        var index = $(this).index();
        $(this).addClass('selectLi')
            .siblings().removeClass('selectLi');

        $('#main .main-r .main-inner').removeClass('aboutshow')
            .eq(index).addClass('aboutshow')

        title3nd();
    })
});