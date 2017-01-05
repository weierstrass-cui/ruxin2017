<?php
/*
Template Name:服务体系
*/

get_header(); ?>
  <!-- Wedding -->
    <section class="bg-image bg-fixed bg-image-6 bg-overlay-light">
      <div class="well-3 well-3--inset-1 container container-wide">
        <h1>全球化一站式服务</h1>
        <div class="divider divider-default"></div>
        <p class="lead inset-1">上海骁懿展览展示有限公司成立迄今，本着“骁勇创 懿服务“的宗旨，以创意引领设计，以质量塑造形象，以优质的后期服务赢得口碑，不断创新，服务至上，运用与众不同的展示手法，在变革式的展示方式中进行颠覆性的创新，打造一条具有骁懿特色的展览之路。
</p>
      </div>
    </section>
    <!-- END Wedding -->

    <!-- Choose us -->
    <section class="well-5">
      <div class="container container-wide">
        <h1>服务运营模式</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-network_wifi"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">项目规划</a></h5>
                <p>世界级专家团队以前瞻性眼光和先进理念，对项目进行整体性规划。</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-notifications"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">项目策划</a></h5>
                <p>以国际化视野、人文理念、创意视角，融合行业新媒体技术，呈现独具一格的创意亮点。</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-ring_volume"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">空间设计</a></h5>
                <p>源自德国的先进技术理念，拥有全球八大文化创意设计中心。</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
        </div>
        <div class="row offset-2 text-sm-left">
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-local_parking"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">项目施工</a></h5>
                <p>在全国范围构建起广泛的本地施工、本地制作的服务网络，以高效、高品质、低成本实现现场施工，以及科学严谨与人性关怀兼备的施工细节工艺。</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-bluetooth_audio"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">项目运营</a></h5>
                <p>专业运营团队，设计师把控，强调“专业优质服务意识”，力求实现客户价值最大化。</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
          <div class="col-sm-4">
            <!-- Media -->
            <div class="media">
              <div class="media-top">
                <div class="icon icon-lg icon-danger material-icons-tag_faces"></div>
              </div>
              <div class="media-body inset-4">
                <h5><a href="javaScript://">一站式维护</a></h5>
                <p>提供后期的操作培训、设备和后期维护等一系列服务</p>
              </div>
            </div>
            <!-- END Media -->
          </div>
        </div>
      </div>
    </section>
    <!-- END Choose us -->

    <!-- Special proposition -->
    <section class="well-6 bg-image bg-fixed bg-image-7">
      <div class="container container-wide">
        <h1 class="h1--mod white">时代理念<br />数字多媒体互动科技</h1>
        <p class="inset-1 white">多媒体数字化展厅，集合各种多媒体展示系统为一体的综合展示平台，包括互动投影、全息幻影、多媒体投影沙盘、大型屏幕显示和模拟仿真等技术。</p>
        <a href="#" class="btn btn-sm btn-danger">了解更多</a>
      </div>
    </section>
    <!-- END Special proposition -->

    <!-- Additional -->
    <section class="well-6 well-6--inset-1">
      <div class="container container-wide">
        <h1>解决之道</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <?php $posts = get_posts("category=8&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="col-sm-4">
                <!-- Blog post -->
                <article class="blog-post">
                  <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="thumb">
                    <?php // the_post_thumbnail(); ?>
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="358" alt="">
                    <span class="thumb__overlay"></span>
                  </a>
                  <h5><a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>"><?php the_title(); ?></a></h5>
                  <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                  <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="btn btn-sm btn-danger">了解更多</a>
                </article>
                <!-- END Blog post -->
              </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Additional -->
<?php get_footer(); ?>
