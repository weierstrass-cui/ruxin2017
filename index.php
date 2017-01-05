<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage 如心
 * @since 如心2017
 */

get_header(); ?>
	<!-- Welcome -->
    <section class="bg-image bg-fixed bg-image-1 bg-overlay-light">
      <!-- <a href="#contacts" data-waypoint-to="#contacts" class="locate fa-map-marker"><span>找到我们</span></a> -->
      <div class="well-1 container container-wide">
        <h1>平 台 资 源</h1>
        <div class="divider divider-default">全面渗透大学生市场、多维度传播、全方位曝光，实现强力转化</div>
        <!-- Owl Carousel -->
        <div class="owl-carousel">
          <?php $posts = get_posts("category=2&numberposts=5"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="owl-item">
                  <!-- Blockquote -->
                  <blockquote class="quote">
                    <!-- <p class="cite">Male from United States</p> -->
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" style="width:150px;height:150px;" alt="<?php the_title(); ?>">
                    <?php // the_post_thumbnail(); ?>
                    <h5 class="cite"><?php the_title(); ?></h5>
                    <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                    <!-- <a href="#" class="btn btn-sm btn-danger">View More</a> -->
                  </blockquote>
                  <!-- END Blockquote -->
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Welcome-->

    <!-- Features -->
    <section class="well-2">
      <div class="container container-wide">
        <h1>服 务 体 系</h1>
        <div class="divider divider-default white">提供优秀品牌策划、文案撰写、创意设计及全方位的活动落地执行</div>
        <div class="row text-sm-left">
          <?php $posts = get_posts("category=3&numberposts=6"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <?php if($index == '3'){ ?>
                    </div>
                    <div class="row text-sm-left">
                      <div class="col-sm-4">
                <?php }else{ ?>
                      <div class="col-sm-4">
                <?php } ?>
                  <div class="product">
                    <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="thumb">
                      <?php // the_post_thumbnail(); ?>
                      <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="278" alt="">
                      <span class="thumb__overlay"><?php the_title(); ?></a></span>
                    </a>
                    <!-- <h5><a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo get_post_meta($post->ID,'简介',true); ?></p> -->
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Features-->

    <!-- Testimonials -->
    <section class="well-3 bg-image bg-fixed bg-image-2">
      <div class="container container-wide">
        <h1 class="white">成 功 案 例</h1>
        <div class="divider divider-light white">一对一定制服务，展现品牌最大价值，满足并超越客户的期望 </div>
        <!-- Owl Carousel -->
        <div class="owl-carousel">
          <?php $posts = get_posts("category=3&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="owl-item">
                  <!-- Blockquote -->
                  <blockquote class="quote">
                    <h5 class="cite"><?php the_title(); ?></h5>
                    <!-- <p class="cite">Male from United States</p> -->
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="265" height="265" alt="">
                    <?php // the_post_thumbnail(); ?>
                    <p class="inset-1"><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                    <!-- <a href="#" class="btn btn-sm btn-danger">View More</a> -->
                  </blockquote>
                  <!-- END Blockquote -->
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
        <!-- END Owl Carousel -->
      </div>
    </section>
    <!-- END Testimonials-->

    <!-- Services -->
    <section class="well-4">
      <div class="container container-wide">
        <h1>服 务 体 系 介 绍</h1>
        <div class="divider divider-default"></div>
        <div class="row offset-1">
          <div class="col-sm-6 text-sm-right">
            <h5><a href="<?php bloginfo('home'); ?>/service/">全球展览展示</a></h5>
            <p>骁懿为客户提供从展会信息咨询、展会推介、设计策划、生产制作、现场搭建、现场维护、展台拆卸和运输，展前、展中、展后全程贴心服务
<br />大型博览会主场，高端展台设计与工程；
<br />政府形象，品牌企业形象，展示展厅策划与设计；
<br />大型商业空间规划和展示设计；
<br />大型舞台和演出活动规划和设计；</p>
            <h5><a href="<?php bloginfo('home'); ?>/service/">全球公关活动策划和执行</a></h5>
            <p class="inset-2">独特的策划创意风格、国际化的创新设计理念、全球化的专业搭建平台，骁懿为您提供公关活动、会展活动、产品发布、产品推广、新闻发布会、企业年会、节日庆典等多类型的线下推广营销服务。</p>
          </div>
          <div class="col-sm-offset-1 col-sm-5 text-sm-left">
            <!-- Marked List -->
            <ul class="marked-list">
              <li><a href="<?php bloginfo('home'); ?>/service/">产品服务： 策划、创意、设计、施工、运营一体化</a></li>
              <li><a href="<?php bloginfo('home'); ?>/service/">品牌打造</a></li>
              <li><a href="<?php bloginfo('home'); ?>/service/">品牌营销</a></li>
              <li><a href="<?php bloginfo('home'); ?>/service/">品牌传播</a></li>
              <li><a href="<?php bloginfo('home'); ?>/service/">品牌管理</a></li>
              <li><a href="<?php bloginfo('home'); ?>/service/">视觉创意</a></li>
            </ul>
            <!-- END Marked List -->
          </div>
        </div>
      </div>
    </section>
    <!-- END Services-->

    <!-- Google Map -->
    <div id="contacts" class="map">
      <div id="google-map" class="map_model"></div>
    </div>
    <!-- END Google Map -->

    <!-- Contacts -->
    <section class="well-4 well-4--inset-1">
      <div class="container container-wide">
        <h1>联 系 我 们</h1>
        <div class="divider divider-default"></div>
        <form class='rd-mailform' method="post" action="#" onsubmit="return false;">
          <!-- END RD Mailform Type -->
          <div class="form-group">
            <label class="form-label" data-add-placeholder for="mailform-input-name">姓名</label>
            <input id="mailform-input-name" type="text" name="author" data-constraints="@NotEmpty"/>
          </div>

          <div class="form-group">
            <label class="form-label" data-add-placeholder for="mailform-input-phone">电话</label>
            <input id="mailform-input-phone" type="text" name="phone" data-constraints="@Phone"/>
          </div>

          <div class="form-group textarea">
            <label class="form-label" data-add-placeholder for="mailform-input-textarea">咨询 / 留言</label>
            <textarea id="mailform-input-textarea" name="message" data-constraints="@NotEmpty"></textarea>
          </div>
          <input class="form-control" type="hidden" name="comment_post_ID" value="1">
          <input class="form-control" type="hidden" name="comment_parent" value="0">

          <div class="form-group btn-wr">
            <button class="btn btn-sm btn-sm--mod btn-danger" id="submit" type="submit">发送给我们</button>
            <div class="mfInfo"></div>
          </div>
        </form>
      </div>
    </section>
    <!-- END Contacts-->

<?php get_footer(); ?>
