$(function(){

    // 页面滑动
    var $detail = $('.detailbox .title');
    var titleTop = offtop($detail.get(0));
    (function(){
        window.onscroll = function(){
            var scrollT = document.documentElement.scrollTop || document.body.scrollTop;

            if(scrollT>100){
                $('#bottom .daiyan img').css({height:'230px'});
                $('#bottom').css({height:'100px', overflow:"visible"})
            }else{
                $('#bottom .daiyan img').css({height:0});
                $('#bottom').css({height:'0px'})
            }

        };
    })();
    //  放大镜


        var topY, leftX, changeX, changeY;

        // 获取左边距离屏幕边框距离
        function offLeft(elm){
            var leftData = elm.offsetLeft;
            var parentElm = elm.offsetParent;
            while(parentElm!=null){
                leftData += parentElm.offsetLeft;
                parentElm = parentElm.offsetParent;
            }
            return leftData;
        }
        // 获取顶部...........距离
        function offtop(elm){
            var topData = elm.offsetTop;
            var parentElm = elm.offsetParent;
            while(parentElm!=null){
                topData += parentElm.offsetTop;
                parentElm = parentElm.offsetParent;
            }
            return topData;
        }

        var findpicTo = document.getElementsByClassName('mainpic')[0];
        var findTool = document.getElementsByClassName('findMo')[0];

        leftX = offLeft(findpicTo);
        topY = offtop(findpicTo);

        var FindTool = $('#main .findMo');
        var bigPic = $('.bigpic');

        // 滑动
        findpicTo.onmousemove = function(ev){
            FindTool.css({display:'block'});
            bigPic.css({display:'block'});
            var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            ev = ev || window.event;
            changeX = ev.clientX - leftX - 100;
            changeY = ev.clientY - topY + scrollTop - 120;
            if(changeX < 0){
                changeX = 0
            }
            if( changeY < 0 ){
                changeY = 0
            }
            if(changeX > 300){
                changeX = 300
            }
            if(changeY > 300){
                changeY = 300
            }
            findTool.style.left = changeX +'px';
            findTool.style.top = changeY +'px';
            var url = this.getElementsByTagName('a')[0].getElementsByTagName('img')[0].src;
            var indexNub = url.indexOf('images');
            var bgurl = url.slice(indexNub);

            //  速率
            var rate = -2.5 ;
            var LeftBs = parseInt(FindTool.css('left'));
            var TopBs = parseInt(FindTool.css('top'));

            bigPic.css({
                backgroundImage:"url(" + bgurl + ")",
                backgroundPosition: rate*LeftBs +'px '+rate*TopBs +'px'
            })
        };
        // 离开
        findpicTo.onmouseout = function(){
            FindTool.css({display:'none'});
            bigPic.css({display:'none'});
        };



    // 选择查看不同主图
    (function(){
        $('.selectP ul li').on('mouseover',function(){
            $(this).addClass('selectLi')
                .siblings().removeClass('selectLi');
            var url = $(this).children('img').attr('src') ;
            $('.mainpic a img').attr('src',url)
        });
        // 点击左右按钮
        var n = 0;
        function moveSelectImg(moveDis){
            $('.selectP ul').css({left : moveDis+'px'})
        }
        $('.btnR').on('click',function(){
            n++;
            if(n>1){
                n=1;
                return
            }
            moveSelectImg(-110*n)
        });
        $('.btnL').on('click',function(){
            n--;
            if(n<0){
                n=0;
                return
            }
            moveSelectImg(-110*n)
        });
    })();
    // 咨询按钮
    $('.zixun').hover(
        function(){
            $(this).css({borderRadius:'0px',color:'red'})
        },
        function(){
            $(this).css({borderRadius:'25px',color:'#fff'})
        }
    );

    // 商品详情，服务保障切换

    $('.detailbox .title > div ').on('click',function(){
        $(this).addClass('hoverDetail')
            .siblings().removeClass('hoverDetail');
        $('.detailinner > div')
            .css({display:'none'})
            .eq($(this).index()).css({display:'block'})
    });

});