<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php 
wp_head(); 
?>


</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="header">
    <nav class="nav-web">
        <a href="<?php echo home_url( '/' ); ?>">
        
            <img class="nav-logo"  src="<?php echo bloginfo("template_url"); ?>/assets/img/logos/logo-virtuanetwork.webp" alt="Logo">
            <a href="#">
            <img class="burger-mobile" src="<?php echo bloginfo("template_url"); ?>/assets/img/imagesSite/burger.webp" alt="Menu burger en noir">
            </a>
</a>
            <?php   wp_nav_menu( array('theme_location' => 'header', 
                            'container' => 'ul' // afin d'éviter d'avoir une div autour 
                        ) 
                    ); 
            ?>
                  <!-- modal burger -->
<div class="modal-burger">
<?php   wp_nav_menu( array('theme_location' => 'header', 
                            'container' => 'ul' // afin d'éviter d'avoir une div autour 
                        ) 
                    ); 
            ?>
</div>
    </nav>
  
 