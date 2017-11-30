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
                        <div class="blogList">
                        <!-- <div class="blogList <?php echo $cateID == $item->term_id ? 'current' : '' ?>"> -->
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
            <?php  global $wpdb;
                $query = "select w.object_id as id, w.term_taxonomy_id as cid from ".$wpdb->prefix."term_relationships as w";
                $query = $query." join ".$wpdb->prefix."term_taxonomy as c";
                $query = $query." on w.term_taxonomy_id = c.term_taxonomy_id";
                $query = $query." WHERE c.parent = 4";
                $query = $query." GROUP BY w.object_id";
                $query = $query." ORDER BY w.object_id";
                $post_list = $wpdb->get_results($query);
                $post_index = 0;
                if( $post_list && count($post_list) ){
                    foreach( $post_list as $index => $item ){
                        if( $postID == $item->id ){
                            $post_index = $index;
                            break;
                        }
                    }
                }
            ?>
            <?php
            if( count($post_list) ){
                if( $post_index == 0 ){
            ?>
                <a class="nextPost" href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$post_list[$post_index+1]->cid.'&post='.$post_list[$post_index+1]->id ?>">下一篇</a>
            <?php
                }elseif ( $post_index == (count($post_list) - 1) ) {
            ?>
                <a class="lastPost" href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$post_list[$post_index-1]->cid.'&post='.$post_list[$post_index-1]->id; ?>">上一篇</a>
            <?php    
                }else{
            ?>
                <a class="lastPost" href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$post_list[$post_index-1]->cid.'&post='.$post_list[$post_index-1]->id ?>">上一篇</a>
                <a class="nextPost" href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$post_list[$post_index+1]->cid.'&post='.$post_list[$post_index+1]->id ?>">下一篇</a>
            <?php
                }
            }
            ?>

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
                <?php if( get_post_meta($postID,'理念',true) ){ ?>
                    <div style="width:100%;font-size:1.4rem;margin:0 auto 2rem;line-height:2rem;font-weight:bold;">
                        <div>策划/设计师：</div>
                        <div style="text-indent:3rem;"><?php echo get_post_meta($postID,'理念',true); ?></div>
                    </div>
                <?php } ?>
                <?php echo $this_post->post_content; ?>
            </div>
            <div id="theImages"></div>
        </div>
        <div class="pc-solution">
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
        <script type="text/javascript">
            $(function(){
                if( $('.pcShow').is(':visible') ){
                    $('.galleryNav').find('li').bind('click', function(){
                        if( $(this).find('.blogList').find('a').length ){
                            $(this).find('.blogList').slideToggle();
                        }
                    });
                    if( $('#theImages').is(':hidden') ){
                        if( $('#thePost').find('img').length ){
                            $('#thePost').find('img').each(function(){
                                var src = $(this).attr('src').replace(/^\/ruxin2017/,'');
                                if( !/\/wp-content/.test(src) ){
                                    src = '/wp-content' + src;
                                }
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
                                var src = $(this).attr('src');
                                if( /\/wp-content/.test(src) ){
                                    $(this).appendTo(div);
                                }else{
                                    $(this).attr('src', '/wp-content' + $(this).attr('src')).appendTo(div);
                                }
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
                }
            });
        </script>
    </div>
<?php get_footer(); ?>
