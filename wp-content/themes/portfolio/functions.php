<?php
require TEMPLATEPATH.'/framework/theme.php';
$theme = new Theme (array (
    'menus' => array(
        'nav' => 'navbar'
    ),
    'images' => array(
        'post' => array(
            array('thumb', 300,300, true)
        )
    )
));