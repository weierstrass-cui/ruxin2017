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
  <footer>
    <div class="container container-wide">
      <!-- Address -->
      <address class="contact-info">
        <p>中国，上海市闵行区</p>
        <p>恒南路1325号(闿鑫商务)B座306室</p>
        <dl>
          <dt>全国服务热线: </dt>
          <dd><a href="callto:400-788-4429"> 400-788-4429</a></dd>
        </dl>
      </address>
      <!-- END Address -->
      <p class="rights">
        上海骁懿展览展示有限公司 &#169; <span id="copyright-year"></span>
        <span class="fw-b">&#183;</span>
        <a rel="nofollow" href="index-5.html"> 沪ICP备案8888</a>
      </p>
    </div>
  </footer>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/message.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tm-scripts.js"></script>
<!-- </script> -->
<?php wp_footer(); ?>
</body>
</html>