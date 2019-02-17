<!-- If a sinlge.php file exists, then it will be used for all single displays for posts otherwise defaults to index.php -->
<?php
while(have_posts()) { // Iterates through all your posts
  the_post(); ?>
  <h2> This is a page not a post!</h2>
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
  <hr>
  <?php
}