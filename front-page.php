<?php get_header (); ?>
    <div id="content-wrapper">
    <h1>WELCOME!</h1>
    <?php bloginfo('description'); ?>
    <h2><span class="underline">Latest News</span></h2>
    <div class="cta-news">
      <article class="post-excerpt">
      <?php rewind_posts(); // stop loop one ?>
      <?php query_posts('showposts=6'); // give directions to loop two ?>
      <?php while (have_posts()) : the_post(); // start loop two ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
        <?php the_post_thumbnail('thumbnail');?></a>
        <br><?php the_time('F j, Y'); //get the time ?>
        <?php the_excerpt(); ?>
      </article>
      <?php endwhile; // end loop two ?>
<small>front-page.php</small>
    </div>
  </div>

<?php get_sidebar();?>
<?php get_footer();?>
