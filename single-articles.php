<?php get_header(); ?>

<section id="article-wrap" class="grid">
  <div class="article-container">
    <p class="article-sub-title">
      Posted by Romel on <time>May 27, 2022</time>
    </p>
    <h2 class="article-title"><?php the_title() ?></h2>

    <?php
    // First we need to show content from WordPress editor so use this code:
    if (have_posts()) : while (have_posts()) : the_post();
        the_content();
      endwhile;
    else : ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>