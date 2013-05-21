  <footer>
    <aside class="wrap post">
      <ol class="previous-posts">
        <p class="category">Previous Posts</p>
          <?php while(footer_latest_posts()): ?>
            <li>
              <h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
              <span class="date">published <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
            </li>
          <?php endwhile; ?>
      </ol>
    </aside>
  </footer>
  <div class="sub-footer">
    <p class="meta wrap post">&copy; <?php echo date('Y'); ?> <a href="<?php echo full_url(); ?>"><?php echo site_name(); ?></a>. Powered by <a href="http://anchorcms.com">AnchorCMS</a>. Design by <a href="http://joshkennedy.me/">Josh Kennedy</a>.</p>
  </div>

  <!-- Grab some fresh-squeezed jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- If they're out, get some from the cellar -->
  <script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

  <!-- Custom JS -->
  <script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>

  <!-- All your data are belong to us -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7422463-14']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  </body>
</html>