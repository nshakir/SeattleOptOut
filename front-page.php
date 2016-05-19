<?php get_header (); ?>
    <div id="content-wrapper">
    <h1>WELCOME!</h1>
    <?php bloginfo('description'); ?>
    <h2><span class="underline">Upcoming Events</span></h2>



      <article class="front-post-excerpt">
          <?php echo do_shortcode( '[event-list num_events=6 show_filterbar=false]' ); ?>
      </article>
  
    </div>
<?php get_sidebar();?>
<?php get_footer();?>
