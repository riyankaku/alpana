
$(document).ready(function(){
    let stickynav=$(".nav-section").offset().top;
function stickynavbar(){
    let scrollTop=$(window).scrollTop();
    if(scrollTop >stickynav ){
        $(".nav-section").addClass("sticky");
    }
    else{
        $(".nav-section").removeClass("sticky");
    }
}
$(window).scroll(function(){
    stickynavbar();
});
        $('.dropdown-toggle').on('click', function() {
      
      $(this).next('.dropdown-menu').slideToggle();
    });
    
  
    $(document).on('click', function(event) {
      if (!$(event.target).closest('.dropdown').length) {
        $('.dropdown-menu').slideUp();
      }
    });
    setTimeout(function(){
      $("#popup").css("display", "block");
   
   
    },5000);
   
    $("#sub").click(function(){
     $("#popup").css("display", "none");
   
   
    });
    $(".pop-cross").click(function(){
     $("#popup").css("display", "none");
   
    });


    $("#hide1").click(function(){
      $("#invisible8").show();
      $("#hide1").hide();
      $("#show1").show();

    });
    $("#show1").click(function(){
      $("#invisible8").hide();
      $("#hide1").show();
      $("#show1").hide();

    });
    $("#hide2").click(function(){
      $("#invisible7").show();
      $("#hide2").hide();
      $("#show2").show();

    });
    $("#show2").click(function(){
      $("#invisible7").hide();
      $("#hide2").show();
      $("#show2").hide();

    });
    $("#hide3").click(function(){
      $("#invisible6").show();
      $("#hide3").hide();
      $("#show3").show();

    });
    $("#show3").click(function(){
      $("#invisible6").hide();
      $("#hide3").show();
      $("#show3").hide();

    });
    $("#hide4").click(function(){
      $("#invisible5").show();
      $("#hide4").hide();
      $("#show4").show();

    });
    $("#show4").click(function(){
      $("#invisible5").hide();
      $("#hide4").show();
      $("#show4").hide();

    });
    $("#hide5").click(function(){
      $("#invisible4").show();
      $("#hide5").hide();
      $("#show5").show();

    });
    $("#show5").click(function(){
      $("#invisible4").hide();
      $("#hide5").show();
      $("#show5").hide();

    });
    $("#hide6").click(function(){
      $("#invisible3").show();
      $("#hide6").hide();
      $("#show6").show();

    });
    $("#show6").click(function(){
      $("#invisible3").hide();
      $("#hide6").show();
      $("#show6").hide();

    });
    $("#hide7").click(function(){
      $("#invisible2").show();
      $("#hide7").hide();
      $("#show7").show();

    });
    $("#show7").click(function(){
      $("#invisible2").hide();
      $("#hide7").show();
      $("#show7").hide();

    });
    $("#hide8").click(function(){
      $("#invisible1").show();
      $("#hide8").hide();
      $("#show8").show();

    });
    $("#show8").click(function(){
      $("#invisible1").hide();
      $("#hide8").show();
      $("#show8").hide();

    });



  });
$(function () {
    "use strict";
    var wind = $(window);

// for video
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:4,
    padding:0,
    nav:false,
    autoplay:true,
    autoplayTimeout: 3000,
    speed:1000,

    responsive:{
        0:{
            items:2
        },
        479:{
            items:4,
        },
        600:{
            items:3,
        },
        1000:{
            items:6
        }
    }
})
// swipper part
var swiper = new Swiper("#swiper1", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop:true,
  speed:1000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay:{
    delay:2000,
    disableOnIntraction:false,
  },
  breakpoints:{
    0:{
      slidesPerView: 1,
      spaceBetween: 30,
    },
    640:{
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768:{
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1040:{
      slidesPerView: 4,
      spaceBetween: 20,
    }
  }
});









});
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
 });
//  blog swiper
 var swiper = new Swiper("#swiper2", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop:true,  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay:{
    delay:2000,
    disableOnIntraction:false,
  },
  breakpoints:{
    0:{
      slidesPerView: 1,
      spaceBetween: 30,
    },
    
    640:{
      slidesPerView: 2,
      spaceBetween: 30,
    },
    768:{
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1040:{
      slidesPerView: 3,
      spaceBetween: 20,
    }
  }
});

 



