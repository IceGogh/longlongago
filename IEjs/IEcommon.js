$(function(){
   // header-top ΢�Ź��ں�
   $('.header-top .iconWX').on('click',function(){
      $(this).children().slideDown();
   });
   $('.iconWX').find('span').on('click',function(ev){
      ev.stopPropagation();
      $(this).slideUp('fast')
          .siblings().slideUp('fast');
   })




});