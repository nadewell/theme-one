<article <?php post_class(); ?> >
    <div class="post-thumbnail">
        <img class="featured-image" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ),'full' )[0]; ?>" alt="<?php the_title(); ?>">
        <div class="post-date"><?php the_date( 'j M, Y' ) ?></div>
    </div>
    <div class="post-meta">
        <div class="post-term"><?php the_category( ',', 'Parent:' ); ?></div>
        <div class="post-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></div>
    </div>
    <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
    <div class="post-excerpt">
        <p><?php the_excerpt(); ?></p>
        <a class="read-more" href="<?php the_permalink(); ?>">Continue</a>
    </div>
</article>