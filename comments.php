<?php

  /**
   * to make the author have DISTINCT comments style
   * you can use the class [bypostauthor] and style it with css
   * 
   */

  if (comments_open()) { // Check whither the comments are enables or not
    echo "<h3 class='comments-heading'>";
      comments_number(); // get the comments number
    echo "</h3>";
    echo '<ul class="comment-section">';
      /* 
       * wp_list_comments() function get all the comments and display them in its own way
       * to show them as you want you can create your own which you can use filters
       * 
      */
      wp_list_comments( array(
        'max_depth' => 2,
        'avatar_size' => 50
      ) );
    echo '</ul>';

    /* 
      * comment_form() function get the comment form to add new comments and display them in its own way
      * to show them as you want you can create your own which you can use filters
      * 
    */
    comment_form( array(
      'comment_notes_before' => ''
    ) );

  } else {
    echo "Sorry, Comments are disabled :(";
  }



?>