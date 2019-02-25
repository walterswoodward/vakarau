<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
      <?php the_archive_title(); ?>
      <!-- Below is the approach you would have to take up until 2014 and the_archive_title() and the_archive_description(); -->
      <!-- <?php
        // is_category() will return true if you are on a category screen
        // if (is_category()){
        //   single_cat_title();
        // }
        // is_author() will return true if you are on an author screen
        // if (is_author()){
        //   echo 'Posts by '; the_author();
        // }
      ?> -->
    </h1>
    <div class="page-banner__intro">
      <p><?php the_archive_description(); ?> </p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
  // Iterates over all availables posts using have_posts()
  while (have_posts()) {
    the_post(); ?>
  <div class="post-item">
    <h2 class='headline headline--medium headline--post-title'>
      <!-- Utilizes the_permalink() to get permalink of current post -->
      <a href='<?php the_permalink(); ?>'>
        <!-- Utilizes the_title() to get title of current post -->
        <?php the_title(); ?>
      </a>
    </h2>
    <div class="metabox">
      <p> Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y');  ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="generic-content">
      <?php the_excerpt(); ?>
      <p><a href='<?php the_permalink(); ?>' class='btn btn--blue'>Continue reading &raquo; </a></p>
    </div>

  </div>
  <?php
  }
  echo paginate_links();
  ?>
</div>
<?php
get_footer();
?>