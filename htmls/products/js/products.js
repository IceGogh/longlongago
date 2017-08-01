$(function(){
    //  ajax ��ȡ js �� ��Ӧ json������ ��̬������Ʒ�б�
        // ��ȡ��ǰ��Ʒ���� chugui /  yigui / ....
    var url = window.location.href;
    var urlWords = url.indexOf('products/') + 9;
    var urlWord = url.substr(urlWords);
        //  ȥ�� .html ��׺
    var index = urlWord.indexOf('.html');
    var keyWord = urlWord.slice(0,index);
    var Json;
    $.ajax({
        url: "detail/js/"+ keyWord +".txt",
        type:'get',
        dataType:'json',
        success:function(data){
            createItem(data);
        }
    });
    function createItem(jsonData){
        //  ��ȡ ��Ӧ json�ļ��� �������
        var jsonLength = 0;
        for(var item in jsonData){
            jsonLength++;
        }
        var showPage = 1;       // ��ǰ��ʾҳ��
        var $page = Math.ceil(jsonLength/8);       //  �ܹ�ҳ������

        // ҳ����ʾ
        $('.ye .totleye').html($page);
        //  ѭ������
        loadItem(jsonData);

        function loadItem(jsonData){
            var mainboxInner = "";
            var startN = (showPage-1)*8+1 ;
            var lastN = showPage*8+1;
            if(lastN > jsonLength+1){
                lastN = jsonLength+1;
            }
            for(var i=startN; i< lastN; i++){
                mainboxInner += '<a href="detail/'+ keyWord +'Detail.html?ID='+ (i <=9 ? "0"+i : i) +'"  target="_blank" class="product">'+
                    '<span>'+
                    '<img src="detail/images/'+ jsonData[(i <=9 ? "0"+i : i)][1] +'/1.jpg"/>'+
                    '</span>'+
                    '<div class="style">'+ jsonData[(i <=9 ? "0"+i : i)][2] +'</div>'+
                        /*'+ jsonData[(i <=9 ? "0"+i : i)][2]+'*/
                    '<div class="style2nd"></div>'+
                    '</a>'
            };
            mainboxInner += '<a class="clearfix"></a>';
            $('.mainbox').html(mainboxInner);
            $('.ye .dangqian').html(showPage);

            // hover shadows ( .product �� ajax �ж�̬����)
            function picFl(elm){
                elm.hover(
                    function(){
                        $(this).css({transform:'translateY(-5px)',boxShadow:'0px 5px 8px 0px  #656565'})
                    },
                    function(){
                        $(this).css({transform:'translateY(0px)',boxShadow:'0px 0px 0px 0px transparent'})
                    }
                )
            }
            picFl($('.product'));

        }

        //  ��һҳ
        $('.ye .nextP').on('click',function(){
            showPage++;
            if(showPage > $page){
                showPage = $page
            }
            loadItem(jsonData);
        });
        //  ��һҳ
        $('.ye .preP').on('click',function(){
            showPage--;
            if(showPage < 1){
                showPage = 1
            }
            loadItem(jsonData);
        });
        // ��ҳ
        $('.ye .firstP').on('click',function(){
            showPage = 1;
            loadItem(jsonData);
        });
        // βҳ
        $('.ye .lastP').on('click',function(){
            showPage = $page;
            loadItem(jsonData);
        });
    };


    //scroll listener
    window.onscroll = function(){
        var scrollT = document.documentElement.scrollTop || document.body.scrollTop;
        for(var i=0; i<$('.main2Inner').length; i++){
            if($('.main2Inner').eq(i).offset().top < (scrollT+$(window).height()/2)){
                $('.main2Inner').eq(i).find(' li .images').addClass('loadRoll')
            }
        }

        if(scrollT>100){
            $('#bottom .daiyan img').css({height:'230px'});
            $('#bottom').css({height:'100px', overflow:"visible"})
        }else{
            $('#bottom .daiyan img').css({height:0});
            $('#bottom').css({height:'0px'})
        }
    };
});