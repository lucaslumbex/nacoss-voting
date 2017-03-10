(function($){
    "use strict";$(document).ready(function(){
        $("#loader").fadeOut();
        $("#preloader").delay(350).fadeOut("slow");
        $("body").delay(350).css({overflow:"visible"})
    });
    $(document).ready(function(){openSite()});
    function openSite(){
        fullScreenSlider();
        header();
        scroll();
        winResize();
        // pushmenu();
        // pluginElement();
        // sliderHero();
        // sliderAll();
        // scrollCallbackEle();
        // loadMasonryElements();
        // insertContactEmails()
    }
    function winResize(){
        $(window).resize(function(){})
    }
})(jQuery);
function scroll(){
    $(window).scroll(function(){
        if($(this).scrollTop()>300){
            $(".scroll-top").fadeIn()
        }else{
            $(".scroll-top").fadeOut()}
    });
    $(".scroll-top").click(function(){$("html, body").animate({scrollTop:0},800);return false});
    $('.scroll-down[href^="#"], .scroll-to-target[href^="#"]').on("click",
        function(e){e.preventDefault();
            var target=this.hash;
            var $target=$(target);
            $("html, body").stop().animate({
                scrollTop:$target.offset().top},
                900,
                "swing",
                function(){window.location.hash=target
                })
    })
}
function header(){
    $(window).scroll(function(){
        if($(this).scrollTop()>1){
            $(".header").addClass("sticky");
            $(".inner-inro").css("z-index","-1")
        }else{
            $(".header").removeClass("sticky");
            $(".inner-inro").css("z-index","auto")
        }
    });
    heightElement();
    function heightElement(){
        var windowHeight=$(window).height();
        if($(window).width()>767){
        }else{
        }
    }
    $(window).resize(function(){heightElement()})
}
function pushmenu(){
    $(".toggle-menu").jPushMenu()
}
function fullScreenSlider(){
    if($(".fullscreen-carousel").length>0){
        $(".fullscreen-carousel").flexslider({
            animation:"slide",
            animationSpeed:700,
            animationLoop:true,
            slideshow:true,
            slideshowSpeed:5e3,
            easing:"swing",
            controlNav:false,
            before:function(slider){
                $(".fullscreen-carousel .overlay-hero .caption-hero").fadeOut().animate(
                    {top:"80px"},
                    {queue:false,easing:"easeOutQuad",duration:700}
                    );
                slider.slides.eq(slider.currentSlide).delay(400);
                slider.slides.eq(slider.animatingTo).delay(400)
            },
            after:function(slider){
                $(".fullscreen-carousel .flex-active-slide").find(".caption-hero").fadeIn(2e3).animate(
                    {top:"0"},
                    {queue:false,easing:"easeOutQuad",duration:1200}
                    );
                // BackgroundCheck.refresh()
            },
            start:function(slider){
                $("body").removeClass("loading");
                // BackgroundCheck.init({
                //     targets:".full-intro",
                //     images:".flexslider li img"
                // });
                if(slider.currentSlide==0){
                    slider.pause();
                    setTimeout(function(){
                        if($(".mbYTP_wrapper").length>0){
                            setTimeout(function(){
                                slider.play()
                            }, 105e3)
                        }else{
                            slider.play()
                        }
                    },3e3)
                }
            },
            useCSS:true
        })
    }
    fullScreenCarousel();
    function fullScreenCarousel(){
        var windowWidth=$(window).width();
        var windowHeight=$(window).height();
        if($(window).width()>767){
            $(".hero-slider-1 .slides li").css("height",windowHeight)
        }else{
            $(".hero-slider-1 .slides li").css("height","400px")
        }
    }
    $(window).resize(function(){
        fullScreenCarousel()})
}

function scrollCallbackEle(){
    $(".load-ele-fade").viewportChecker({
        classToAdd:"visible animated fadeIn",offset:100,
        callbackFunction:function(elem,action){}
    });
    wow=new WOW({
        boxClass:"wow",animateClass:"animated",offset:0,
        mobile:false,live:true
    });
    wow.init()
}
shortcodeElements();
function shortcodeElements(){
    $(".parallax").each(function(){
        var $el=$(this);
        $(window).scroll(function(){
            parallax($el)
        });
        parallax($el)
    });
    function parallax($el){
        var diff_s=$(window).scrollTop();
        var parallax_height=$(".parallax").height();
        var yPos_p=diff_s*.5;
        var yPos_m=-(diff_s*.5);
        var diff_h=diff_s/parallax_height;
        if($(".parallax").hasClass("parallax-section1")){
            $el.css("top",yPos_p)
        }
        if($(".parallax").hasClass("parallax-section2")){
            $el.css("top",yPos_m)
        }
        if($(".parallax").hasClass("parallax-static")){
            $el.css("top",diff_s*1)
        }
        if($(".parallax").hasClass("parallax-opacity")){
            $el.css("opacity",1-diff_h*1)
        }
        if($(".parallax").hasClass("parallax-background1")){
            $el.css("background-position","left"+" "+yPos_p+"px")
        }
        if($(".parallax").hasClass("parallax-background2")){
            $el.css("background-position","left"+" "+-yPos_p+"px")
        }
    }
    if($(".container-grid").length>0){
        $.stellar({horizontalScrolling:false,verticalOffset:-700})
    }else{
        $.stellar({horizontalScrolling:false,verticalOffset:0})
    }
    // lightbox();
    // function lightbox(){
    //     $(".cbox-gallary1").colorbox({rel:"gallary",maxWidth:"95%",maxHeight:"95%"});
    //     $(".cbox-iframe").colorbox({iframe:true,maxWidth:"95%",maxHeight:"95%",innerWidth:640,innerHeight:390})
    // }
    skillsProgressBar();
    function skillsProgressBar(){
        $(".skillbar").each(function(){
            $(this).find(".skillbar-bar").animate({width:$(this).attr("data-percent")},2e3)
        })
    }
    $(".tipped").tipper();$(".counter").each(function(){
        var $this=$(this),countTo=$this.attr("data-count");
        $({countNum:$this.text()}).animate(
            {countNum:countTo},
            {
                duration:8e3,
                easing:"linear",
                step:function(){$this.text(Math.floor(this.countNum))},
                complete:function(){$this.text(this.countNum)}
            })
    })
}
