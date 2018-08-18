<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to my website</title>
    <meta name="description" content="website galeh , galeh website">
    <meta name="keywords" content="blog , blog hacking tutorial, tutorial hacking blog">
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/styles-merged.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/style.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/custom.css">

  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="<?php echo base_url()?>home" class="probootstrap-logo">galeh rizky<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li class="active"><a href="<?php echo base_url()?>home">Home</a></li>
            <li><a href="<?php echo base_url()?>home/blog">Blog</a></li>
            <li><a href="<?php echo base_url()?>home/about">About</a></li>
            <li><a href="<?php echo base_url()?>home/contact">Contact</a></li>
          </ul>
          <ul class="probootstrap-header-social hidden-xs">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Social</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->