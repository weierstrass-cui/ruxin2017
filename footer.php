<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage 如心
 * @since 如心2017
 */
?>

	</main>
  <!--========================================================
                          FOOTER
  =========================================================-->
  <footer class="pcShow">
    <div class="container container-wide">
      <a href="<?php bloginfo('home'); ?>/">
        <img data-original="<?php bloginfo('template_url'); ?>/images/logo_color.png" />
      </a>
      <div class="footBanner">
        <a href="<?php bloginfo('home'); ?>/service/">服务体系</a>|
        <a href="javascript://">优势资源</a>|
        <a href="<?php bloginfo('home'); ?>/gallery?cat=6">成功案例</a>|
        <a href="<?php bloginfo('home'); ?>/about/">关于我们</a>
      </div>

      <!-- Address -->
      <div class="row text-sm-left footerInfo" id="contactUs">
          <div class="col-sm-8">
            <h4 class="white">联系我们</h4>
            <address class="contact-info">
              <p>上海总部：上海市杨浦区隆昌路619号城市概念8号楼中区B13室</p>
              <p>北京分公司：北京市朝阳区朝阳北路青年汇104号楼518室</p>
              <p>青岛分公司：青岛市黄岛区漓江西路1166号嘉年华广场9号楼1104室</p>
              <br />
              <dl>
                <dt>联系电话：</dt>
                <dd><a href="callto:4008202083"> 400-820-2083</a></dd>
              </dl>
              <dl>
                <dt>Email: </dt>
                <dd><a href="mailto:jane.z@ruxinwenhua.com"> jane.z@ruxinwenhua.com</a></dd>
              </dl>
            </address>
          </div>
          <div class="col-sm-4" style="text-align:right;">
            <h4 class="white" style="text-align:center;width:170px;float:right;">关注我们</h4>
            <img class="ecode" src="<?php bloginfo('template_url'); ?>/images/ecode.jpg" />
            <p>上海如心文化--大学生研究院</p>
          </div>
      </div>
      <!-- END Address -->
      <p class="rights">
        版权所有上海如心文化传播有限公司 &#169; <span id="copyright-year"></span>
        <!-- <span class="fw-b">&#183;</span> -->
        <!-- <a rel="nofollow" href="index-5.html"> 沪ICP备案8888</a> -->
      </p>
    </div>
  </footer>
  <footer class="moShow">
    <div class="container container-wide">
      <a href="<?php bloginfo('home'); ?>/">
        <img data-original="<?php bloginfo('template_url'); ?>/images/logo_color.png" />
      </a>
      <!-- Address -->
      <div class="row text-sm-left footerInfo" id="mo-contactUs">
          <div class="col-sm-12">
            <h4 class="white">联系我们</h4>
            <address class="contact-info">
              <p>上海总部：上海市杨浦区隆昌路619号城市概念8号楼中区B13室</p>
              <p>北京分公司：北京市朝阳区朝阳北路青年汇104号楼518室</p>
              <p>青岛分公司：青岛市黄岛区漓江西路1166号嘉年华广场9号楼1104室</p>
              <br />
              <dl>
                <dt>联系电话：</dt>
                <dd><a href="callto:4008202083"> 400-820-2083</a></dd>
              </dl>
              <dl>
                <dt>Email: </dt>
                <dd><a href="mailto:jane.z@ruxinwenhua.com"> jane.z@ruxinwenhua.com</a></dd>
              </dl>
            </address>
          </div>
      </div>
      <!-- END Address -->
      <p class="rights">
        版权所有上海如心文化传播有限公司 &#169; <span id="copyright-year"></span>
        <!-- <span class="fw-b">&#183;</span> -->
        <!-- <a rel="nofollow" href="index-5.html"> 沪ICP备案8888</a> -->
      </p>
    </div>
  </footer>
  <div id="footerBar" class="moShow">
    <a href="javascript://"><img data-original="<?php bloginfo('template_url'); ?>/images/footerBar1.png" /></a>
    <a href="javascript://"><img data-original="<?php bloginfo('template_url'); ?>/images/footerBar2.png" /></a>
    <a href="callto:4008202083"><img data-original="<?php bloginfo('template_url'); ?>/images/footerBar3.png" /></a>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/message.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tm-scripts.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.lazyload.min.js"></script>
<script type="text/javascript">
  $(function(){
    $("img").lazyload({
        threshold :20,
        effect: "fadeIn"
     });  
  });
</script>
<!-- </script> -->
<?php wp_footer(); ?>
</body>
</html>