// b4 key in
    // placeholder show or hide
$('#main .formIN ').on( 'focus','input' ,function(){
    $(this).prev('em').css({display:'none'});
});
$('#main .formIN ').on( 'blur','input' ,function(){
    if($(this).val() === ''){
        $(this).prev('em').css({display:'block'});
    }
});

//验证输入是否符合规范
    //  submit 哨兵值

    var sumbitFlag0 = false;
    var sumbitFlag1 = false;
    var sumbitFlag2 = false;
    var sumbitFlag3 = false;
    var sumbitFlag4 = false;
    var sumbitFlag5 = false;

//  帐号

 // 注册部分
$('.phoneID').on('blur',function(){

    function defeat(elm){
        $('.phoneID').css({ borderColor:'red'});
        $('.phoneIDpre').css({display:'block'});
        $('.phoneIDpre0').css({display:'none'});
        sumbitFlag1 = false;
    }
    var val = $(this).val();
    if(val.length === 11){

        if( (/^1[34578]\d{9}$/.test( $(this).val() ) ) ){

            $(this).css({ borderColor:'#bbb'});
            $('.phoneIDpre').css({display:'none'});
            sumbitFlag1 = true;
        }else{
            defeat($('.phoneID'));
        }
    }else{
        defeat($('.phoneID'));
    };

    // 判断帐号是否已经注册
    (function(){
        var i = List.length;
        while(i--){

            if(List[i] == val){
                sumbitFlag0 = false;
                $('.phoneID').css({ borderColor:'red'});
                $('.phoneIDpre0').css({display:'block'});
                return;
            }
        }
        sumbitFlag0 = true;
        $('.phoneID').css({ borderColor:'#bbb'});
        $('.phoneIDpre0').css({display:'none'});
    })();
    issueSubmit();
});
    //登录部分
$('.phoneID0').on('blur', function(){
   if($(this).val().length ===11 ){
       sumbitFlag5 = true;
   }else{
       sumbitFlag5 = false;
   }
});

//  密码
$('.password').on('blur',function(){
   if($(this).val().length < 8 || $(this).val().length >16){
       $(this).css({ borderColor:'red'});
       $('.pswd').css({display:'block'});
       sumbitFlag2 = false;
   }else{
       $(this).css({ borderColor:'#bbb'});
       $('.pswd').css({display:'none'});
       sumbitFlag2 = true;
   }
});

//  密码确认
$('.password2').on('blur',function(){
    if( $(this).val() !== $('.password').val() ){
        $(this).css({ borderColor:'red'});
        $('.pswd2').css({ display:'block'});
        sumbitFlag3 = false;
    }else{
        $(this).css({ borderColor:'#bbb'});
        $('.pswd2').css({ display:'none'});
        sumbitFlag3 = true;
    }
});

// recode  刷新验证码
$('.codeImg').on('click', function(){
    $(this).attr('src','php/createcode.php');
    console.log(sumbitFlag0)
});

$('.recode').on('click', function(){
   $('.codeImg').trigger('click');
});




// submit
$('.codes').on('keyup', function(){
    issueSubmit();
});

// checkbox
$('.checkbox').on('click', function(){
    if($(this).prop('checked')){
        sumbitFlag4 = true;
    }else{
        sumbitFlag4 = false;
    }
    issueSubmit();
});

// 判断注册信息是否完整 符合规范
function issueSubmit(){
    if(
        sumbitFlag0 &&
        sumbitFlag1 &&
        sumbitFlag2 &&
        sumbitFlag3 &&
        sumbitFlag4
    ){
        $('.submit')
            .css({background:'#00a6b9',cursor:'pointer'})
            .removeAttr('disabled')
    }else{
        $('.submit')
            .css({background:'#ccc',cursor:'not-allowed'})
            .attr({disabled:'disabled'})
    };

    if( sumbitFlag5){

        $('.submit2')
            .css({background:'#00a6b9',cursor:'pointer'})
            .removeAttr('disabled')
    }else{
        $('.submit2')
            .css({background:'#ccc',cursor:'not-allowed'})
            .attr({disabled:'disabled'})
    }
};

// 切换 登录/注册

function toggle(elm){
    elm.on('click', function(){
        $(this).siblings('a')
            .attr('data-status','0')
            .find('span').removeClass('selectSign');
        $(this)
            .attr('data-status','1')
            .find('span').addClass('selectSign');


        if( $(this).prop('class').slice(0,6) == 'signin'){
            $('.signin').css('display','block');
            $('.signup').css('display','none');

        }else{
            $('.signin').css('display','none');
            $('.signup').css('display','block');

        }

    });

}
toggle($('.signintitle'));
toggle($('.signuptitle'));


