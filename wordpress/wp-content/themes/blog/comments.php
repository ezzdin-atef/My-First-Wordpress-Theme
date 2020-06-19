<?php

  if (comments_open()) { // Check whither the comments are enables or not
    echo "<h3 class='comments-heading'>";
      comments_number();
    echo "</h3>";
    echo '<ul class="comment-section">';
      wp_list_comments( array(
        'max_depth' => 2,
        'avatar_size' => 50,

      ) );
    echo '</ul>';

    comment_form( array(
      'comment_notes_before' => ''
    ) );

  } else {
    echo "Sorry, Comments are disabled :(";
  }



?>