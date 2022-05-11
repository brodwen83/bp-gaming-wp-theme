<?php

// calling header
get_header();

?>

<main>
  <section id="banner" class="grid">
    <div class="banner-wrapper">
      <div class="heading">
        <h2 class="big-heading">Your title can be long and descriptive</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam.
        </p>
        <a class="cta-button" href="">Read More</a>
      </div>
      <div class="media">
        <img alt="banner image" src="<?php echo get_theme_file_uri('./assets/images/IMAGE.png') ?>" />
      </div>
    </div>
  </section>

  <section id="blurb" class="grid">
    <div class="device1-wrapper">
      <img alt="device1" src="<?php echo get_theme_file_uri('assets/images/DEVICES.png') ?>" />
    </div>
    <div class="blurb-wrapper">
      <div class="blurb-item">
        <img src="<?php echo get_theme_file_uri('assets/images/TABLET.png') ?>" alt="tablet" />
        <h2>Vivamuslihero Augue</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="blurb-item">
        <img src="<?php echo get_theme_file_uri('assets/images/TABLET.png') ?>" alt="tablet" />
        <h2>Vivamuslihero Augue</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="blurb-item">
        <img src="<?php echo get_theme_file_uri('assets/images/TABLET.png') ?>" alt="tablet" />
        <h2>Vivamuslihero Augue</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="blurb-item">
        <img src="<?php echo get_theme_file_uri('assets/images/TABLET.png') ?>" alt="tablet" />
        <h2>Vivamuslihero Augue</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>
  </section>

  <section id="call-to-action" class="grid">
    <div class="cta-heading">
      <h2>Lorem ipsum dolor sit amet elit!</h2>
      <p>Why not try our services today, you won’t regret your choice!</p>
    </div>
    <div class="cta-btn-wrapper">
      <a class="cta-button" href="mailto:example@example.com">Contact Us Today</a>
    </div>
  </section>

  <section id="articles" class="article-grid">
    <ul>
      <?php

      $args = array(
        'post_type'      => 'articles',
        'posts_per_page' => 5,
      );

      $loop = new WP_Query($args);

      while ($loop->have_posts()) {
        $loop->the_post();
      ?>

        <li>
          <article class="article-item">
            <h2 class="article-title">
              <?php the_title(); ?>
            </h2>
            <p class="article-sub-title">
              Posted by <?php echo ucwords(get_the_author()); ?> on <time> <?php echo the_date() ?> </time>
            </p>
            <figure>
              <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="article featured image" />
              <figcaption></figcaption>
            </figure>
            <p> <?php echo substr(get_the_content(), 0, 230); ?> </p>
            <a class="read-more-btn" href=" <?php echo the_permalink(); ?> ">Read More</a>
          </article>
        </li>
      <?php
      }
      ?>

    </ul>
  </section>
</main>

<?php

// calling footer
get_footer();
?>