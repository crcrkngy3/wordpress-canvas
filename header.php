<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>看護師転職サイト CANVAS</title>
    <meta name="description" content="看護師転職会社 CANVASをイメージし作成した仮想サイトです。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo 2.png">
     <link rel="stylesheet" href="https://use.typekit.net/qqu7aiq.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=BIZ+UDMincho&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&family=Noto+Sans+JP&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100..900;1,100..900&family=Shippori+Mincho&family=Zen+Old+Mincho&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common.css">

    <?php if ( is_home() || is_front_page() ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
    <?php endif; ?>

    <?php if ( is_page('contact') ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contact.css">
    <?php endif; ?>

    <?php if ( is_category('zukann') || ( is_single() && in_category('zukann') ) ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/category.css">
    <?php endif; ?>
  </head>
  
  <body>

     <header class="header">
      <div class="container">
        <h1 class="header-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">CANVAS</a>
        </h1>
        <nav class="gnav">
          <ul class="gnav-list font-english">
           <li class="gnav-item"><a href="<?php echo home_url(); ?>/category/zukann">働き方図鑑</a></li>
            <li class="gnav-item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
         </ul>
        </nav>

      </div>
    </header>

