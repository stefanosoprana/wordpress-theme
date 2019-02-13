<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="post">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; else: ?>
          <p>Articolo non trovato</p>
        <?php endif; ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
