<?php

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    
<article class="post-page">
    <!--post titles-->
        <?php the_content(); ?>
</article>

    <?php endwhile;

    else : 
        echo '<p>Sorry, no content found :-( </p>';

    endif;

get_footer();

?>
