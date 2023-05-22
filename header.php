<!doctype html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Шаблон, Подорожі, Поїздка, туризм, Центральна Європа">
    <meta name="description" content="">
    <meta name="author" content="Голодняк Олексій">
    <meta property="og:url" content="">
    <meta property="og:type" content="article">
    <meta property="og:title" content="">
    <meta property=" og:description" content="">
    <meta property="og:image" content="">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <title>PR5</title>
</head>

<body>
    <div class="container">
        <header class="wrapper header">
            <div class="header_logo">
                <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png'; ?>" alt="logo">
            </div>
            <?php wp_nav_menu([
                'menu_class'      => 'header_menu',
            ]); ?>
            <div class="header_social">
                <a href="#" class="header_icon">
                    <img src="<?php echo get_template_directory_uri().'/assets/icons/facebook.svg'; ?>" alt="Facebook">
                </a>
                <a href="#" class="header_icon">
                    <img src="<?php echo get_template_directory_uri().'/assets/icons/instagram.svg'; ?>" alt="Instagram">
                </a>
                <a href="#" class="header_icon">
                    <img src="<?php echo get_template_directory_uri().'/assets/icons/twitter.svg'; ?>" alt="Twitter">
                </a>
                <a href="#" class="header_icon">
                    <img src="<?php echo get_template_directory_uri().'/assets/icons/phone.svg'; ?>" alt="Phone">
                </a>
            </div>
        </header>