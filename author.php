<?php get_header(); ?>
<div class="container author-page">
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
        <h4><?php the_author_meta('first_name') ?> <?php the_author_meta('last_name') ?></h4>
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

  <div class="counters">
    <div class="row">
      <div class="col card">
        Posts
        <span>
          <?php 
            echo count_user_posts(get_the_author_meta('ID'));  // Get the number of the posts for the user
          ?>
        </span>
      </div>
      <div class="col card">
        Comments
        <span>
          <?php
            echo get_comments(array(
              'user_id' => get_the_author_meta('ID'),
              'count' => true
            ))
          ?>
        </span>
      </div>
      <div class="col card">
        Total Posts View
        <span>0</span>
      </div>
      <div class="col card">
        Testing
        <span>0</span>
      </div>
    </div>
  </div>
  <div class="homepage">
    <?php

      $author_posts_args = array(
        'author' => get_the_author_meta('ID'),
        'posts_per_page' => -1
      );
      $author_posts = new WP_Query($author_posts_args);

    ?>
    <?php if ( $author_posts->have_posts() ): ?>
      <?php while( $author_posts->have_posts() ): ?>
        <?php $author_posts->the_post(); ?>
        <div class="post">
          <div class="row">
            <div class="col-3 left">
              <div class="cats">
                <?php 
                  the_category( ' ' ); // function to show the categories of the post
                ?>
              </div>
              <a href="<?php the_permalink(); ?>">
                <?php if ( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="https://via.placeholder.com/300/333?text=No+Photo+Available" alt="">
                <?php endif; ?>
              </a>
            </div>
            <div class="col-9 right">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>  
              <span><i class="fas fa-comments"></i> <?php comments_popup_link( '0 Comment', '1 Comment', '% Comments', '', 'Comments Disabled' ) ?></span>
              <span><i class="fas fa-eye"></i> 3150 Watch</span>
              <div class="lead"><?php the_excerpt(); ?></div>
            </div>
          </div>
        </div>

      <?php endwhile; ?>

    <?php endif; ?>
    <?php
      wp_reset_postdata(); // Reset loop query
    ?>
  </div>

  <div class="list-group mt-5 mb-3">

  <?php
  
     $comments =  get_comments(array(
      'user_id' => get_the_author_meta('ID'),
      'number' => 6,
      'post_type' => 'post',
      'post_status' => 'publish',
      'status' => 'approve'
    ));

  ?>
  <h3 class="text-center"><i class="fas fa-comments"></i> Latest Comments</h3>
    <?php
      foreach($comments as $comment):
    ?>
    <li href="#" class="list-group-item">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?php echo get_the_title($comment->comment_post_ID); ?></h5>
        <small><?php echo mysql2date('l, F j, Y', $comment->comment_date) ?></small>
      </div>
      <p class="mb-1"><?php echo $comment->comment_content; ?></small>
    </li>
    <?php
      endforeach;
    ?>
  </div>
  
</div>




<?php get_footer(); ?>