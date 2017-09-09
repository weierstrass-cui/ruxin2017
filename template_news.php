<?php
/*
Template Name:新闻中心
*/

get_header(); ?>
    <!-- Spa rooms -->
    <style type="text/css">
      .newsRow{border-bottom:1px solid #ccc;margin-bottom:1rem;padding-bottom:1rem;}
      .newsRow:last-child{border-bottom:0 none;}
    </style>
    <section class="well-1">
      <div class="container container-wide">
        <h1>新闻中心</h1>
        <div class="divider divider-default"></div>
        <div class="row text-sm-left">
          <?php $posts = get_posts("category=9&numberposts=99"); ?>
            <?php if( $posts ):?>
              <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
                <div class="col-md-12 newsRow">
                  <!-- Media -->
                  <div class="media">
                    <div class="media-left">
                      <a href="<?php bloginfo('home'); ?>/blog_single_post?id=<?php echo $post->ID; ?>" class="thumb thumb--mod">
                        <img data-original="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>" width="270" height="135" alt="">
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

    <!-- END Our rooms -->
<?php get_footer(); ?>
