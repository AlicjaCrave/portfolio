<?php
/*
Plugin Name: Portfolio-Form
*/

function portfolio_form()
{
    //creation of the variable $content
    $content = '<div class ="contact-form">';
    $content .= '<h1>CONTACT</h1>';
    // '.=' sereves to extend the value of the content 
    // after submitting the form, it is sending us to other page.
    $content .= '<form method="post" class="form-style"  action= "http://localhost/ph/portfolio/merci/">';

    $content .= '<label for="your_name">Nom</label>';
    $content .= '<br>';

    $content .= '<input type="text" name="your_name"/>';
    $content .= '<br>';

    $content .= '<label for="your_email">Email</label>';
    $content .= '<br>';
    $content .= '<input type="email" name="your_email" />';
    $content .= '<br>';

    $content .= '<label for="your_comments">Commentaire</label>';
    $content .= '<br>';
    $content .= '<textarea name="your_comments"> </textarea>';
    $content .= '<br>';

    $content .= '<input type="submit" name="form_submit" value="ENVOYER">';
    $content .= '</form>';
    $content .= '</div>';
  // each time we enter shortcode, we have to return the content. Writing the form in HTML will cause error in WordPress
    return $content;
}

// form is the word to put in the wordpress 'shrotcode' 'portfolio_form' is the callback function 
add_shortcode('form', 'portfolio_form');

function form_capture ()
{
    if (isset($_POST['form_submit']))
    {
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        
        // Sanitizes a string from user input or from the database.
        $name = sanitze_text_field($_POST['your_name']);
        $email = sanitze_text_field($_POST['your_email']);
        // sanitze_textarea_field The function is like sanitize_text_field(), 
        // but preserves new lines (\n) and other whitespace, which are legitimate input in textarea elements.
        $comments = sanitze_textarea_field($_POST['your_comments']);

        $to = 'aliciacrave66@gmail.com';
        $subject = 'test form submission';
        $message = $comments.' - '.$name.' - '.$email;

        //une fonction de wordpress permettant d'nvoyer les e-mails.
        //wp_mail( string|string[] $to, string $subject, string $message, 
        wp_mail($to, $subject, $message);
    }
}

// adding action to the head, we have to be careful not to overcharge, 
// everytime any page on the WordPress loads, it will check if the form was submited
// not recommended for the big projects 
add_action('wp_head', 'form_capture'); 