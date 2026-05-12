<?php get_header(); ?>

<main class="page-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="page-container">
      <div class="page-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>