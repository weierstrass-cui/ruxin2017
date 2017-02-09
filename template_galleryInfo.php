<?php
/*
Template Name:案例详情
*/
$cateID = $_GET['cat'];
$postID = $_GET['post'] ? $_GET['post'] : get_posts("category=".$cateID."&numberposts=1")[0]->ID;
get_header(); ?>
    <div class="galleryBox">
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
                if( $('#thePost').find('img').length ){
                    $('#thePost').find('img').each(function(){
                        var src = $(this).attr('src').replace(/^\/ruxin2017/,'');
                        var div = $('<div class="swiper-slide" data-slide-bg="<?php bloginfo('home'); ?>' + src + '"></div>').appendTo('#theImagesForMob .swiper-wrapper');
                        $(this).remove();
                    });
                }else{
                    $('#theImagesForMob').hide();
                }
            });
        </script>
    </div>
<?php get_footer(); ?>
