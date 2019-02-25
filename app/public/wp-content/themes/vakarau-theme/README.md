  # Notes on Trasitioning from HTML to WordPress:

  ## Library Imports and Fonts:

  ### HTML (index.html):
  ```<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet">```
  
  ```<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">```

  ### WordPress (functions.php):

  ```wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');```
  
  ```wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');```

  ## Importing Images:

  ### HTML(inside body of index.html):
  `<div class="hero-slider__slide" style="background-image: url(images/bus.jpg);">`
  ### WordPress(inside HTML body section of index.php):
  `<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg')?>);">`

  ## Importing JS

  ### HTML(botton of index.html):
  `<script src="js/scripts-bundled.js"></script>`
  ### WordPress(functions.php):
  `wp_enqueue_script('main-university-js',get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);`


  ## How to Force the Browser to reload all content each time (no caching) -- ONLY FOR DEV:
  Adjust the third argument in ``get_theme_file_uri` above to generate a unique number each time using `microtime()` e.g.:

 `wp_enqueue_script('main-university-js',get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);`






