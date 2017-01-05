<?php
/*
Template Name:案例展示厅
*/

get_header(); ?>
  <!-- Guest rooms -->
    <section class="bg-image bg-fixed bg-image-8 bg-overlay-light">
      <div class="well-3 well-3--inset-1 container container-wide">
        <h1>企业/政府展厅</h1>
        <div class="divider divider-default"></div>
        <p class="lead inset-3">Our hotel can boast a great location. A few moments separate it from the airport. We
          offer a variety of convenient amenities as well as comfortable guestrooms. We are a non-smoking hotel that
          serves a complimentary breakfast every morning. In the afternoon, our guests can relax in the indoor pool, or
          be productive in the on-site business center, which offers copy and fax services. We also offer free Wi-Fi and
          free parking during your stay. Guests will enjoy the large screen TV with cable channels and pay-per-view
          movies as well.</p>
        <div class="row flow-offset-1 offset-3 gallery" data-lightbox="gallery">
          <?php $posts = get_posts("category=4&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="col-xs-4">
                  <!-- Magnific Popup Image -->
                  <a class="thumb" data-lightbox="image" href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>">
                    <?php // the_post_thumbnail(); ?>
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="358" alt="">
                    <span class="thumb__overlay"></span>
                  </a>
                  <!-- END Magnific Popup Image -->
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Guest rooms -->

    <!-- Spa rooms -->
    <section class="well-1">
      <div class="container container-wide">
        <h1>展会/展区</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <?php $posts = get_posts("category=5&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="col-md-6">
                  <!-- Media -->
                  <div class="media">
                    <div class="media-left">
                      <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="thumb thumb--mod">
                        <?php // the_post_thumbnail(); ?>
                        <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="270" height="277" alt="">
                        <span class="thumb__overlay"></span>
                      </a>
                    </div>
                    <div class="media-body inset-5">
                      <h5><a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>"><?php the_title(); ?></a></h5>
                      <p><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                      <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="btn btn-sm btn-danger">了解更多</a>
                    </div>
                  </div>
                  <!-- END Media -->
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Spa rooms -->

    <!-- King guest rooms -->
    <section class="well-6 bg-image bg-fixed bg-image-9">
      <div class="container container-wide">
        <h1 class="h1--mod white">多媒体互动/沙盘</h1>
        <p class="inset-1 white">精致的沙盘模型，结合绚丽的声、光、电，联动沙盘前方大屏幕影像展望未来，当沙盘上声、光、电联动投影影片，虚实之间，时光流转；让未来到来，让愿景成真，感知遥远的未来。应用：多用于展示区域规划。</p>
        <a href="#" class="btn btn-sm btn-danger">了解更多！</a>
      </div>
    </section>
    <!-- END King guest rooms -->

    <!-- Our rooms -->
    <section class="well-6 well-6--inset-1">
      <div class="container container-wide gallery">
        <h1>数字多媒体互动科技</h1>
        <div class="divider divider-default"></div>
        <div class="row flow-offset-1 text-sm-left">
          <?php $posts = get_posts("category=6&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <?php if($index % 3 == 0){ ?>
                   </div>
                   <div class="row flow-offset-1 text-sm-left">
                <?php } ?>
                <div class="col-xs-4">
                  <!-- Magnific Popup Image -->
                  <a class="thumb" data-lightbox="image" href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>">
                    <?php // the_post_thumbnail(); ?>
                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="370" height="358" alt="">
                    <span class="thumb__overlay"></span>
                  </a>
                  <!-- END Magnific Popup Image -->
                  <h5><a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>"><?php the_title(); ?></a></h5>
                  <p class="offset-4"><?php echo get_post_meta($post->ID,'简介',true); ?></p>
                </div>
              <?php endforeach; ?>
            <?php endif ?>
        </div>
      </div>
    </section>
    <!-- END Our rooms -->
<?php get_footer(); ?>
