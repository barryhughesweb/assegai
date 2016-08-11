<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the header for our theme. It is used universally, for all posts
//  and page templates.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?><!doctype html>
<!--[if lt IE 8 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-GB" class=""> <!--<![endif]-->

<head>
 
  <meta charset="<?php bloginfo('charset'); ?>" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  
  
  
  <?php  //  Calls the json function from '_functions/template/json.php'  //
  
  hobbes_json(); ?>
  
  <?php  //  Calls the header specific styling function from '_functions/template/head-styling.php'  //
  
  hobbes_head_styling(); ?>
  
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>

<header>

<div class="head1"><!-- MOBILE VIEW > IPAD -->
    <div class="container--xlarge">
        <div class="header--gridbox">
            <div class="grid--full">
                <div class="grid__item--quarter header__left">
                    <?php hobbes_logo(); ?>
                </div><!--
                --><div class="grid__item--quarter header__right">
                    <div class="header_icons">
                        <?php hobbes_phone_number_2(''); ?>
                        <?php hobbes_facebook(''); ?>
                        <?php hobbes_google_plus(''); ?>
                    </div>
                </div>
            </div>  
        </div>	
    </div>
      <div class="nav_wrap">
            <div class="container--xlarge">
                <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //

                hobbes_clean_nav('header-menu','main-navigation'); ?>
            </div>
        </div>
</div>
<div class="head2"><!-- DESKTOP -->
    <div class="container--xlarge">
        <div class="header--gridbox">
            <div class="grid--full">
                <div class="grid__item--quarter header__left">
                    <?php hobbes_logo(); ?>
                </div><!--
                --><div class="grid__item--quarter header__right">
                    <div class="header_icons">
                        <?php hobbes_phone_number_2(''); ?>
                        <?php hobbes_facebook(''); ?>
                        <?php hobbes_google_plus(''); ?>
                    </div>
                </div><!--
                --><div class="grid__item--half header__middle">
                    <?php hobbes_clean_nav('header-menu','main-navigation'); ?>
                </div>
            </div>  
        </div>	
    </div>
</div>
  
</header>

<div class="main__content"><?php //  This is also closed in 'footer.php'  // ?>