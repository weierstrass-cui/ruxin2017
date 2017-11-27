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
          <?php $post = get_post(44); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList1.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(42); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList2.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(39); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList3.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(37); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList4.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(35); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList5.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
          <?php $post = get_post(27); ?>
          <a href="javascript://" class="serviceListBox">
            <img data-original="<?php bloginfo('template_url'); ?>/images/serviceList6.jpg" />
            <div class="serviceInfo">
              <div class="serviceInfoTitle"><h3><?php echo $post->post_title; ?></h3></div>
              <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <!-- END Wedding -->
    <img data-original="<?php bloginfo('template_url'); ?>/images/gezi.jpg" />
    <div class="pc-solution pcShow">
        <form method="post" action="#" onsubmit="return false;">
            <h3>免费请专家帮您梳理策划营销思路，精准定位年轻派市场</h3>
            <div class="pc-solution-main">
                <div class="form">
                    <ul>
                        <li class="">立即预约，请专家梳理策划思路</li>
                        <li class="require">
                            <label for="name">姓 名</label>
                            <input type="text" name="author" class="text" id="name" />
                        </li>
                        <li class="require">
                            <label for="phone">手 机</label>
                            <input type="text" name="phone" class="text" id="phone" />
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
                <div class="solutionList">
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
                    <div class="pc-solutionSlider" style="height: 182px;overflow: hidden;">
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
                    <div class="pc-solution-phone">
                        专家咨询热线<br />400-622-6975
                    </div>
                </div>
            </div>
            <div class="btns">
                <input type="hidden" name="comment_post_ID" value="1">
                <input type="hidden" name="comment_parent" value="0">
                <input type="button" class="submit" id="submit" value="提交" />
                <input type="reset" class="reset" value="重置" />
            </div>
        </form>
    </div>
<?php get_footer(); ?>
