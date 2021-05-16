    $(function() {      
       width=$('.slider-box').width();                     
       next_prev=1;  
       count=0;   
      $('.slider img:last').clone().prependTo('.slider'); 
        // $('.slider img').eq(1).clone().appendTo('.slider');
        $('.slider').css('margin-left', -width);  
          interval=setInterval('animation()',6000);
          $( "li:eq(0)" ).addClass('active');
                 
    });
function animation(){ 
      margin = parseInt($('.slider').css('marginLeft')); 
      var margin1 = parseInt($('.slider').css('width')); 
    if(next_prev==1){
         margin=margin-width;  count++; func_count();
         if(margin<-margin1+width) {                                                  
          $('.slider').css('margin-left', 0);              
           margin=-width;
           count=0; 
           func_count();  
          }  
    }else if (margin>=0){  
        $('.slider').css('margin-left', -3*width);    
        margin=-2*width;  
        count=1;
        func_count();
        }else {margin=margin+width; count--; func_count();
                if(margin>0){
                  $('.slider').css('margin-left', -3*width);    
                    margin=-2*width;  
                    count=1;
                    func_count();   
             } 
              }   
    $('.slider').animate({marginLeft:margin},1000);  
   
      
};
  function func_count(){
     $('ul.circle li').removeClass('active').eq(count).addClass('active');
}
    $(document).ready(function(){
      $(document).on("click","#next",function(){
               next_prev=1; 
               animation();       	
        });
     $(document).on("click","#prev",function(){
               next_prev=-1; 
               animation();
               next_prev=1; 
           });
        $set = $('ul.circle li');
    $(document).on("click","ul.circle li",function(){
        n=$set.index(this); 
        count=n;
        console.log(n); 
        margin3=-width*(n+1);
        func_count();
        $('.slider').animate({marginLeft:margin3},1000); 
           });    
    $("#next").add("#prev").add("ul.circle li").hover(function() { 
           clearInterval(interval);
            }, function(){    
            interval=setInterval('animation()',2000);
          }); 
    });