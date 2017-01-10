<?php
/*
Template Name:成功案例
*/
$cateID = $_GET['cat'];
$postID = $_GET['post'] ? $_GET['post'] : get_posts("category=".$cateID."&numberposts=1")[0]->ID;
get_header(); ?>
    <div class="galleryBox">
        <div class="galleryNav">
            <ul>
                <li><a href="javascript://">所有分类</a></li>
                <?php  $categorys = getchild(10); ?>
                <?php if( $categorys ): ?>
                  <?php foreach( $categorys as $index => $item ): ?>
                    <li>
                        <a href="javascript://"><?php echo $item->cat_name ?></a>
                        <div class="blogList <?php echo $cateID == $item->term_id ? 'current' : '' ?>">
                            <?php $posts = get_posts("category=".$item->term_id."&numberposts=99"); ?>
                            <?php if( $posts ):?>
                                <?php foreach( $posts as $postInde => $post ): setup_postdata( $post ); ?>
                                    <a href="<?php bloginfo('home'); ?>/gallery?<?php echo 'cat='.$item->term_id.'&post='.$post->ID ?>" <?php echo $postID == $post->ID ? 'class="active"' : '' ?>><?php the_title(); ?></a>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </div>
                    </li>
                  <?php endforeach; ?>
                <?php endif ?>
            </ul>
        </div>
        <div class="galleryInfo">
        
        </div>
        <script type="text/javascript">
            $(function(){
                $('.galleryNav').find('li').bind('click', function(){
                    if( $(this).find('.blogList').find('a').length ){
                        $(this).find('.blogList').slideDown();
                    }
                });
            });
        </script>
    </div>
<?php get_footer(); ?>
