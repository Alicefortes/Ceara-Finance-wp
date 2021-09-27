jQuery(function(){

	jQuery('.loop').on('initialized.owl.carousel translate.owl.carousel', function(e){
        idx = e.item.index;
        jQuery('.owl-item.big').removeClass('big');
        jQuery('.owl-item.medium-left').removeClass('medium-left');
        jQuery('.owl-item.medium-right').removeClass('medium-right');
        jQuery('.owl-item').eq(idx).addClass('big');
        jQuery('.owl-item').eq(idx-1).addClass('medium-left');
        jQuery('.owl-item').eq(idx+1).addClass('medium-right');
    });


    jQuery('.loop').owlCarousel({
        center: true,
        loop:true,
        nav:false,
        dots:true,
        dotsEach:true,
        margin:10,
        autoplay:true,
        autoplaySpeed:500,
        responsive:{
            0:{
                items:1,
            },
            576:{
                items:1,
                
            },
            992:{
                items:3,
            },
            1200:{
                items:3,
            }
        }
    })
}); 

