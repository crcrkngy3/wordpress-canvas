
 <?php get_header();?>


<main class="content">

     <section class="mv-section section" id="mv">
        <div class="mv-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/mv-2.png" alt="メインビジュアル" class="main-visual">
        </div>
      </section>

      <section class="intro-section section" id="intro">
         <div class="intro-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/導入文.png" alt="導入文" class="sub-visual">
         </div>
      </section>

      <section class="benefit-section section" id="benefit">
         <div class="benefit-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/ベネフィット.png" alt="ベネフィット" class="sub-visual">
         </div>
      </section>


     <div class="shigotozukann-section section" id="shigotozukann">
            <?php
              $args = array(
                  'post_type'      => 'post',
                  'category_name' => 'zukann',
                  'posts_per_page' => 3,
              );
              $posts = get_posts($args);
              ?>

              <?php  foreach($posts as $post): setup_postdata($post); ?>

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

             <?php endforeach; ?>
             <?php wp_reset_postdata();?>

          </div>
 <section class="strong-section section" id="strong">
         <div class="strong-main">
          <img src="<?php echo get_template_directory_uri(); ?>/img/強み.png" alt="強み" class="sub-visual">
      </div>
      </section>
<section class="contact-section section" id="contact">
         <div class="contact-main">
        <img src="<?php echo get_template_directory_uri(); ?>/img/お問い合わせ誘導.png" alt="お問い合わせ誘導" class="sub-visual">
    </div>
      </section>

 <section class="button-section" section id="button">
      <a class="button" href="#">相談してみる</a>
  </section>
  
</main>

   <?php get_footer(); ?>
