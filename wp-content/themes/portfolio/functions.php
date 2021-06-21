<?php
require TEMPLATEPATH.'/framework/theme.php';
$theme = new Theme (array (
    'menus' => array(
        'nav' => 'navbar',
    ),
    'images' => array(
        'post' => array(
            array('thumb', 100,100, true)
        )
    )
));


// removes the possibility of seeing the version of the wordpress
// remove_action("wp_head", "wp_generator");

//WordPress renvoie un message bien trop explicite en cas de problème de connexion, ajouter la ligne suivante à 
//votre functions.php du thème permet d’afficher un message d’erreur banalisé:

// add_filter('login_errors',create_function('$a', "return null;"));