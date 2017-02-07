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
                    <div class="quoteImgBox">
                      <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" alt="<?php the_title(); ?>">
                      <span></span>
                    </div>
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
          <?php  // $categorys = getchild(3);
                $categorys = get_posts("category=3&numberposts=6");
           ?>
            <?php if( $categorys ):?>
              <?php foreach( $categorys as $index => $post ): ?>
                <?php if($index == '3'){ ?>
                    </div>
                    <div class="row text-sm-left">
                      <div class="col-sm-4">
                <?php }else{ ?>
                      <div class="col-sm-4">
                <?php } ?>
                  <div class="product">
                    <!-- <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="thumb">
                      <?php // the_post_thumbnail(); ?>
                      <img src="<?php echo $post->category_description ?>" width="370" height="278" alt="">
                      <span class="thumb__overlay"><?php echo $post->cat_name ?></span>
                    </a> -->
                    <a href="javascript://" class="thumb">
                      <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="278" alt="">
                      <span class="thumb__overlay"><?php the_title(); ?></span>
                    </a>
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
        <div class="row text-sm-left successListBox">
          <?php $categorys = getchild(4); ?>
            <?php if( $categorys ):?>
              <?php foreach( $categorys as $index => $cate ): ?>
                <?php if($index == '4'){ ?>
                    </div>
                    <div class="row text-sm-left">
                      <div class="col-sm-3">
                <?php }else{ ?>
                      <div class="col-sm-3">
                <?php } ?>
                  <?php $posts = get_posts("category=".$cate->term_id."&numberposts=1"); ?>
                  <a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$cate->term_id ?>" class="thumb successList">
                    <?php // the_post_thumbnail(); ?>
                    <img src="<?php echo $cate->category_description ?>" style="width:270px;height:270px;" alt="<?php echo $cate->cat_name ?>" />
                    <span class="thumb__overlay" style="color:#000;"><?php echo $cate->cat_name ?></a></span>
                  </a>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
        <!-- END Owl Carousel -->
      </div>
    </section>
    <!-- END Testimonials-->

    <!-- Contacts -->
    <section class="well-4 well-4--inset-1">
      <div class="container container-wide">
        <h1>如 心 产 品</h1>
        <div class="divider divider-default">一对一定制服务，展现品牌最大价值，满足并超越客户的期望 </div>
        <div class="row ruxinProductsBox">
            <div class="ruxinOneProduct">
              <img src="<?php bloginfo('template_url'); ?>/images/logo_sjz.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">实兼轴--精彩不止于校园</h5>
                实兼轴公众号为大学生、年轻人提供潮流热点资讯、逗比新颖观点，引领年轻人多元价值观；同时也为年轻人提供知名企业实习、兼职、应届招聘、培训以及创业辅导等服务，帮助青年人完成人生独立第一步。
              </div>
            </div>
            <div class="ruxinOneProduct">
              <img src="<?php bloginfo('template_url'); ?>/images/logo_nmp.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">凝萌π--最贴近大学生的公益组织</h5>
                凝萌π致力于成为学生触手可及的高校学生择业前辅导、创新创业和职业发展的公益性组织。已在上海大学、上海师范大学、华东师范大学等高校展开系列课程和讲座，帮助大学生在就业或创业的发展过程中取得成功。
              </div>
            </div>
            <div class="ruxinOneProduct">
              <img src="<?php bloginfo('template_url'); ?>/images/logo_rx.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">如心--比你更懂年轻人</h5>
                如心文化研究大学生市场的公众平台--大学生研究院，调查研究大学生相关喜好、消费能力、生活方式、性格特点、适时动态等市场行为，帮助企业客户了解大学生市场。同时，第一时间展示如心文化相关营销案例、最新动态。
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- END Contacts-->

    <section class="well-3 bg-image bg-fixed bg-image-2 friendlyLinks">
      <div class="container container-wide">
        <h1 class="white">校 方 资 源</h1>
        <div class="gallerySlider">
          <div class="galleryMain">
            <ul>
              <?php 
                global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 3";
                  $xfzy=$wpdb->get_results($query);
              ?>
              <?php if( $xfzy ):?>
                <?php foreach( $xfzy as $index => $v ): ?>
                  <li>
                    <a href="<?php echo $v->sl_url ? $v->sl_url : 'javascript://'; ?>" target="_blank" title="<?php echo $v->name; ?>">
                      <img alt="<?php echo $v->description; ?>" src="<?php echo $v->image_url;?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif ?>
            </ul>
          </div>
          <a href="javascript://" class="lastScreen"></a>
          <a href="javascript://" class="nextScreen"></a>
        </div>
        <h1 class="white">合 作 企 业</h1>
        <div class="gallerySlider">
          <div class="galleryMain">
            <ul>
              <?php 
                global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 4";
                  $hzqy=$wpdb->get_results($query);
              ?>
              <?php if( $hzqy ):?>
                <?php foreach( $hzqy as $index => $v ): ?>
                  <li>
                    <a href="<?php echo $v->sl_url ? $v->sl_url : 'javascript://'; ?>" target="_blank" title="<?php echo $v->name; ?>">
                      <img alt="<?php echo $v->description; ?>" src="<?php echo $v->image_url;?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif ?>
            </ul>
          </div>
          <a href="javascript://" class="lastScreen"></a>
          <a href="javascript://" class="nextScreen"></a>
        </div>
      </div>
      <script type="text/javascript">
        $(function(){
          $('.galleryMain').each(function(){
            var _this = $(this), count = _this.find('li').length;
            _this.find('ul').width( count * 250);
            if( (count * 250) > _this.width() ){
              _this.siblings('.lastScreen').bind('click', function(){
                if( _this.hasClass('isMoving') ){
                  return false;
                }
                _this.addClass('isMoving');
                var ul = _this.find('ul');
                ul.find('li:last').prependTo(ul);
                ul.css({'left': '-250px'});
                ul.animate({'left': '0px'}, function(){
                  _this.removeClass('isMoving');
                });
              }).show();
              _this.siblings('.nextScreen').bind('click', function(){
                if( _this.hasClass('isMoving') ){
                  return false;
                }
                _this.addClass('isMoving');
                var ul = _this.find('ul');
                ul.animate({'left': '-250px'}, function(){
                  ul.find('li:first').appendTo(ul);
                  ul.css({'left': '0px'});
                  _this.removeClass('isMoving');
                });
              }).show();
            }
          });
        });
      </script>
    </section>
<?php get_footer(); ?>
