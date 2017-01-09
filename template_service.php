<?php
/*
Template Name:服务体系
*/

get_header(); ?>
  <!-- Wedding -->
    <div class="serviceBanner zoomBanner">
      <div class="white l1" style="opacity:0;">
        <div class="zoomIn">
            <p>满足</p>
        </div>
      </div>
      <div class="white l2" style="opacity:0;">
        <div class="zoomIn">
            <p>并超越客户的期待</p>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(function(){
      setTimeout(function(){
          $('.zoomBanner').find('.l1').css('opacity', '1');
      }, 1000);
      setTimeout(function(){
          $('.zoomBanner').find('.l2').css('opacity', '1');
      }, 2000);
    });
    </script>
    <section class="bg-image bg-fixed bg-image-6 bg-overlay-light">
      <div class="well-3 well-3--inset-1 container container-wide">
        <h1>专业服务</h1>
        <div class="divider divider-default">校企粘性互动，品牌植入，线上线下创业策略，执行优化</div>
        <div class="servciePageList">
          <?php $post = get_post(47); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList1.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(45); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList2.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(43); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList3.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(41); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList4.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(39); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList5.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(37); ?>
          <a href="javascript://" class="serviceListBox">
            <img src="<?php bloginfo('template_url'); ?>/images/serviceList6.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- END Wedding -->
    <img src="<?php bloginfo('template_url'); ?>/images/gezi.jpg" />
<?php get_footer(); ?>
