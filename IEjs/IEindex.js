$(function(){
   // banner ÂÖ²¥
    var BannerTimer;
    var BannerTimer2;
    var i = 0;
    var BanBtn = $('.bannerBtn');
    function autoBanner(){
        clearInterval(BannerTimer);
        BannerTimer = setInterval(function(){
            i++;
            if(i>=$('.banner a').length){
                i = 0;
            }
            $('.banner a').fadeOut('fast');
            $('.banner a').eq(i).fadeIn('fast');
            BanBtn.find('li').removeClass('banSelLi')
                .eq(i).addClass('banSelLi')
        },3000)
    }
    //ÑÓ³Ù 2000 ms Ö´ÐÐ×Ô¶¯ÂÖ²¥
    setTimeout(function(){
        autoBanner();
    },2000);

    // banner Btn hover
/*
    BanBtn.find('li').hover(
        function(){
            clearInterval(BannerTimer);
            i = $(this).index();
            $('.banner a').fadeOut('fast');
            $('.banner a').eq(i).fadeIn('fast');
            $(this).addClass('banSelLi')
                .siblings().removeClass('banSelLi')

        },
        function(){
            $('.banner a').stop();
            autoBanner();
        }
    )
*/
    BanBtn.find('li')
        .on('mouseover',function(){
            var $this = $(this);
            BannerTimer2 = setTimeout(function(){
                clearInterval(BannerTimer);
                i = $this.index();
                console.log(i)
                $('.banner a').fadeOut('fast');
                $('.banner a').eq(i).fadeIn('fast');
                $this.addClass('banSelLi')
                    .siblings().removeClass('banSelLi');
            },100)
        })
        .on('mouseleave',function(){
            clearInterval(BannerTimer2);
            autoBanner();
        })

});