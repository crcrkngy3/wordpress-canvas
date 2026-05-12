
 <footer class="footer">
     <div class="container">
      <div class="footer-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">CANVAS</a>
      </div>

         <nav class="footer-nav">
          <ul class="footer-nav-list font-english">
           <li class="footer-nav-item"><a href="<?php echo home_url(); ?>/category/zukann">働き方図鑑</a></li>
            <li class="footer-nav-item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
         </ul>
        </nav>

      <div class="footer-sns">
         <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/X.png" alt="Xへリンク" ></a>
         <a href="https://  "><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtubeへリンク" ></a>
         <a href="https://  "><img src="<?php echo get_template_directory_uri(); ?>/img/Facebook.png" alt="Facebookへのリンク" ></a>
       </div>

       <div class="copyright">
        <small>&copy; 2026　CANVAS,Inc. All Rights Reserved.</small>
       </div>
      </div>
    </footer>
     <?php wp_footer(); ?>
  </body>
</html>
