<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">
      All Themes
    </h1>
    <div class="page-banner__intro">
      <p>Select a theme below to learn more!</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
<ul class="link-list min-list">
  <?php
  // Iterates over all availables posts using have_posts()
  while (have_posts()) {
    the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
  <?php
  }
  echo paginate_links();
  ?>
  </ul>
</div>
<?php
get_footer();
?>