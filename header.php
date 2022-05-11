<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Simple gaming site" />
  <title>Blueprint Gaming</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

  <?php
  wp_head();
  ?>
</head>

<body>
  <header>
    <section class="top-bar">
      <nav class="social-media">
        <ul>
          <li>
            <a href="#" class="svg" aria-label="facebook">
              <img src="<?php echo get_theme_file_uri('assets/images/facebook.svg') ?>" alt="facebook" />
            </a>
          </li>
          <li>
            <a href="#" class="svg" aria-label="twitter">
              <img src="<?php echo get_theme_file_uri('assets/images/twitter.svg') ?>" alt='twitter' />
            </a>
          </li>
          <li>
            <a href="#" class="svg" aria-label="linkedin">
              <img src="<?php echo get_theme_file_uri('assets/images/linkedin.svg') ?>" alt="linkedin" />
            </a>
          </li>
        </ul>
      </nav>
    </section>

    <section class="main-nav">
      <nav>
        <div class="navbar">
          <div class="nav-container">
            <label for="for-checkbox"></label>
            <input class="checkbox" type="checkbox" name="" id="for-checkbox" />

            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>

            <div class="logo">

              <?php
              // if (function_exists('the_custom_logo')) {
              //   the_custom_logo();
              // }

              if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                  echo '<a href="' . home_url('/') . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                } else {
                  echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
              }
              ?>

            </div>

            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'header-menu',
                'container_class' => 'menu-items'
              )
            );
            ?>

          </div>
        </div>
      </nav>
    </section>
  </header>