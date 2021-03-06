<!-- If a sinlge.php file exists, then it will be used for all single displays for posts otherwise defaults to index.php -->
<?php
get_header();
while(have_posts()) { // Iterates through all your posts
  the_post(); ?>
<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>DON'T FORGET TO REPLACE ME LATER</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event') ?>"><i class="fa fa-home"
          aria-hidden="true"></i> Events Home </a>
      <span class="metabox__main"><?php the_title(); ?></span></p>
  </div>
  <div class="generic-content">
    <?php the_content() ?>
  </div>
  <?php 
  $relatedThemes = get_field('related_themes');
  if ($relatedThemes) {
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium">Related Theme(s)</h2>';
    echo '<ul class="link-list min-list">';
    forEach($relatedThemes as $theme){
      ?>
      <li><a href="<?php echo get_the_permalink($theme); ?>"><?php echo get_the_title($theme);
  ?></a></li>
      <?php
    }
    echo '</ul>';
    
  }
  ?>
</div>

<hr>
<?php
}
get_footer();
?>