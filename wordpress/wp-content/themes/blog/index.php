<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-9">
      <?php if ( have_posts() ): ?>
        <?php while( have_posts() ): ?>
          <?php the_post(); ?>
          <div class="post">
            <div class="row">
              <div class="col-4 left">
                <div class="cats">
                  <?php the_category( ' ' ) ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                  <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="https://via.placeholder.com/300/333?text=No+Photo+Available" alt="">
                  <?php endif; ?>
                </a>
              </div>
              <div class="col-8 right">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
                <span><i class="fas fa-comments"></i> <?php comments_popup_link( '0 Comment', '1 Comment', '% Comments', '', 'Comments Disabled' ) ?></span>
                <span><i class="fas fa-eye"></i> 3150 Watch</span>
                <div class="lead"><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

      <?php endif; ?>
      
      <div class="post-pagination row">
      <?php

      if (get_previous_posts_link()) {
        previous_posts_link( '<span class="left"><i class="fas fa-angle-double-left"></i> Prev</span>' );
      } else {
        echo '<span class="left disabled">Prev</span>';
      }

      if (get_next_posts_link()) {
        next_posts_link( '<span class="right">Next <i class="fas fa-angle-double-right"></i></span>' );
      } else {
        echo '<span class="right disabled">Next</span>';
      }

      ?>

      </div>
    </div>
    <div class="col-3"></div>
  </div>
</div>

<?php get_footer(); ?>