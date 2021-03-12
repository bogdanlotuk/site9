<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'description' ); ?></title>    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" rel="stylesheet">   
    <?php wp_head(); ?>
</head>
<body>
    <header id="header" class="header">
        <video class="header__video-bg" src="<?php the_field('header__video-bg'); ?>" autoplay loop muted preload="metadata"></video>
        <img class="header__img-bg" src="<?php the_field('header__img-bg'); ?>" alt="">
        <div class="container">   
            <div class="header__inner">
                <div class="header__top">
                    <div class="burger">
                        <span class="burger__line burger__line--1"></span>
                        <span class="burger__line burger__line--2"></span>
                        <span class="burger__line burger__line--3"></span>
                        <span class="burger__line burger__line--4"></span>
                    </div>                   
                    <nav class="header__navigation">
                        <ul class="header__menu">
                            <li class="header__menu-item"><a class="header__menu-link" href="#header"><?php the_field('header__menu-link-home'); ?></a></li>
                            <li class="header__menu-item"><a class="header__menu-link" href="#about"><?php the_field('header__menu-link-about'); ?></a></li>
                            <li class="header__menu-item"><a class="header__menu-link" href="#skills"><?php the_field('header__menu-link-skills'); ?></a></li>
                            <li class="header__menu-item"><a class="header__menu-link" href="#portfolio"><?php the_field('header__menu-link-portfolio'); ?></a></li>
                            <li class="header__menu-item"><a class="header__menu-link" href="#contact"><?php the_field('header__menu-link-contact'); ?></a></li>
                        </ul>
                    </nav>
                </div>
                <h1 class="header__h1"><?php the_field('header__h1'); ?></h1>
                <p class="header__text"><?php the_field('header__text'); ?></p>
            </div>
        </div>
    </header>