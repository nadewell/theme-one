<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 content-area">
            <?php 
            if( have_posts() ):
                while( have_posts() ): the_post();
                    get_template_part( 'template-parts/post/content' );
                endwhile;
            endif;
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 sidebar">
            <?php 
            if(is_active_sidebar( 'sidebar' )):
                dynamic_sidebar( 'sidebar' );
            endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>