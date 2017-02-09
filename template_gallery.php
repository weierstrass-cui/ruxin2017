<?php
/*
Template Name:成功案例
*/
$cateID = $_GET['cat'];
$postID = $_GET['post'] ? $_GET['post'] : get_posts("category=".$cateID."&numberposts=1")[0]->ID;
get_header(); ?>
    <div class="galleryBox pcShow">
        <div class="galleryNav">
            <ul>
                <li><a href="javascript://">所有分类</a></li>
                <?php  $categorys = getchild(4); ?>
                <?php if( $categorys ): ?>
                  <?php foreach( $categorys as $index => $item ): ?>
                    <li>
                        <a href="javascript://"><?php echo $item->cat_name ?></a>
                        <div class="blogList <?php echo $cateID == $item->term_id ? 'current' : '' ?>">
                            <?php $posts = get_posts("category=".$item->term_id."&numberposts=99"); ?>
                            <?php if( $posts ):?>
                                <?php foreach( $posts as $postInde => $post ): setup_postdata( $post ); ?>
                                    <div style="margin-bottom:0.3rem;">
                                        <a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$item->term_id.'&post='.$post->ID ?>" <?php echo $postID == $post->ID ? 'class="active"' : '' ?>>
                                            <?php echo get_post_meta($post->ID,'短标题',true) ? get_post_meta($post->ID,'短标题',true) : the_title(); ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </div>
                    </li>
                  <?php endforeach; ?>
                <?php endif ?>
            </ul>
        </div>
        <?php $this_post = get_post($postID); ?>
        <div class="galleryInfo">
            <h3 class="postTile"><?php echo $this_post->post_title; ?></h3>
            <ul class="tips">
                <li>坐标：<?php echo get_post_meta($postID,'坐标',true); ?></li>
                <li>时间：<?php echo get_post_meta($postID,'时间',true); ?></li>
            </ul>
            <div id="theImagesForMob" class="swiper-container swiper-slider" data-height="310px">
                <div class="swiper-wrapper"></div>
                <div class="swiper-button-prev material-icons-chevron_left"></div>
                <div class="swiper-button-next material-icons-chevron_right"></div>
            </div>
            <div id="thePost" class="thePost">
                <?php echo $this_post->post_content; ?>
            </div>
            <div id="theImages"></div>
        </div>
        <script type="text/javascript">
            $(function(){
                $('.galleryNav').find('li').bind('click', function(){
                    if( $(this).find('.blogList').find('a').length ){
                        $(this).find('.blogList').slideDown();
                    }
                });
                if( $('#theImages').is(':hidden') ){
                    if( $('#thePost').find('img').length ){
                        $('#thePost').find('img').each(function(){
                            var src = $(this).attr('src').replace(/^\/ruxin2017/,'');
                            var div = $('<div class="swiper-slide" data-slide-bg="<?php bloginfo('home'); ?>' + src + '"></div>').appendTo('#theImagesForMob .swiper-wrapper');
                            $(this).remove();
                        });
                    }else{
                        $('#theImagesForMob').hide();
                    }
                }else{
                    if($('#thePost').find('img').length){
                        $('#thePost').find('img').each(function(){
                            var div = $('<div></div>').appendTo('#theImages');
                            $(this).appendTo(div);
                        });
                    }else{
                        $('#theImages').hide();
                    }
                }
                $('#thePost').find('p').find('br').remove();
                $('.galleryNav').height($('.galleryInfo').height() + 100);
                setTimeout(function(){
                    $('.galleryNav').height($('.galleryInfo').height() + 100);
                }, 3000);
            });
        </script>
    </div>
    <div class="anliList moShow">
        <?php $posts = get_posts("category=4&numberposts=4"); ?>
        <?php if( $posts ):?>
          <?php foreach( $posts as $index => $post ): setup_postdata( $post ); ?>
              <div class="oneAnli" style="background:url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large')[0]; ?>) no-repeat;background-size:100% 100%;">
                <div class="anliMask">
                    <div class="shotTitle"><?php echo get_post_meta($post->ID,'短标题',true); ?></div>
                    <h3><?php the_title(); ?></h3>
                    <div class="time"><?php echo get_post_meta($post->ID,'时间',true); ?></div>
                    <a href="<?php bloginfo('home'); ?>/galleryInfo?<?php echo 'post='.$post->ID ?>"><span>了解详情</span></a>
                </div>
            </div>
          <?php endforeach; ?>
        <?php endif ?>
    </div>
<?php get_footer(); ?>
