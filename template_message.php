<?php
/*
Template Name:留言
*/
?>
<?php global $wpdb; $query = "SELECT * as count FROM ".$wpdb->prefix."comments where comment_post_ID = 1 order by comment_date desc;";
      $firstrow = $wpdb->get_results($query);
  ?>
  <ul>
  <?php  foreach($firstrow as $v){ ?>
    <li>
      <?php echo $v->comment_ID; ?> - 
      <?php echo $v->comment_content; ?> - 
      <?php echo $v->comment_date; ?> - 
    </li>
  <?php } ?>
  </ul>
<?php ?>
