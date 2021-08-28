<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark align-middle">
    <div class="container-fluid">
        <div class="col-4 logo"> 
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo2.svg" alt="logo" width="40px">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo1.svg" alt="logo">
        </div>
        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-4 menu" id="navbarNav" >
            <?php wp_nav_menu(array(
                'menu' => 'main_nav',
                'menu_class' => 'navbar-nav',
                'theme_location' => 'primary',
                'container' => 'false',
                'walker' => new WP_Bootstrap_Navwalker()
                )
                );?>
        </div>
        <div class="collapse navbar-collapse col-4 idioma" id="navbarNav">
            <a href="">pt-br</a>
            <a href="">english</a>
        </div>
    </div>
    </nav>

