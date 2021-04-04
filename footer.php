<footer class="l-footer">
    <small>
      <p>©︎cresta.design all rights reserved</p>
    </small>
  </footer>

  <script>
    $(function() {
      $('.l-header').bgSwitcher({
        images: [
          '<?php echo esc_url( get_template_directory_uri(). '/img/fv-bgi_01@2x.jpg' ); ?>',
          '<?php echo esc_url( get_template_directory_uri(). '/img/fv-bgi_02@2x.jpg' ); ?>',
          '<?php echo esc_url( get_template_directory_uri(). '/img/fv-bgi_03@2x.jpg' ); ?>'],
        effect: "drop",
        interval: "3000",
        easing: "swing"
      });
    });
  </script>
  <?php wp_footer(  ); ?>
</body>
</html>