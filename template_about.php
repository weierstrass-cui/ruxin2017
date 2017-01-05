<?php
/*
Template Name:关于我们
*/

get_header(); ?>
  <!-- About us -->
    <section class="bg-image bg-fixed bg-image-4 bg-overlay-light">
      <div class="well-3 well-3--inset-1 container container-wide">
        <h1>骁懿展览</h1>
        <div class="divider divider-default"></div>
        <p class="lead inset-3">上海骁懿展览展示有限公司，创建于2003年，历经十余载，不断创新，以设计为主导、以数字科技为依托，秉承完美创意设计、优质施工质量、完善后期服务，多年来赢得广大客户信赖和大力支持。</p>
        <p class="lead inset-3">骁懿专业从事商业展览展厅、专卖店、企业馆、博物馆、科技馆、博览会等工程项目的创意、策划、设计、施工一体化，提供企业VI导视系统市场分析及营销等业务服务。公司凭借丰富的策划设计经验、精湛的工程技术、专业的管理模式，已成为具有国际视野、前瞻性眼光和先进理念的专业性展览展示公司。</p>
      </div>
    </section>
    <!-- END About us-->

    <!-- Our team -->
    <section class="well-5">
      <div class="container container-wide">
        <h1>我们的团队</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <?php $posts = get_posts("category=3&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="col-sm-4">
                  <?php // the_post_thumbnail(); ?>
                  <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="369" height="358" alt="">
                  <h5><a href="javascript://"><?php the_title(); ?></a></h5>
                  <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Our team-->

    <!-- Guest information -->
    <section class="well-6 bg-image bg-fixed bg-image-5">
      <div class="container container-wide">
        <h1 class="h1--mod white">合作伙伴</h1>
        <p class="inset-1 white">骁懿与您携手共赢骁懿展示与各政府、各企事业单位、世界五百强企业及中国知名品牌通力合作，以国际化设计视角，打造独具特色的展示厅，凸显地域文化、企业文化、企业品牌实力。</p>
        <a href="#" class="btn btn-sm btn-danger">了解更多 ！</a>
      </div>
    </section>
    <!-- END Guest information-->

    <!-- Choose us -->
    <section class="well-5 well-5--inset-1">
      <div class="container container-wide">
        <h1>我们的优势</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-group"></div>
              </div>
              <div class="media-body inset-4">
                <h5>为客户度身打造最具特色的展示馆</h5>
                <!-- <h5><a href="#">Family friendly</a></h5>
                <p>Each of our properties feature a number of three or four guest occupancy rooms, all ideal for
                  families looking for an affordable city break when travelling with little ones.</p> -->
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-business"></div>
              </div>
              <div class="media-body inset-4">
                <h5>以先进的设计理念,形成一套完善的解决方案</h5>
                <!-- <h5><a href="#">Rooms & suites</a></h5>
                <p>Each room at our hotel is decorated with great taste. Designers’ solutions will impress you greatly.
                  Each and every trifle is here for your comfort.</p> -->
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-local_activity"></div>
              </div>
              <div class="media-body inset-4">
                <h5>为客户提供前期项目咨询、概念方案设计、深化设计、施工图设计、造价预算、平面及数字内容制作</h5>
                <!-- <h5><a href="#">Awards & accolades</a></h5>
                <p>The splendid luxury and perfect location of our hotel, along with our great service and generous
                  hospitality, has ensured an abundance of highly regarded industry awards.</p> -->
              </div>
            </div>
            <!-- END Media -->
          </div>
        </div>
      </div>
    </section>
    <!-- END Choose us-->
<?php get_footer(); ?>
