<?php get_header (); ?>
    <div id="content-wrapper">
    <h1>WELCOME!</h1>
    <?php bloginfo('description'); ?>
    <h2><span class="underline">Latest News</span></h2>

      <article class="front-post-excerpt">
      <?php rewind_posts(); // stop loop one ?>
      <?php query_posts('showposts=6'); // give directions to loop two ?>
      <?php while (have_posts()) : the_post(); // start loop two ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?>
        <?php the_title(); ?></a>
        <h3><br><?php the_time('F j, Y'); //get the time ?></h3>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; // end loop two ?><p>
<small>front-page.php</small>
    </div>
<?php get_sidebar();?>
<?php get_footer();?>
