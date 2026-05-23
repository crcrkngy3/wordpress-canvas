<!-- お仕事図鑑でそれぞれの記事をクリックすると出てくるページのphpです -->
<?php get_header(); ?>

<main class="single-main">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post-content">
        
        <div class="single-header-area">
          
          <div class="single-eyecatch">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large'); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/dummy.png" alt="イメージ画像">
            <?php endif; ?>
          </div>
          
          <div class="single-meta-box">
            <h1 class="single-title">【<?php the_title(); ?>】</h1>
            
            <div class="single-tags">
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

        </div> <div class="post-body">
          <?php the_content(); ?>
        </div>

      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>