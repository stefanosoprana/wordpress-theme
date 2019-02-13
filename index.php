<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <h2>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
              <small><?php the_time('j F Y'); ?></small>
            </h2>
            <p><?php the_excerpt(); ?></p>
            <h3>Scritto da: <?php the_author_posts_link(); ?></h3>
            <p><?php the_category(); ?></p>
            <?php
              $postTags = wp_get_post_tags($post->ID);
             ?>

             <?php if (!empty($postTags)) {
                the_tags('Tag: ', ', ', '.');
              } ?>
          </div>
        <?php endwhile; else: ?>
          <p>Nessun articolo corrisponde ai criteri di ricerca.</p>
        <?php endif; ?>
      </div>
      <div class="col-4 my_sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
