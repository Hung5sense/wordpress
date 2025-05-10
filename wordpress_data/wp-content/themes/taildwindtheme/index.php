<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title( '<h2>', '</h2>' );
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</body>
</html>
