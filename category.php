<!-- お仕事図鑑のページのphpです -->
<?php get_header(); ?>

 <main class="content">
   <section class="mv-section section" id="mv">
        <div class="mv-main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shigoto-main.png" alt="main" class="main-visual">
        </div>
   </section>

  <div class="archive-container">
    <div class="shigotozukann-list">

      <?php 
         $counter = 1; // 💡 1番目から数え始めるためのカウンターを用意
         if (have_posts()) : while (have_posts()) : the_post(); 

         // 💡 カウンターの数字を2で割って、余りがあれば（奇数なら）'is-odd'、なければ（偶数なら）'is-even' を変数に代入
         $loop_class = ($counter % 2 !== 0) ? 'is-odd' : 'is-even';
      ?>
  
  <article class="shigotozukann-item <?php echo $loop_class; ?>">
          <a href="<?php the_permalink(); ?>" class="shigotozukann-link">

            <div class="shigotozukann-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/dummy.png" alt="イメージ画像">
              <?php endif; ?>
            </div>
            
            <div class="shigotozukann-body">
             <div class="shigotozukann-title">
                  【<?php the_title(); ?>】
             </div>
  
          <div class="shigotozukann-catch">
                <?php the_excerpt(); ?>
          </div>

          <div class="shigotozukann-tags">
            <?php
               $post_tags = get_the_tags();
              if ( $post_tags ) {
              foreach ( $post_tags as $tag ) {
              echo '<span>#' . $tag->name . '</span>';
              }
               }
             ?>
          </div>
</div>
          </a>
        </article>
<?php 
    $counter++; // 💡 必ず「</article>」の後、かつ「endwhile;」の前に配置します
    endwhile; 
    else : 
    ?>
        <p class="no-posts">まだ記事がありません。</p>
      <?php endif; ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>