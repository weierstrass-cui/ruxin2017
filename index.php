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
    <!-- 平台资源 -->
    <section class="bg-image bg-fixed bg-image-1 bg-overlay-light pcShow">
      <!-- <a href="#contacts" data-waypoint-to="#contacts" class="locate fa-map-marker"><span>找到我们</span></a> -->
      <div class="well-1 container container-wide">
        <h1>年均接触年轻派人群</h1>
        <div class="divider divider-default" style="font-size:36px;margin-top:2rem;">线下20000+，线上6000000+</div>
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
                      <img data-original="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" alt="<?php the_title(); ?>">
                      <span></span>
                    </div>
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
    <!-- END 平台资源-->

    <!-- 服务体系 -->
    <section class="well-2 pcShow">
      <div class="container container-wide">
        <h1>服 务 体 系</h1>
        <div class="divider divider-default white">提供优秀品牌策划、文案撰写、创意设计及全方位的活动落地执行</div>
        <div class="row text-sm-left">
          <?php 
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
                    <a href="javascript://" class="thumb">
                      <img data-original="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="278" alt="">
                      <span class="thumb__overlay" style="color:#f90;text-shadow: 5px 2px 6px rgba(0,0,0,0.8);"><?php the_title(); ?></span>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END 服务体系-->
    <section class="well-4 well-4--inset-1 pcShow">
      <div class="container container-wide">
        <h1>如 心 服 务</h1>
        <div class="row ruxinProductsBox" style="margin-top:5rem;">
            <div class="ruxinOneProduct rotateYImg" style="width:310px;margin-right:20px;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/xl.png" />
              <div class="ruxinProducts white">
                <h5 class="white">简历值得信赖和依赖的客户关系</h5>
                “尊重”客户意见<br />“第一时间”相应客户需求<br />“保质、保量、按时”客户交办的各项任务
              </div>
            </div>
            <div class="ruxinOneProduct rotateYImg" style="width:310px;margin-right:20px;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/zy.png" />
              <div class="ruxinProducts white">
                <h5 class="white">品质卓越</h5>
                创作品质“持续稳定”<br />创作品质“经常卓越”
              </div>
            </div>
            <div class="ruxinOneProduct rotateYImg" style="width:310px;margin-right:20px;height:265px;">
              <img style="width:100px;height:100px;margin-top:1rem;" data-original="<?php bloginfo('template_url'); ?>/images/cx.png" />
              <div class="ruxinProducts white">
                <h5 class="white">不断创新</h5>
                永远不断地向客户<br />提出“具有新鲜创意的解决方案”
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- 成功案例 -->
    <section class="well-3 bg-image bg-fixed bg-image-2 pcShow">
      <div class="container container-wide">
        <h1 class="white">成 功 案 例</h1>
        <div class="divider divider-light white">一对一定制服务，展现品牌最大价值，满足并超越客户的期望 </div>
        <!-- Owl Carousel -->
        <div class="row text-sm-left">
          <?php 
                $categorys = get_posts("category=21&numberposts=99");
           ?>
            <?php if( $categorys ):?>
              <?php foreach( $categorys as $index => $post ): ?>
                <?php if($index == '4'){ ?>
                    </div>
                    <div class="row text-sm-left">
                      <div class="col-sm-3">
                <?php }else{ ?>
                      <div class="col-sm-3">
                <?php } ?>
                  <div class="product">
                    <a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat=21&post='.$post->ID ?>" class="thumb demoList">
                      <img data-original="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="250" height="200" alt="">
                      <span class="demoShow" style="color:#f90;">
                        <b><?php the_title(); ?></b><br />
                        <?php echo get_post_meta($post->ID,'理念',true) ? get_post_meta($post->ID,'理念',true) : ''; ?>
                      </span>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
        <!-- END Owl Carousel -->
      </div>
    </section>
    <!-- END 成功案例-->

    <!-- 如心产品 -->
    <section class="well-4 well-4--inset-1 pcShow">
      <div class="container container-wide">
        <h1>如 心 产 品</h1>
        <div class="divider divider-default">打造多样校园文化，研究大学生点滴生活，认真了解年轻人</div>
        <div class="row ruxinProductsBox">
            <div class="ruxinOneProduct">
              <img data-original="<?php bloginfo('template_url'); ?>/images/logo_sjz.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">实兼轴--精彩不止于校园</h5>
                实兼轴公众号为大学生、年轻人提供潮流热点资讯、逗比新颖观点，引领年轻人多元价值观；同时也为年轻人提供知名企业实习、兼职、应届招聘、培训以及创业辅导等服务，帮助青年人完成人生独立第一步。
              </div>
            </div>
            <div class="ruxinOneProduct">
              <img data-original="<?php bloginfo('template_url'); ?>/images/logo_nmp.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">凝萌π--最贴近大学生的公益组织</h5>
                凝萌π致力于成为学生触手可及的高校学生择业前辅导、创新创业和职业发展的公益性组织。已在上海大学、上海师范大学、华东师范大学等高校展开系列课程和讲座，帮助大学生在就业或创业的发展过程中取得成功。
              </div>
            </div>
            <div class="ruxinOneProduct">
              <img data-original="<?php bloginfo('template_url'); ?>/images/logo_rx.jpg" />
              <div class="ruxinProducts white">
                <h5 class="white">如心--我们更懂年轻人</h5>
                如心文化研究大学生市场的公众平台--大学生研究院，调查研究大学生相关喜好、消费能力、生活方式、性格特点、适时动态等市场行为，帮助企业客户了解大学生市场。同时，第一时间展示如心文化相关营销案例、最新动态。
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- END 如心产品-->
    <section class="well-3 bg-image bg-fixed bg-image-2 friendlyLinks" style="padding-top:60px;padding-bottom:60px;">
      <div class="container container-wide">
        <h1 class="white">合 作 企 业</h1>
        <div class="gallerySlider">
          <div class="galleryMain">
            <ul>
              <?php 
                global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 4 order by ordering";
                  $hzqy=$wpdb->get_results($query);
              ?>
              <?php if( $hzqy ):?>
                <?php foreach( $hzqy as $index => $v ): ?>
                  <li style="width:100px;height:100px;margin-right:10px">
                    <a href="<?php echo $v->sl_url ? $v->sl_url : 'javascript://'; ?>" target="_blank" title="<?php echo $v->name; ?>">
                      <img alt="<?php echo $v->description; ?>" data-original="<?php echo $v->image_url;?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif ?>
            </ul>
          </div>
          <a href="javascript://" style="height:100px;line-height:100px;" class="lastScreen"></a>
          <a href="javascript://" style="height:100px;line-height:100px;" class="nextScreen"></a>
        </div>
      </div>
      <script type="text/javascript">
        $(function(){
          $('.galleryMain').each(function(){
            var _this = $(this), count = _this.find('li').length;
            _this.find('ul').width( count * 110);
            if( (count * 110) > _this.width() ){
              _this.siblings('.lastScreen').bind('click', function(){
                if( _this.hasClass('isMoving') ){
                  return false;
                }
                _this.addClass('isMoving');
                var ul = _this.find('ul');
                ul.find('li:last').prependTo(ul);
                ul.css({'left': '-110px'});
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
                ul.animate({'left': '-110px'}, function(){
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
    <div class="pc-solution pcShow">
      <form method="post" action="#" onsubmit="return false;">
          <h3>免费请专家帮您定制策划营销方案，精准定位校园市场</h3>
          <div class="pc-solution-main">
              <div class="form">
                  <ul>
                      <li class="">立即预约，请专家免费提供方案</li>
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
                  <div class="recorde">最新申请<span><?php echo get_post_meta('1','最新人数',true); ?></span>人 累计已有<span><?php echo get_post_meta('1','累计人数',true); ?></span>位索取方案</div>
                  <div class="pc-solutionSlider" style="height: 182px;overflow: hidden;">
                    <ul>
                      <li>郭** 133****8787 5分钟前</li>
                      <li>宋** 135****7982 6分钟前</li>
                      <li>王** 134****9082 13分钟前</li>
                      <li>李** 137****4988 36分钟前</li>
                      <li>张** 139****6721 40分钟前</li>
                      <li>黄** 136****9582 52分钟前</li>
                      <li>钱** 139****4781 1小时前</li>
                      <li>朱** 138****9313 1小时前</li>
                      <li>马** 132****4482 1小时前</li>
                      <li>沈** 137****9121 2小时前</li>
                      <li>张** 130****9303 2小时前</li>
                      <li>毛** 136****9654 3小时前</li>
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
