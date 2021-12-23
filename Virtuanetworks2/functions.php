<?php
//Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

//Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');


function bratrismat_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'script-general', 
        get_template_directory_uri() . '/assets/js/onepage-script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style-general',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	

    
    // Déclarer un autre fichier CSS
    // wp_enqueue_style( 
    //     'style-supplementaire', 
    //     get_template_directory_uri() . '/assets/css/onepage-web.css',
    //     array(), 
    //     '1.0'
    // );
}
add_action( 'wp_enqueue_scripts', 'bratrismat_register_assets' );



register_nav_menus( array(
    'header' => 'Haut de page',
	'main' => 'Page Principale',
	'footer' => 'Bas de page',
) );

if (isset($_POST["submit"])) {
    if (!isset($_POST["verif"]) || $_POST["verif"] =='') {
        $to = get_option('admin_email');
        $nom = sanitize_text_field($_POST["name"]);
        $email = sanitize_email($_POST["email"]);
        $message = esc_textarea( $_POST["story"]);
        $sujet = "Message de ".$email;
        $headers = $headers = 'From: '.$email.'' . "\r\n" .
        'Reply-To: '.$to.'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
        if (wp_mail($to, $sujet, $message, $headers)) { ///(mail($to, $subject, $message, $headers) en local/ou en dehors du contexte wordpress)
            echo '<script>alert("Message envoyé")</script>';
            echo '<script>location.href="http://localhost/Virtua-Networks#contact?mess=ok"</script>';
            


        } else {
            echo '<script>alert("Une erreur est survenue");</script>';
        }
    }
}



    

?>