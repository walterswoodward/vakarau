<?php
get_header();
?>

<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri('/images/fiji-aerial-shot-min.jpeg') ?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Bula Vinaka!</h1>
    <h2 class="headline headline--medium">Welcome to Vakarau Events!</h2>
    <!-- <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>gift</strong> you&rsquo;re
      interested in?</h3> -->
    <a href="#" class="btn btn--large btn--blue">Click here to get started!</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

      <?php
        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
          'post_type' => 'event',
          'posts_per_page' => 3,
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          // Filters out events that took place in the past
          'meta_query' => array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              "value" => $today,
              'type' => 'numeric'
            )
          )
        ));
        while ($homepageEvents->have_posts()) {
          $homepageEvents->the_post();
          ?>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="#">
          <span
            class="event-summary__month"><?php
              // the_field() == echo getfield()
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('M')
           ?></span>

          <span
            class="event-summary__day"><?php
              $eventDate = new DateTime(get_field('event_date'));
              echo $eventDate->format('d')
           ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a
              href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p>
            <?php 
          if (has_excerpt()){
            echo get_the_excerpt();
          } else {
            echo wp_trim_words(get_the_content(), 15);
          }
          
          ?>
            <a href="<?php the_permalink() ?>" class="nu gray">
              Learn more
            </a>
          </p>
        </div>
      </div>
      <?php
        }
      ?>

      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>"
          class="btn btn--blue">View
          All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

      <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));
        while($homepagePosts->have_posts()) {
          
          $homepagePosts->the_post();
          ?>
      <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink() ?> ">
          <span class="event-summary__month"><?php the_time('M'); ?></span>
          <span class="event-summary__day"><?php the_time('d'); ?></span>
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a
              href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
          <p>
            <?php 
          if (has_excerpt()){
            echo get_the_excerpt();
          } else {
            echo wp_trim_words(get_the_content(), 15);
          }
          
          ?>
            <a href="<?php the_permalink() ?>" class="nu gray">Read
              more</a></p>
        </div>
      </div> <?php
        } wp_reset_postdata();
        ?>


      <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--yellow">View All Blog
          Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/vegetables.jpeg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Locally Grown Vegetables</h2>
        <p class="t-center">Keeping our village healthy and productive</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Transportation</h2>
        <p class="t-center">All students have free unlimited bus fare.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg')?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Free Food</h2>
        <p class="t-center">Vakarau Events offers lunch plans for those in need.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

<!-- Functions -->
<?php
// function intro($name, $business) {
//   echo "<p>This is $name who runs the $business business!</p>";
// }
// intro('Mala', 'Lime');
// intro('Seri', 'Kava');
// intro('Epeli', 'Dalo');
// intro('Moses', 'Rugby');

// Arrays:

// $name = ['Mala', 'Seri', 'Epeli', 'Moses'];

// $count = 0;

// while ($count < count($name)) {
//   echo "<p> Hi my name is $name[$count]</p>";
//   $count++;
// }

// Posts

// while(have_posts()) { // Iterates through all your posts
//   the_post(); 
  ?>
<!-- <h2><a href=" -->
<?php 
  // the_permalink(); 
  ?>
<!-- "> -->
<?php 
  // the_title(); 
  ?>
</a></h2>
<?php 
  // the_content(); 
  ?>
<!-- <hr> -->
<?php
// }

// Footer

get_footer();

?>