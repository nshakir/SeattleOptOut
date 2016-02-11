<?php get_header (); ?>
    <div id="content-wrapper">
    <h1>WELCOME!</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
      <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>

    <h2><span class="underline">Latest News</span></h2>
    <div class="cta-news">
      <img src="optoutbus.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
    <div class="cta-news">
      <img src="motherjones.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
    <div class="cta-news">
      <img src="donttouch.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
    <div class="cta-news">
      <img src="scrap.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
    <div class="cta-news">
      <img src="lilian.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
    <div class="cta-news">
      <img src="donttouch.png" height="200">
      <h4>Jan 26, 2015</h4>
      orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus vulputate tellus et facilisis.
    </div>
<small>index.php</small>
    </div>

<?php get_sidebar();?>
<?php get_footer();?>
