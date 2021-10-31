//------PICTURE-SIZE-ONCLICK-----//
//$(document).ready(function () {
//    var small={width: "300px",height: "185px"};
//    var large={width: "450px",height: "250px"};
//    var count=1; 
//    $("#mainContent123 img").css(small).on('click',function () { 
//        $(this).animate((count==1)?large:small);
//        count = 1-count;
//    });
//});

//------READ-MORE-OR-LESS-----//
function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }


  $(document).ready(function(){

    $(document).scroll(function(){
  
      var footerSelector = '#topFooter';
      var socialBarSelector = '.icon-bar';
  
      var bottomViewPort = $(window).scrollTop()+$(window).height();
      var footerTop = $(footerSelector ).offset().top;
  
      if( bottomViewPort>=footerTop){
       $(socialBarSelector).fadeOut();
     }else{
        $(socialBarSelector).fadeIn(); 
      }
    });
  
  });


 









