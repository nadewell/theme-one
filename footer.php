
</div>
<footer class="site-footer">
    <div class="container-fluid">
        <div class="row">
            
            <?php if(is_active_sidebar( 'footer-1' )): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </div>
            <?php  endif; ?>

            <?php if(is_active_sidebar( 'footer-2' )): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <?php dynamic_sidebar( 'footer-2' ); ?>
            </div>
            <?php  endif; ?>

            <?php if(is_active_sidebar( 'footer-3' )): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <?php dynamic_sidebar( 'footer-3' ); ?>
            </div>
            <?php  endif; ?>

            <?php if(is_active_sidebar( 'footer-4' )): ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
            <?php dynamic_sidebar( 'footer-4' ); ?>
            </div>
            <?php  endif; ?>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>