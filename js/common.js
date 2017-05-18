$(function(){
    // header-nav
        // header-nav all-lei
        $('#header-nav .all-lei').parent().hover(
            function(){
                $('#header-nav #menubox').stop().slideDown(400);
            },
            function(){
                $('#header-nav #menubox').stop().slideUp(200);
            }
        );


        //header-nav  a  hover
        $('#header-nav .common-inner > div > a').hover(
            function(){
                $(this).addClass('hoverA')
            },
            function(){
                $(this).removeClass('hoverA')
            }
        );


        // header-login icon change
        $('#header-login a').hover(
            function(){
                $(this).css({"background-size":"25px"})
            },
            function(){
                $(this).css({"background-size":"20px"})
            }
        );
        // weibo Er
    $('.guanzhu').on('mouseover',function(){
        $('.weibo').slideDown('fast');
        setTimeout(function(){
            $('.weibo').slideUp('fast');
        },60000)
    });

    $('.weibo span').on('click',function(){
        $('.weibo').slideUp('fast');
    });


    // 收藏本站
    function AddFavorite(sURL, sTitle)
    {
        try
        {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e)
        {
            try
            {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e)
            {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }
    $('.shoucang').on('click',function(){
        AddFavorite(window.location,document.title)
    });

    //scroll listener
        window.onscroll = function(){
            var scrollT = document.documentElement.scrollTop || document.body.scrollTop;
            if(scrollT>550){
                $('#bottom .daiyan img').css({height:'230px'});
                $('#bottom').css({height:'100px', overflow:"visible"})
            }else{
                $('#bottom .daiyan img').css({height:0});
                $('#bottom').css({height:'0px'})
            }
        };
        // zhiding 报名  膜肽层
        $('#dingzhi').css({
            width:$(window).width()+'px',
            height:$(window).height()+'px'
        });
        function dingzhiIng(elm){
           elm.on('click',function(ev){
                ev.preventDefault();
                $('#bgima').css({display:'block'});
                $('#dingzhi').css({display:'block'})
            });
        }

        dingzhiIng($('.order'));
        dingzhiIng($('.dingzhiTo'));
        dingzhiIng($('.top2'));

        $('#dingzhi .offOn').on('click',function(){
            $('#bgima').css({display:'none'});
            $('#dingzhi').css({display:'none'})
        });



        //submit info
        function submitInfo(name, tel, loupan, mianji ){
            window.open("http://jiabao.dasn.com.cn/index.php/calltel/dooperate?name=" + name + "&tel=" + tel + "&loupan=" + loupan + "&mianji=" + mianji + "&content=" + document.title + "&url=" + location.href + "&sourceid=" + 1);
        }

        BtnClick($('#confirm'));
        BtnClick($('.DZBtn'));
        BtnClick($('.shenqin'));
        BtnClick($('.buttonIN'));
        BtnClick($('.baomingBTN'));
        BtnClick($('.ZT3yuyue'));


        function BtnClick(btn){
            btn.on('click',function(){
                var elm = $(this).parent().find('.elm').val();
                var phNub = $(this).parent().find('.phNub').val();
                var location = $(this).parent().find('.location').val();
                var xiaoqu = $(this).parent().find('.xiaoqu').val();

                IsChinese(elm,phNub,location,xiaoqu)
            })
        }


    // 定制输入验证

        function IsChinese(elm,phNub,location,xiaoqu) {
            if(elm.length!=0){
                reg=/^[\u0391-\uFFE5]+$/;
                if(!reg.test(elm)){
                    alert("对不起，请正确输入您的称呼!");//请将“字符串类型”要换成你要验证的那个属性名称！
                    return;
                }
            }
            if(elm.length == 0){
                alert("请输入您的称呼");
                return;
            }
            if(phNub.length == 0){
                alert("请输入您的手机号码..");
                return;
            }
            if(phNub.length!=0){
                reg=/^\d{11}$/;
                if(!reg.test(phNub)){
                    alert("对不起，请输入正确的手机号码!");//请将“字符串类型”要换成你要验证的那个属性名称！
                    return;
                }else{
                    //  若验证通过 则提交客户信息
                    submitInfo(elm,phNub,location,xiaoqu);
                }
            }
        }


        $('.shenqin').hover(
            function(){
                $(this).css({left:'10px'})
            },
            function(){
                $(this).css({left:'0px'})
            }
        );

        // bottom close
        $('#bottom .offOn').on('click',function(){
            $('#bottom').css({height:'0px'})
        });


    //   bottom 报名 点击收起
    $(function(){
        $('#bottomHide').on('click',function(){
            $('#bottom').animate({
                left:'-88%'
            },function(){
                $('.bottomOp').fadeIn();
            })
        });
        $('.bottomOp').on('click',function(){
            $('#bottom').animate({
                left:'0'
            },function(){
                $('.bottomOp').fadeOut();
            })
        })
    });

    // to Top
    $('.top3').on('click',function(){
        $(this).fadeOut('fast');
        $('html,body').animate({scrollTop:0},500,function(){
            $($('.top3')).css({display:'block'})
        })
    });


    //  微信二维码
    $('.weixinEr').on('click',function(){
        $(this).find('i').css({
            display:'block'
        })
    });
    $('.weixinEr i span').on('click',function(){
        // 阻止事件冒泡
        event.stopPropagation();
        $(this).parent('i').css({
            display:'none'
        })
    })
});