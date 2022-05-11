<?php

// calling header
get_header();

while (have_posts()) {
  the_post();
?>
  <h1>
    <?php
    the_title();
    ?>
  </h1>
<?php
}

// calling footer
get_footer();
?>