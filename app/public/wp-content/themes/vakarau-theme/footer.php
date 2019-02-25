<footer class="site-footer">

  <div class="site-footer__inner container container--narrow">

    <div class="group">

      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color"><a
            href="<?php echo site_url('/') ?>"><strong>Vakarua</strong>Industries</a>
        </h1>
        <p><a class="site-footer__link" href="#">555.555.5555</a></p>
      </div>
      <div class="site-footer__col-two-three-group">
        <div class="site-footer__col-two">
          <h3 class="headline headline--small">Explore</h3>
          <nav class="nav-list">
            <!-- HardCoded ul-li menu.  For an example of a Word Press generated menu see the next nav-list -->
            <ul>
              <li
                <?php 
                $current_page = 0;
                if (is_page('about-us') or wp_get_post_parent_id($current_page)) echo 'class="current-menu-item"'
                ?>>
                <a href="<?php echo site_url('/about-us')?>">About Us</a></li>
              <li><a href="<?php echo site_url('/programs')?>">Programs</a></li>
              <li><a href="<?php echo site_url('/events')?>">Events</a></li>
              <li><a href="<?php echo site_url('/campuses')?>">Campuses</a></li>
            </ul>
          </nav>
        </div>

        <div class="site-footer__col-three">
          <h3 class="headline headline--small">Learn</h3>
          <nav class="nav-list">
            <!-- HardCoded ul-li menu commented out in leiu of word-press admin generated menu below: -->
            <!-- <ul>
              <li><a href="#">Legal</a></li>
              <li><a href="<?php echo site_url('/privacy-policy')?>">Privacy</a></li>
              <li><a href="#">Careers</a></li>
            </ul> -->
            <?php 
              wp_nav_menu(array(
                'theme_location' => 'footerLocationTwo'
              ))
            ?>
          </nav>
        </div>
      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Connect With Us</h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>

  </div>
</footer>
<?php wp_footer();?>
</body>

</html>