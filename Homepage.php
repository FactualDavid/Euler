<!--theme template name-->
<?php /*Template Name: Homepage */?>

<!--get header file-->
<?php get_header('landing'); ?>
    
<body>
    <!-- navigation bar -->
    <?php $my_postid = 5724;//This is page id or post id
        echo get_post_field('post_content', $my_postid);
    ?>
    <!-- container start -->
    <div id="container">
        <!--content php-->
        <?php
            if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article>
                        <!--the content-->
                        <?php the_content(); ?>
                </article>
            <?php endwhile;
        
            endif;

        ?>
<!--get footer function-->
<?php get_footer(); ?>

