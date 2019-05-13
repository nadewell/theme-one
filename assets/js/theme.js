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
});