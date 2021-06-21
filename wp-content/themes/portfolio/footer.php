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
        <nav id="top">
               <ul> <?php wp_nav_menu(array(
                    'theme_location' => 'nav'
                )); ?>
                </ul>
        </nav>
    </footer>
</body>
</html>