<!--theme template name-->
<?php /*Template Name: Blog */?>

<!--get header file-->
<?php get_header(); ?>
    
<body>
    <!-- navigation bar -->
    <?php $my_postid = 5722;//This is page id or post id
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

            else : 
                echo 
                '<div class="no-content">yeah, that is a 404</div><br>
                <a href="/"> <div class="back-to-home-button">Back</div></a>';
            endif;

        ?>
<!--get footer function-->
<?php get_footer(); ?>

