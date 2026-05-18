<?php get_header(); ?>
<!-- お仕事図鑑のページです -->
 <main class="content">
   <section class="mv-section section" id="mv">
        <div class="mv-main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/shigoto-main.png" alt="main" class="main-visual">
        </div>
   </section>

  <div class="archive-container">
    
    <h1 class="archive-title"><?php single_cat_title(); ?> 一覧</h1>

    <div class="shigotozukann-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article class="shigotozukann-item">
          <a href="<?php the_permalink(); ?>">

            <div class="shigotozukann-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/dummy.png" alt="イメージ画像">
              <?php endif; ?>
            </div>
            
            <div class="news_post_small_title">
              <p class="font-english">【<?php the_title(); ?>】</p>
            </div>

          </a>
        </article>

      <?php endwhile; else : ?>
        <p class="no-posts">まだ記事がありません。</p>
      <?php endif; ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>