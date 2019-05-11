<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class()?> >

<header class="site-header" id="masthead">
    <div class="custom-logo">
        <?php if( has_custom_logo() ){ ?>    
        <a href="<?php home_url(); ?>"><img src="<?php echo wp_get_attachment_image_src( get_theme_mod('custom_logo'), 'full' )[0]; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>        
        <?php }else{ ?>
        <a href="#"><?php bloginfo( 'name' ); ?></a>
        <?php } ?>
    </div>
    <nav class="site-navbar">
        <?php wp_nav_menu( array(
            'menu'              => 'primary',
            'menu_id'           => 'main-navigation',
            'menu_class'        => 'primary-menu',
            'container'         => 'ul',
            'theme_location'    => 'primary',
            'fallback_cb'       => ''
        ) ); ?>
    </nav>
<div class="searchbox">
    <button type="button" class="search-btn" ><i class="fa fa-search"></i></button>
</div>
<button class="hamburger" type="button">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</button>
</header>

<div id="page" class="page-content">
    
