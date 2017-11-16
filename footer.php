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
        <img class="lazyload" data-original="<?php bloginfo('template_url'); ?>/images/logo_color.png" />
      </a>
      <!-- <div class="footBanner">
        <a href="<?php bloginfo('home'); ?>/service/">服务体系</a>|
        <a href="javascript://">优势资源</a>|
        <a href="<?php bloginfo('home'); ?>/gallery?cat=20">成功案例</a>|
        <a href="<?php bloginfo('home'); ?>/about/">关于我们</a>
      </div> -->
      <div style="font-size:1.5rem;text-align:center;color:#f90;margin-top:1rem;">
        年轻派品效大师<br />只做年轻人喜欢的营销策划方案
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
                <dd><a href="tel:4006226975"> 400-622-6975</a></dd>
              </dl>
              <dl>
                <dt>Email: </dt>
                <dd><a href="mailto:jane.z@ruxinwenhua.com"> jane.z@ruxinwenhua.com</a></dd>
              </dl>
            </address>
          </div>
          <div class="col-sm-4" style="text-align:right;">
            <h4 class="white" style="text-align:center;width:170px;float:right;">关注我们</h4>
            <img class="ecode lazyload" data-original="<?php bloginfo('template_url'); ?>/images/ecode.jpg" width="170" height="170" />
            <p>上海如心文化--年轻派研究院</p>
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
        <img class="lazyload" data-original="<?php bloginfo('template_url'); ?>/images/logo_color.png" />
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
                <dd><a href="tel:4006226975"> 400-622-6975</a></dd>
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
    <a href="<?php bloginfo('home'); ?>/solution/"><img class="lazyload" data-original="<?php bloginfo('template_url'); ?>/images/footerBar1.png" /></a>
    <a href="http://p.qiao.baidu.com//im/index?siteid=3092275&ucid=6228450" target="_blank"><img class="lazyload" data-original="<?php bloginfo('template_url'); ?>/images/footerBar2.png" /></a>
    <a href="tel:4006226975"><img class="lazyload" data-original="<?php bloginfo('template_url'); ?>/images/footerBar3.png" /></a>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tm-scripts.js"></script>
<script type="text/javascript">
  $(function(){
    $("img").lazyload();
    $('.rd-mobilemenu_ul').find('li:last').remove();
    $('.rd-mobilemenu_ul').find('li:last').remove();
    $('.rd-mobilemenu_ul').find('li').eq(1).remove();
    var pcSolutionSlider = $('.pc-solutionSlider').find('ul');
    if( pcSolutionSlider.length && pcSolutionSlider.is(':visible') ){
      setInterval(function(){
        var mgTop = parseInt(pcSolutionSlider.css('marginTop'));
        if( mgTop == -26 ){
          mgTop = 0;
          pcSolutionSlider.css({'marginTop': 0}).find('li:first').appendTo(pcSolutionSlider);
        }
        pcSolutionSlider.css({'marginTop': (mgTop - 1) + 'px'});
      }, 80);
    }
  });
</script>
<!-- </script> -->
<?php wp_footer(); ?>
<script type="text/javascript"> var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fd46e1d2edd7fe75544a0b7ef2e41b730' type='text/javascript'%3E%3C/script%3E")) </script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.www.ruxinwenhua.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.52ladybug.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '4']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.52ladybug.com/piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>