<?php get_header (); ?>
    <div id="content-wrapper">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <article class="post-excerpt">
      <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
      <small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); ?> in <?php the_category(', '); //get the category ?></small><br>
      <a href="<?php the_permalink(); //link to single page or posting ?>">
      <?php the_post_thumbnail('thumbnail'); ?></a>
      <?php the_excerpt(''); // get page or posting written content ?>
    </article>
    <?php endwhile; endif; // end the loop ?>


<small>index.php</small>
    </div>

<?php get_sidebar();?>
<?php get_footer();?>
