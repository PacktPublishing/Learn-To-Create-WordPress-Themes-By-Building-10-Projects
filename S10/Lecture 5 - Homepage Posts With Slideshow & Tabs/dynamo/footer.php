<footer>
      <p>Copyright &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
    </footer>

<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.4.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/unslider-min.js"></script>

  <script>
  jQuery(document).ready(function($){
    $('.my-slider').unslider({
      arrows: {
        prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-circle-left"></i></a>',
        next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-circle-right"></i></a>'
      }
    });
  });
  </script>
  <script>
  $(function(){
    $('#tabs').tabs();
  });
  </script>
</body>
</html>