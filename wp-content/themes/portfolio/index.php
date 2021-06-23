<?php get_header(); ?>
    
    <main class="main">

  

        <div class="photos">
            
            <?php if (have_posts()): while(have_posts()): the_post() ?>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?> </a>
              
            <?php endwhile; endif; ?>
        </div>
  
    <a id="bored" href="http://localhost/ph/portfolio/call/"> BORED? </a>   

    </main>

  

    <?php get_footer(); ?>



