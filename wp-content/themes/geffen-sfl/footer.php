<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>

<footer>

  <div class="content">
    <div class="logo">
      <img src="<?= $GLOBALS["TEMPLATE_RELATIVE_URL"] ?>images/logo.svg" />
    </div>
    <div class="menu-wrapper">
      <?php
      wp_nav_menu(['theme_location' => 'footer']);
      ?>
    </div>

    <div class="newsletter">

      <div class="ml-form-embed" data-account="2000812:x3t3g3i0j9" data-form="1977032:h8k2g6">
      </div>

      <!-- MailerLite Universal -->
      <script>
        (function (m, a, i, l, e, r) {
          m['MailerLiteObject'] = e; function f() {
            var c = { a: arguments, q: [] }; var r = this.push(c); return "number" != typeof r ? r : f.bind(c.q);
          }
          f.q = f.q || []; m[e] = m[e] || f.bind(f.q); m[e].q = m[e].q || f.q; r = a.createElement(i);
          var _ = a.getElementsByTagName(i)[0]; r.async = 1; r.src = l + '?v' + (~~(new Date().getTime() / 1000000));
          _.parentNode.insertBefore(r,_);
        })(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

        var ml_account = ml('accounts', '2000812', 'x3t3g3i0j9', 'load');
      </script>
      <!-- End MailerLite Universal -->
    </div>

    <div class="end-block">
      <div class="social">
        <a href="<?= get_field('facebook', 'options') ?>"><i class="icon-facebook"></i></a>
        <a href="<?= get_field('instagram', 'options') ?>"><i class="icon-instagram"></i></a>
      </div>
      <span class="copyright">©
        <?= date('Y') ?>
        <?= get_bloginfo('name') ?>. All rights reserved.
      </span>
    </div>
  </div>

</footer>
</div> <!--! end of #container -->

<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "sal/sal.js") ?>
<script>
  sal();
</script>


<?php //versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "js/smoothscroll2.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "js/lenis.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "bower_components/jquery/dist/jquery.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "bower_components/swiper/dist/js/swiper.min.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "bower_components/aos/dist/aos.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "js/t.js") ?>
<?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "js/functions.js") ?>
<script>
  AOS.init();
  const lenis = new Lenis();
  function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
  }

  requestAnimationFrame(raf)
</script>
<?php wp_footer(); ?>


</body>

</html>