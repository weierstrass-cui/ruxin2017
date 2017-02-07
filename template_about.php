<?php
/*
Template Name:关于我们
*/

get_header(); ?>
    <div class="aboutBanner">
      <img src="<?php bloginfo('template_url'); ?>/images/aboutBanner.jpg" />
    </div>
    <div class="aboutNav">
      <a href="javascript://">关于如心</a>
      <!-- <a href="javascript://">关于简知</a> -->
      <a href="javascript://">团队介绍</a>
      <span class="aboutNavHighlight"></span>
    </div>
    <div class="aboutInfo">
      <div class="aboutInfoBox" style="display:block;">
        <h3 class="mobTitle">关于如心</h3>
        <?php $post = get_post(54); ?>
        <?php echo $post->post_content; ?>
      </div>
      <!-- <div class="aboutInfoBox">
        <h3 class="mobTitle">关于简知</h3>
        <?php $post = get_post(56); ?>
        <?php echo $post->post_content; ?>
      </div> -->
      <div class="aboutInfoBox">
        <h3 class="mobTitle">团队介绍</h3>
        <?php $post = get_post(58); ?>
        <?php echo $post->post_content; ?>
      </div>
    </div>
    <script type="text/javascript">
      $(function(){
        var set = $('.aboutNav').find('a').eq(0),
          width = set.width() + parseInt(set.css('paddingLeft')) * 2;
        $('.aboutNavHighlight').width(width).css('left', set.offset().left);

        $('.aboutNav').find('a').bind('click', function(){
          $('.aboutInfoBox').eq($(this).index()).show().siblings().hide();
          $('.aboutNavHighlight').css('left', $(this).offset().left);
        });
      });
    </script>
<?php get_footer(); ?>
