<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset");?>" >
  <meta name= "viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class();?>>
<header class="site-header">
      <div class="container">
      <a href="<?php echo site_url() ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Deans.png" alt="alternative_text" width="150" height="200"></a>

        <!-- <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a>
        </h1> -->
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url("/about-us")?>">About Us</a></li>
              <li><a href="<?php echo site_url("/Auto Towing")?>">Auto Towing</a></li>
              <li><a href="<?php echo site_url("/Heavy Duty Towing")?>">Heavy Duty Towing</a></li>
              <li><a href="<?php echo site_url("/Crane Service")?>">Crane Service</a></li>
              <li><a href="<?php echo site_url("/Equipment Relocation")?>">Equipment Relocation</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>