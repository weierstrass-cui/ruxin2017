<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage 如心
 * @since 如心2017
 */

get_header(); ?>

	<!-- 404 Error -->
    <section class="well-3 well-3--inset-1 well-404 bg-image bg-fixed bg-image-10 bg-overlay-light">
      <div class="container container-wide">
        <h1 class="preffix-1 h1--mod-1 no-wrap">404 Error</h1>
        <div class="divider divider-default"></div>
        <h2 class="text-danger">sorry,page not found</h2>
        <p class="lead inset-3">The page you are looking for might have been removed,had its name changed, or is
          temporarily
          unavailable.Please try using our search box below to look for information on the website.</p>
        <!-- Search form -->
        <div class="search-form">
          <form id="search" action="search.php" method="GET" accept-charset="utf-8">
            <label class="search-form_label" for="in">
              <input id="in" class="search-form_input" type="text" name="s" placeholder="Search"/>
            </label>

            <button type="submit" class="search-form_submit material-icons-search"></button>
          </form>
        </div>
        <!-- END Search form -->


      </div>
    </section>
    <!-- END 404 Error -->

<?php get_footer(); ?>
