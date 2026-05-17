<?php get_header(); ?>

<main class="contact-page-main">
  <div class="contact-form-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="contact-content">
        
        <h1 class="contact-page-title"><?php the_title(); ?></h1>

        <?php the_content(); ?>

      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>