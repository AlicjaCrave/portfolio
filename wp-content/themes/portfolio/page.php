<?php get_header(); ?>


<?php if (have_posts()): while(have_posts()): the_post() ?>
    <div class="about">



            <div class="photo-about">
            <?php the_post_thumbnail(); ?> </a>
            
            <h1><?php the_title(); ?></h1>
            
            <p><?php the_content(); ?></p>
            
            
        </div>
    </div>


    <?php endwhile; endif; ?>
   


<?php get_footer(); ?>

