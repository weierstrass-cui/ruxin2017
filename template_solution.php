<?php
/*
Template Name:解决方案
*/

get_header(); ?>
  <div class="mo-solution">
    <h3>免费索取策划方案</h3>
    <div class="recorde">最新申请<span><?php echo get_post_meta('1','最新人数',true); ?></span>人 累计已有<span><?php echo get_post_meta('1','累计人数',true); ?></span>位索取方案</div>
    <div class="mo-solutionSlider">
      <ul>
        <li>郭** 133****8787 5分钟前</li>
        <li>王** 134****9082 13分钟前</li>
        <li>李** 137****4988 36分钟前</li>
        <li>张** 139****6721 40分钟前</li>
        <li>黄** 136****9582 52分钟前</li>
        <li>钱** 139****4781 1小时前</li>
        <li>朱** 138****9313 1小时前</li>
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
