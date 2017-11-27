<?php
/*
Template Name:解决方案
*/

get_header(); ?>
  <div class="mo-solution">
    <h3>免费索取策划方案</h3>
    <div class="recorde">
      <?php  global $wpdb; $query = "SELECT count(*) as count FROM ".$wpdb->prefix."comments where comment_post_ID = 1 and comment_approved = 1 and comment_date > '".date("Y-m-d H:i:s",strtotime("-4 week"))."';";
          $firstrow = $wpdb->get_results($query);
      ?>
      最新申请<span><?php echo $firstrow['0']->count; ?></span>人 

      <?php  global $wpdb; $query = "SELECT count(*) as count FROM ".$wpdb->prefix."comments where comment_post_ID = 1 and comment_approved = 1;";
          $firstrow = $wpdb->get_results($query);
      ?>
      累计已有<span><?php echo $firstrow['0']->count; ?></span>位索取方案
    </div>
    <div class="mo-solutionSlider">
      <ul>
        <li>王** 132****8787 5分钟前</li>
        <li>赵** 135****7982 6分钟前</li>
        <li>李** 132****9082 13分钟前</li>
        <li>汪** 136****4988 36分钟前</li>
        <li>裘** 137****6721 40分钟前</li>
        <li>宋** 134****9582 52分钟前</li>
        <li>钱** 131****4781 1小时前</li>
        <li>马** 139****9313 1小时前</li>
        <li>叶** 133****4482 1小时前</li>
        <li>申** 134****9121 2小时前</li>
        <li>杜** 131****9303 2小时前</li>
        <li>张** 137****9654 3小时前</li>
        <li>水** 134****9582 3小时前</li>
        <li>戴** 136****4781 3小时前</li>
        <li>许** 131****9343 3小时前</li>
        <li>徐** 131****4422 4小时前</li>
        <li>崔** 133****9111 4小时前</li>
        <li>孔** 134****9353 4小时前</li>
        <li>张** 130****9657 4小时前</li>
        <li>宋** 133****9581 5小时前</li>
        <li>钱** 134****4786 7小时前</li>
        <li>马** 135****9312 7小时前</li>
        <li>叶** 133****4439 7小时前</li>
        <li>申** 137****9149 2天前</li>
        <li>唐** 132****9302 2天前</li>
        <li>于** 131****96764 2天前</li>
        <li>宋** 138****9391 2天前</li>
        <li>张** 137****4476 2天前</li>
        <li>张** 135****9192 3天前</li>
        <li>李** 135****4194 3天前</li>
        <li>王** 131****9403 3天前</li>
        <li>马** 132****9201 3天前</li>
        <li>张** 138****9188 3天前</li>
      </ul>
    </div>
    <form method="post" action="#" onsubmit="return false;">
      <div class="form">
          <ul>
            <li class="require">
              <label for="name">姓 名</label>
              <input type="text" name="author" class="text" id="name" />
            </li>
            <li class="require">
              <label for="phone">手 机</label>
              <input type="num" name="phone" class="text" id="phone" />
            </li>
            <li class="require">
              <label for="company">公 司</label>
              <input type="text" name="company" class="text" id="company" />
            </li>
            <li>
              <label>备 注</label>
              <textarea name="message"></textarea>
            </li>
          </ul>
      </div>
      <div class="btns">
        <input type="hidden" name="comment_post_ID" value="1">
        <input type="hidden" name="comment_parent" value="0">
        <input type="button" class="submit" id="submit" value="提交" />
        <input type="reset" class="reset" value="重置" />
      </div>
    </form>
    <script type="text/javascript">
      $(function(){
        setInterval(function(){
          var ul = $('.mo-solutionSlider').find('ul');
          ul.animate({'marginTop': '-30px'}, function(){
            ul.find('li:first').appendTo(ul);
            ul.css({'marginTop': 0});
          });
        }, 3000);
      });
    </script>
  </div>
<?php get_footer(); ?>
