<div class="clearfix"></div>

    <footer class="main-footer">
      <div class="row">
        <div class="large-3 columns">
         <?php if(is_active_sidebar('footer1')) : ?>
            <?php dynamic_sidebar('footer1'); ?>
        <?php endif; ?>
        </div>
        <div class="large-3 columns">
         <?php if(is_active_sidebar('footer2')) : ?>
            <?php dynamic_sidebar('footer2'); ?>
        <?php endif; ?>
        </div>
        <div class="large-3 columns">
         <?php if(is_active_sidebar('footer3')) : ?>
            <?php dynamic_sidebar('footer3'); ?>
        <?php endif; ?>
        </div>
        <div class="large-3 columns">
        <?php if(is_active_sidebar('footer4')) : ?>
            <?php dynamic_sidebar('footer4'); ?>
        <?php endif; ?>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
