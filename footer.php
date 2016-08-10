</div>

<footer id="footer">
  <?php if(is_active_sidebar('footer-first-section')): ?>
  <section class="first-section">
    <?php dynamic_sidebar('footer-first-section'); ?>
  </section>
  <?php endif; ?>
  <?php if(is_active_sidebar('footer-second-section')): ?>
  <section class="second-section">
    <?php dynamic_sidebar('footer-second-section'); ?>
  </section>
  <?php endif; ?>
  <?php if(is_active_sidebar('footer-third-section')): ?>
  <section class="third-section">
    <?php dynamic_sidebar('footer-third-section'); ?>
  </section>
  <?php endif; ?>
  <section class="signature">
    This blog is powered by <a href="http://www.wordpress.org/" title="WordPress">WordPress</a> and the <a href="http://bleg.halles.cl/" title="Bleg™ Wordpress Theme">Bleg™</a> Wordpress Theme :)
  </section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
