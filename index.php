<?php get_header(); ?>

<div class="container homepage">
  <div class="row">
    <div class="col-9">
      <?php if ( have_posts() ): ?>
        <?php while( have_posts() ): ?>
          <?php the_post(); ?>
          <div class="post">
            <div class="row">
              <div class="col-4 left">
                <a href="<?php the_permalink(); ?>" class="img">
                  <?php if ( has_post_thumbnail() ): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="https://via.placeholder.com/300/333?text=No+Photo+Available" alt="">
                  <?php endif; ?>
                </a>
                <div class="cats">
                  <?php 
                    the_category( ' ' ); // function to show the categories of the post
                  ?>
                </div>
              </div>
              <div class="col-8 right">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <span><i class="fas fa-user"></i> 
                  <?php 
                    the_author_posts_link(); // the function get the author link with his name too :)
                  ?>
                </span>
                <span><i class="fas fa-comments"></i> <?php comments_popup_link( '0 Comment', '1 Comment', '% Comments', '', 'Comments Disabled' ) ?></span>
                <span><i class="fas fa-eye"></i> 3150 Watch</span>
                <div class="lead"><?php the_excerpt(); ?></div>
                <a href="<php the_permalink() ?>" class="read-more">Read More  <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

      <?php endif; ?>
      
      <div class="post-pagination row">
        <?php

        if (get_previous_posts_link()) { // chech if there is previous posts or no
          previous_posts_link( '<span class="left"><i class="fas fa-angle-double-left"></i> Prev</span>' );
        } else {
          echo '<span class="left disabled">Prev</span>';
        }

        if (get_next_posts_link()) { // chech if there is next posts or no
          next_posts_link( '<span class="right">Next <i class="fas fa-angle-double-right"></i></span>' );
        } else {
          echo '<span class="right disabled">Next</span>';
        }

        ?>
      </div>
      <?php

        // The next line is the other kind of pagination [numbering pagination] :)
        // echo numbering_pagination();

      ?>
    </div>
    <div class="col-3">
      <?php
        if (is_active_sidebar('main-sidebar')) { // check if this sidebar is active or not
          dynamic_sidebar('main-sidebar'); // call the sidebar by the ID
        }
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>