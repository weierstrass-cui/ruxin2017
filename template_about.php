<?php
/*
Template Name:关于我们
*/

get_header(); ?>
    <div class="aboutBanner">
      <img src="<?php bloginfo('template_url'); ?>/images/aboutBanner.jpg" />
    </div>
    <div class="aboutNav">
      <a href="javascript://">关于如心</a>
      <!-- <a href="javascript://">关于简知</a> -->
      <a href="javascript://">团队介绍</a>
      <span class="aboutNavHighlight"></span>
    </div>
    <div class="aboutInfo">
      <div class="aboutInfoBox" style="display:block;">
        <h3 class="mobTitle">关于如心</h3>
        <?php $post = get_post(54); ?>
        <?php echo $post->post_content; ?>
      </div>
      <!-- <div class="aboutInfoBox">
        <h3 class="mobTitle">关于简知</h3>
        <?php $post = get_post(56); ?>
        <?php echo $post->post_content; ?>
      </div> -->
      <div class="aboutInfoBox">
        <h3 class="mobTitle">团队介绍</h3>
        <ul class="teamMemberList teamLeaderList">
          <?php
            global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 8 order by ordering";
              $firstrow=$wpdb->get_results($query);
          ?>
          <?php if( $firstrow ):?>
            <?php foreach( $firstrow as $index => $v ): ?>
              <li>
                <img class="face" alt="<?php echo $v->name; ?>" src="<?php echo $v->image_url;?>" />
                <div>
                  <?php if(($index % 2) == 1){ ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/topicLeft.png" />
                  <?php }else{ ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/topicRight.png" />
                  <?php } ?>
                  <h4><?php echo $v->name; ?></h4>
                  <p><?php echo $v->description; ?></p>
                </div>
                </a>
              </li>
            <?php endforeach; ?>
          <?php endif ?>
        </ul>
        <div class="teamMemberListBox">
          <ul class="teamMemberList">
            <?php
              global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 6 order by ordering";
                $firstrow=$wpdb->get_results($query);
            ?>
            <?php if( $firstrow ):?>
              <?php foreach( $firstrow as $index => $v ): ?>
                <li>
                  <img class="face" alt="<?php echo $v->name; ?>" src="<?php echo $v->image_url;?>" />
                  <div>
                    <h4><?php echo $v->name; ?></h4>
                    <p><?php echo $v->description; ?></p>
                  </div>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="gallerySlider aboutSlider">
      <div class="galleryMain">
        <ul>
          <?php
            global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 2 order by ordering";
              $firstrow=$wpdb->get_results($query);
          ?>
          <?php if( $firstrow ):?>
            <?php foreach( $firstrow as $index => $v ): ?>
              <li>
                <a href="javascript://" title="<?php echo $v->name; ?>">
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
    <div class="gallerySlider aboutSlider" style="display:none;">
      <div class="galleryMain">
        <ul>
          <?php
            global $wpdb; $query = "SELECT * FROM ".$wpdb->prefix."huge_itslider_images where slider_id = 7 order by ordering";
              $firstrow=$wpdb->get_results($query);
          ?>
          <?php if( $firstrow ):?>
            <?php foreach( $firstrow as $index => $v ): ?>
              <li>
                <a href="javascript://" title="<?php echo $v->name; ?>">
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
    <script type="text/javascript">
      $(function(){
        var set = $('.aboutNav').find('a').eq(0),
          width = set.width() + parseInt(set.css('paddingLeft')) * 2;
        $('.aboutNavHighlight').width(width).css('left', set.offset().left);

        $('.aboutNav').find('a').bind('click', function(){
          $('.aboutInfoBox').eq($(this).index()).show().siblings().hide();
          $('.aboutSlider').eq($(this).index()).show().siblings('.aboutSlider').hide();
          $('.aboutNavHighlight').css('left', $(this).offset().left);
        });

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
<?php get_footer(); ?>
