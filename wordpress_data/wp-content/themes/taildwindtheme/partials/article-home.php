
<?php get_template_part('partials/slideshow'); ?>
<?php get_template_part('partials/about'); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h2 class="text-[#fb995a]"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'No content found.', 'taildwindtheme' ); ?></p>
<?php endif; ?>
