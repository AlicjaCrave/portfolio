<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierre-Henri Crave</title>
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?ver=20190507" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
    if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
    }

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

</head>

<body>
    <header>
        <nav id="top">
               <ul> <?php wp_nav_menu(array(
                    'theme_location' => 'nav'
                )); ?>
                </ul>
        </nav>
    </header>
    
    <main class="main">
        <div class="photos">
            
            <?php if (have_posts()): while(have_posts()): the_post() ?>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?> </a>
            <?php endwhile; endif; ?>
        </div>
    </main>

    <footer> 
<?php wp_footer(); ?>
      <nav id="bottom">
            <div id="social">
                <a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div> 

            <div id="droits">
            <i class="fa fa-copyright" aria-hidden="true"></i>  <p> 2021 | Pierre-Henri Crave</p></div>  
        </nav>  
    </footer>
</body>
</html>

