$(document).ready(function(){
     $('.slider-sclik').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        focusOnSelect: true,
        dots: true,
        speed: 500,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2200,
        responsive:[
        {
          breakpoint: 768,
          settings: {
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
    });
});
$(document).ready(function(){
    $('.featured_lick').slick({

        slidesToShow:3,

        slidesToScroll: 1,

        focusOnSelect: true,

        speed: 1000,

        arrows: true,

        responsive:[

	    {

	      breakpoint: 768,

	      settings: {

	        slidesToShow: 1,

	        slidesToScroll: 1

	      }

	    }]

    });
    $('.partners_lick').slick({

        slidesToShow:6,

        slidesToScroll: 1,

        speed: 1000,

        focusOnSelect: true,

        speed: 700,

        arrows: false,

        autoplay: true,

        autoplaySpeed: 3000,

        responsive:[

        {

	      breakpoint: 1200,

	      settings: {

	        slidesToShow: 5,

	        slidesToScroll: 2

	      }

	    },

        {

	      breakpoint: 1024,

	      settings: {

	        slidesToShow: 4,

	        slidesToScroll: 1

	      }

	    },

	    {

	      breakpoint: 480,

	      settings: {

	        slidesToShow: 2,

	        slidesToScroll: 1

	      }

	    },

	    {

	      breakpoint: 768,

	      settings: {

	        slidesToShow: 3,

	        slidesToScroll: 1

	      }

	    }]

    });
     $('.detail_lick').slick({

        slidesToShow:3,

        slidesToScroll: 1,

        focusOnSelect: true,

        speed: 1000,

        prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-angle-double-left"></i></button>',

        nextArrow:'<button type="button" class="slick-next"><i class="fa fa-angle-double-right"></i></button>',

        responsive:[

        {

          breakpoint: 768,

          settings: {

            slidesToShow: 1,

            slidesToScroll: 1

          }

        },

        {

          breakpoint: 992,

          settings: {

            slidesToShow: 2,

            slidesToScroll: 1

          }

        }

        ]

    });
    

});





$(document).ready(function(){

    $(".row-Faq .item-Faq .show-answer").click(function(){

        if($(this).parents(".row-Faq").hasClass("show")){
           $(".row-Faq").removeClass("show");
           $(this).parents(".row-Faq").find(".item-answer").stop().slideToggle("0");
        }
        else{
            $(".row-Faq.show .item-answer").stop().slideToggle("700");
            $(".row-Faq").removeClass("show");
            $(this).parents(".row-Faq").addClass("show");
            $(this).parents(".row-Faq").find(".item-answer").stop().slideToggle("700");

        }    

    });  

});







