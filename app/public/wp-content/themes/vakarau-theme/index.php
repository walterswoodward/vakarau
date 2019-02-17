<?php
get_header();

// Heading

?> <h1><?php bloginfo('name')?></h1>
<h2><?php bloginfo('description')?></h2>
<?php

// Functions

function intro($name, $business) {
  echo "<p>This is $name who runs the $business business!</p>";
}
intro('Mala', 'Lime');
intro('Seri', 'Kava');
intro('Epeli', 'Dalo');
intro('Moses', 'Rugby');

// Arrays:

$name = ['Mala', 'Seri', 'Epeli', 'Moses'];

$count = 0;

while ($count < count($name)) {
  echo "<p> Hi my name is $name[$count]</p>";
  $count++;
}

// Posts

while(have_posts()) { // Iterates through all your posts
  the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <hr>
  <?php
}

// Footer

get_footer();

?>





