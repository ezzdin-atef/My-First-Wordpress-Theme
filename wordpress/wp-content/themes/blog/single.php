<?php get_header(); ?>

<div class="container singlepost">
  

  <?php if ( have_posts() ): ?>
    <?php while( have_posts() ): ?>
      <?php the_post(); ?>
      <div class="post">
            <h3><?php the_title(); ?></h3>
            <span><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></span>
            <span><i class="fas fa-comments"></i> <?php comments_popup_link( '0 Comment', '1 Comment', '% Comments', '', 'Comments Disabled' ) ?></span>
            <span><i class="fas fa-eye"></i> 3150 Watch</span>
            <div class="cats">
              Categories: 
              <?php the_category( ',' ) ?>
            </div>
            <div class="lead"><?php the_content(); ?></div>
          
        
      </div>

    <?php endwhile; ?>

  <?php endif; ?>


  <div class="author-card">
      <div class="row">

        <div class="col-2 text-center">
          <?php echo get_avatar(get_the_author_meta('ID'), '145', '', '', array('class' => 'avatar-photo')); ?>
        </div>
        <div class="col meta-info">
          <h4><?php the_author_meta('first_name') ?> <?php the_author_meta('last_name') ?></h4>
          <p class="lead">
            <?php

              if (get_the_author_meta('description')) {
                the_author_meta('description');
              } else {
                echo "There is no description";
              }
            
            ?>
          </p>
        </div>

      </div>
      
      
  </div>

  
  <div class="post-pagination row">
    <?php

    if (get_previous_post_link()) {
      previous_post_link( '%link', '<span class="left"><i class="fas fa-angle-double-left"></i> Previous Post: %title</span>' );
    } else {
      echo '<span class="left disabled">Previous Post: None</span>';
    }

    if (get_next_post_link()) {
      next_post_link( '%link', '<span class="right"><i class="fas fa-angle-double-right"></i> Next Post: %title</span>' );
    } else {
      echo '<span class="right disabled">Next Post: None</span>';
    }

    ?>
  </div>
  <?php
  
    comments_template();
    
  ?>


</div>

<?php get_footer(); ?>