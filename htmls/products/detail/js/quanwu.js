$(function(){
    $.ajax({
        url : 'js/quanwu.txt',
        type:"get",
        dataType:"json",
        success : function(data){
            callBack(data)
        }
    });
    function callBack(data){
        var locUrl = window.location.href;
        var indexNub = locUrl.indexOf('ID=') +3;
        //  ��ȡ��ǰ����ҳ���
        var index = (locUrl.substr(indexNub)).slice(0,2);


        //  ���ݱ�ţ�  �滻����ҳ����
            // �Ŵ�
        $('#main .title').find('span').html(data[index][2]);
        $('.mainpic a').find('img').attr('src','images/' + data[index][1] + '/1.jpg');
        for(var i=0; i<$('.selectP ul li').length; i++){
            $('.selectP ul li').eq(i).find('img').attr('src','images/' + data[index][1] +'/'+(parseInt(i)+1) + '.jpg')
        }

            //  ��Ʒ����
        var $jieshao = $('.detail-r');
        removeImg();
        function removeImg(){
            $jieshao.find('h4').html(data[index][2]);
            // $jieshao.find('.titleSmall').html(data[index][1]);
            // $jieshao.find('.titlenote').html(data[index][2]);
            $jieshao.find('.titlenote2nd').html(data[index][3]);
            $jieshao.find('.fengge span').html(data[index][4]);
            $jieshao.find('.caizhi span').html(data[index][5]);
            $jieshao.find('.guige span').html(data[index][6]);
            $jieshao.find('.price span').html(data[index][7]);
        }
            //  ��Ʒ����

        var Img = "";
        var ImgCan = "images/QW" + data[index][1] + "/790%20(0).jpg";
        for(var i=0; i<13; i++){
            var ImgSrc = "images/" + data[index][1] + "/790%20(" + (1+parseInt(i)) + ").jpg";
            Img += '<img src="' + ImgSrc + '"/>';
        }
        $('.xiangqinginner').html(Img);
        $('.canshuinner').html('<img src="' + ImgCan + '"/>');


    }

});

