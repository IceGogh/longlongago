$(function(){
    // main hover change icon(bg)
    $('.main1Inner ul a').hover(
        function(){
            var img = $(this).css("background-Image");
            var index = img.indexOf('.png');
            var imgNew = img.slice(0,index);
            $(this).css("background-Image",imgNew+"1.png")
        },
        function(){
            var img = $(this).css("background-Image");
            var index = img.indexOf('.png');
            var imgNew = img.slice(0,index-1);
            $(this).css("background-Image",imgNew+".png")

        }
    );

    // main hover box-shadow
    function flShadow(elm){
        elm.hover(
            function(){
                $(this).css({transform:'translate(-5px,-5px)',boxShadow:'5px 5px 8px 0px  #656565'})
            },
            function(){
                $(this).css({transform:'translate(0px,0px)',boxShadow:'0px 0px 0px 0px transparent'})
            }
        )
    }
    flShadow($('.flimages li'));
    flShadow($('.flmain'));
    moveTo($('.flmain'));
    // main hover noteMoveto
    function moveTo(elm){
        elm.hover(
            function(){
                $(this).find('.noteName').css({
                    bottom:0
                })
            },
            function(){
                $(this).find('.noteName').css({
                    bottom:'-90px'
                })
            }
        )
    }
    //bannner
    //banAuto();
    function banAuto() {
        var selLi = $('#banner ul li');
        $('#banner')
            .mouseenter(function () {
                selLi.css({
                    "opacity": ".7",
                    "transform": "scale(1,1)"
                })
            })
            .mouseleave(function () {
                selLi.css({
                    "opacity": 0,
                    "transform": "scale(0,0)"
                })

            });

        var k = 0;
        var banTimer;

        function bannerT() {
            banTimer = setInterval(function () {
                k++;
                if (k === 4) {
                    k = 0;
                }
                for (var i = 0; i < $('#banner .bannerBox').length; i++) {
                    $('#banner .bannerBox').eq(i).css({
                        transform: "rotateY(" + k * 90 + "deg)", transitionDelay: 0.05 * i + "s"
                    })
                }
                $('#banner ul li').removeClass('colorLi');
                $('#banner ul li').eq(k).addClass('colorLi');
            }, 300000);
        }
        bannerT();
        selLi.hover(
            function () {
                clearInterval(banTimer);
                k = $(this).get(0).innerHTML - 1;
                selLi.removeClass('colorLi');
                selLi.eq(k).addClass('colorLi');
                for (var i = 0; i < $('#banner .bannerBox').length; i++) {
                    $('#banner .bannerBox').index = i;
                    $('#banner .bannerBox').eq(i).css({
                        transform: "rotateY(" + $(this).index() * 90 + "deg)", transitionDelay: 0.04 * i + "s"
                    })
                }
            },
            function () {
                bannerT();
            }
        )
    }

    // main �ֲ�

    (function(){
        var Timer ;
        var ImgSrc = [
            '<img src="images/exple%20(1).jpg"/>',
            '<img src="images/exple%20(2).jpg"/>',
            '<img src="images/exple%20(3).jpg"/>',
            '<img src="images/exple%20(4).jpg"/>',
            '<img src="images/exple%20(5).jpg"/>',
            '<img src="images/exple%20(6).jpg"/>',
            '<img src="images/exple%20(7).jpg"/>',
        ];

        //  �ڶ��� li
        $('.wrap ul').on('mouseover' , 'li.p2' , function(){
            clearTimeout(Timer);
            var $this = $(this);
            Timer = setTimeout(function(){

                //  ��¼��ǰѡ�� li ��ͼƬ���
                var Nub = $this.html().slice(26,27);

                //  ��� ��С����
                if(Nub>=4){
                    Nub-=7;
                }
                // ��Ŷ�Ӧ img ��Դ·����
                var p1Img = ImgSrc[Nub-0+3];
                $('li.p7').remove();
                $('li.p6').remove();
                $('li.p5').removeClass().addClass('p7');
                $('li.p4').removeClass().addClass('p6');
                $this.removeClass().addClass('p4');
                $('li.p3').removeClass().addClass('p5');
                $('li.p1').removeClass().addClass('p3');
                $('<li>').html(p1Img).addClass('p1').insertBefore($this.prev());
                if(Nub == 3){
                    Nub =-4;
                }
                var p2Img = ImgSrc[Nub-0+4];
                $('<li>').html(p2Img).addClass('p2').insertBefore($this.prev());
            },200);
        });

        // ������ li
        $('.wrap ul').on('mouseover', 'li.p3' , function(){
            clearTimeout(Timer);
            var $this = $(this);
            Timer = setTimeout(function(){
                var Nub = $('li.p7').html().slice(26,27);
                $('li.p7').remove();
                $('li.p6').removeClass().addClass('p7');
                $('li.p5').removeClass().addClass('p6');
                $('li.p4').removeClass().addClass('p5');
                $this.removeClass().addClass('p4');
                $('li.p2').removeClass().addClass('p3');
                $('li.p1').removeClass().addClass('p2');
                $('<li>').html(ImgSrc[Nub-1]).addClass('p1').insertBefore($('.p2'));
            },200);
        });

        // ����� li
        $('.wrap ul').on('mouseover' , 'li.p5' , function(){
            clearTimeout(Timer);
            var $this = $(this);
            Timer = setTimeout(function(){
                $('.p6').removeClass().addClass('p5');
                $('.p7').removeClass().addClass('p6');
                $('<li>').html(ImgSrc[$('.p1').html().slice(26,27)-1]).addClass('p7').appendTo($('.wrap ul'));
                $('.p1').remove();
                $('.p2').removeClass().addClass('p1');
                $('.p3').removeClass().addClass('p2');
                $('.p4').removeClass().addClass('p3');
                $this.removeClass().addClass('p4');
            },200);
        });

        // ������ li
        $('.wrap ul').on('mouseover', 'li.p6' , function(){
            clearTimeout(Timer);
            var $this = $(this);
            Timer = setTimeout(function(){
                var Nub = $('.p1').html().slice(26,27);
                var Nub2 = $('.p2').html().slice(26,27);
                $('.p1').remove();
                $('.p2').remove();
                $('.p3').removeClass().addClass('p1');
                $('.p4').removeClass().addClass('p2');
                $('.p5').removeClass().addClass('p3');
                $this.removeClass().addClass('p4');
                $('.p7').removeClass().addClass('p5');
                $('<li>').html(ImgSrc[Nub-1]).addClass('p6').appendTo($('.wrap ul'));
                $('<li>').html(ImgSrc[Nub2-1]).addClass('p7').appendTo($('.wrap ul'));
            },200);
        })
    })();

    //  退出会员登录状态
    $(function(){
        $('.closelog').on('click', function(){

            $.ajax({
                url: 'htmls/php/closelog.php',
                type: 'post',
                success: function(data){
                    window.location.href ="http://localhost/Jiabao0519/index.html";
                }
            })
        })
    })

});