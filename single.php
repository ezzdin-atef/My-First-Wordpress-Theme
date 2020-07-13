<?php get_header(); ?>

<div class="container singlepost">
  

  <?php if ( have_posts() ): ?>
    <?php while( have_posts() ): ?>
      <?php the_post(); ?>
      <div class="post">
        <h3><?php the_title(); ?></h3>
        <span><i class="fas fa-folder-open"></i> Categories: <?php the_category( ',' ) ?></span>
        <span><i class="fas fa-eye"></i> 3150 Watch</span>

        <div><?php the_content(); ?></div>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>


  <div class="author-card">
      <div class="row">

        <div class="col-2 text-center">
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
          <?php 

            /*
             * get_avatar() function to return the author avatar
             * get_the_author_meta() function to retrun the ID of the author who wrote the post
             * 
            */

            echo get_avatar(get_the_author_meta('ID'), '145', '', '', array(
              'class' => 'avatar-photo'
            ));
            
          ?>
          </a>
        </div>
        <div class="col meta-info">
          <h4><?php the_author_meta('first_name') ?> <?php the_author_meta('last_name') ?> [<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author_meta('nickname') ?></a>]</h4>
          <p class="lead">
            <?php

              if (get_the_author_meta('description')) { // check if there is description for the author or no
                the_author_meta('description');
              } else {
                echo "There is no description";
              }
            
            ?>
          </p>
        </div>

      </div>
      
      
  </div>
  <?php
    $cats = array();
    foreach(get_the_category(get_the_ID()) as $cat) {
      array_push($cats, $cat->term_id);
    }
    
    $related_posts_args = array(
      'post__not_in' => array(get_the_ID()), // get_queried_object_id() function is also function will return the post ID [Elzero used it] but you should write array(get_queried_object_id())
      'category__in' => $cats, // wp_get_post_categories() function is used to return the categories ID directily
      'posts_per_page' => 5,
      'orderby' => 'rand'
    );

    $related_posts = new WP_Query($related_posts_args);

  ?>
  
  <?php if ($related_posts->have_posts()): ?>
    <h4 class="related-heading">Related Posts:</h4>
    <?php while($related_posts->have_posts()): ?>
      <?php $related_posts->the_post(); ?>
        <div class="related-link"><a href="<?php the_permalink() ?>" target="_blank"><i class="fas fa-caret-right"></i> <?php the_title(); ?></a></div>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php wp_reset_postdata(); ?>
  
  
  <div class="post-pagination row">
    <?php

    // pagination to get the previous post and the next one

    if (get_previous_post_link()) {
      previous_post_link( '%link', '<span class="left"><i class="fas fa-angle-double-left"></i> Previous Post: %title</span>' );
    } else {
      echo '<span class="left disabled">Previous Post: None</span>';
    }

    if (get_next_post_link()) {
      next_post_link( '%link', '<span class="right">Next Post: %title <i class="fas fa-angle-double-right"></i></span>' );
    } else {
      echo '<span class="right disabled">Next Post: None</span>';
    }

    ?>
  </div>
  <?php
  
    comments_template(); // call the comments.php file to show the comment section :)
    
  ?>


</div>

<?php get_footer(); ?>