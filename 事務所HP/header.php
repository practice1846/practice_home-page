<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css">
    <?php if(is_page('inquiry')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/form.css">
    <?php endif; ?>
    <?php if(is_page('about')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/about.css">
    <?php endif; ?>
    <?php if(is_page('service')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/service.css">
    <?php endif; ?>
    <?php if(is_page('staff')): ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/staff.css">
    <?php endif; ?>
    <?php //if(!is_page('about')): ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php //endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="Body">
    <!-- <section>
        <h2>Curtain Layer Menu</h2>
    </section> -->
    <div class="toggle" onclick="toggleMenu();">
    </div>
    <section class="navigation">
        <span style="--i:0;"></span>
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
        <ul>
            <li><a href="<?php home_url(); ?>/" onclick="toggleMenu();">Home</a></li>
            <li><a href="<?php get_template(); ?>/about" onclick="toggleMenu();">About</a></li>
            <li><a href="#Service" onclick="toggleMenu();">Service</a></li>
            <li><a href="#" onclick="toggleMenu();">Team</a></li>
            <li><a href="<?php get_template(); ?>/inquiry" onclick="toggleMenu();">Contact</a></li>
        </ul>    
    </section>
    <header class="active">
        <div>
            <div>事務所HP</div>
            <?php if(is_front_page()): ?>
                <ul>
                    <li><a href="#" >Home</a></li>
                    <li><a href="<?php get_template(); ?>/about">About</a></li>
                    <li><a href="<?php get_template(); ?>/service">Service</a></li>
                    <li><a href="<?php get_template(); ?>/staff">Profile</a></li>
                    <li><a href="<?php get_template(); ?>/inquiry">Contact</a></li>
                </ul>
            <?php endif; ?>
            <?php if(!is_front_page()): ?>
                <ul>
                    <li><a href="<?php home_url(); ?>/">Home</a></li>
                    <li><a href="<?php get_template(); ?>/about">About</a></li>
                    <li><a href="<?php get_template(); ?>/service">Service</a></li>
                    <li><a href="<?php get_template(); ?>/staff">Profile</a></li>
                    <li><a href="<?php get_template(); ?>/inquiry">Contact</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </header>
    <main class="active">
        <!-- <?php
            wp_nav_menu(array(
                'container' => 'nav', //出力されるulタグをnavタグで囲ませる指定
                'container_id' => 'utility-nav', //ラップするnavタグのid属性を指定する
                'theme_location' => 'place_utility', //テーマの場所にplace-utilityを指定
            ));
        ?> -->
        <?php if(is_front_page()): ?>
            <section class="section01">
            <?php
                // wp_nav_menu(array(
                //     'container' => 'nav', //出力されるulタグをnavタグで囲ませる指定
                //     'container_id' => 'utility-nav', //ラップするnavタグのid属性を指定する
                //     'theme_location' => 'place_utility', //テーマの場所にplace-utilityを指定
                // ));
            ?>
                <div class="p-container">
                    <img src="<?php bloginfo('template_url'); ?>/img/myChannel_da-nang-city.jpg" alt="外観">
                </div>
            </section>
        <?php endif; ?>