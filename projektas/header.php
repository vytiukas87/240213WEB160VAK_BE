<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baigiamasis_projektas</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
  </head>
  <?php wp_head(); ?>
  <body>

    <div class="header">
      <div class="container">
    

        <img src="<?php the_field('logo' ,'option'); ?>" alt="logo" />

        <ul class="menu">

        <?php

          $menu = wp_get_nav_menu_items('header-menu');

          foreach ($menu as $menuItem) {
            echo '<li><a href="' . $menuItem->úrl . '">' . $menuItem->title . '</a></li>';
          }

        ?>
        
          <li>
            <a href="#"
            ><button class="menubutton">Get your free guide now</button></a
            >
          </li>
        </ul> 
      </div>
    </div>
    