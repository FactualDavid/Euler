<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    
<article class="post">
    <!--defaul display titles-->
    <h2> 
        <a href= " <?php the_permalink(); ?> " ><?php the_title(); ?> </a> 
    </h2>
    <!--content php-->
    <?php the_content(); ?>
</article>

    <?php endwhile;

    else : 
        echo             
            '<div class="no-content">yeah, that is a 404</div><br>
            <a href="/"> <div class="back-to-home-button">Back</div></a>';

    endif;

get_footer();

?>
