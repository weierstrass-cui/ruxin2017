<?php
/*
Template Name:留言
*/
?>
<?php global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."comments where comment_post_ID = 1 order by comment_date desc;";
      $firstrow = $wpdb->get_results($query);
  ?>
  <table border="1">
  <?php  foreach($firstrow as $v){ ?>
    <tr>
      <td style="width:25%;">
        <?php echo $v->comment_date; ?>
      </td>
      <td style="width:75%;">
      <?php echo $v->comment_content; ?>
      </td>
    </tr>
  <?php } ?>
  </table>
<?php ?>
