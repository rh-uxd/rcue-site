      <footer role="contentinfo">
        <div id="inner-footer" class="clearfix row">
          <div id="widget-footer" class="clearfix">
            <hr />
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
            <?php endif; ?>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
            <?php endif; ?>
          </div>
          <nav class="clearfix">
            <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
          </nav>
        </div> <!-- end #inner-footer -->
      </footer> <!-- end footer -->
      <!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
      <![endif]-->
      <?php wp_footer(); // js scripts are inserted using this function ?>
  </body>
</html>