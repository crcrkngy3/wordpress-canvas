<!-- お仕事図鑑でそれぞれの記事をクリックすると出てくるページのphpです -->

<?php get_header(); ?>

<main class="single-main">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post-content">
        <h1 class="post-title"><?php the_title(); ?></h1>
        
        <time class="post-date"><?php the_time('Y.m.d'); ?></time>
        
        <div class="post-body">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>