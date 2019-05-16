jQuery(document).ready(function () {

    //Navbar Toggle
    jQuery('.site-header .hamburger').on('click', function () {
        jQuery('.site-navbar').slideToggle();
        jQuery(this).toggleClass('close');
    });

    //Search Modal
    jQuery('.searchbox .search-btn').on('click', function () {
        jQuery(this).toggleClass('open');
        jQuery('.searchbox-modal').slideToggle();
    });

    //testimonial slider
    jQuery('#testimonial-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: true,
        prevArrow: '<button class="slick-prev" aria-label="Previous" type="button"><i class="fa fa-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next" aria-label="Next" type="button"><i class="fa fa-chevron-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    //client slider
    jQuery('#client-slider').slick({
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
    });

    // making column equal height
    var max_height = 0;
	var column = jQuery('.row.equal-height > div');
	column.each(function(){
		if(jQuery(this).height() > max_height){  
            max_height = jQuery(this).height(); 
            console.log(max_height);
        }
    });
    column.height(max_height);
    
});

