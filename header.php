<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta name="description" content="<?php echo site_description(); ?>">

    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">

    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>var base = '<?php echo theme_url(); ?>';</script>

    <meta name="viewport" content="width=device-width">
    <meta name="generator" content="Anchor CMS">

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo current_url(); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
      <!-- Custom CSS -->
      <style><?php echo article_css(); ?></style>
      <!--  Custom Javascript -->
      <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  </head>
  
  <body class="<?php echo body_class(); ?>">
    <header class="site-header">
      <div class="wrap">
        <hgroup>
          <h1><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
        </hgroup>
        <a href="#nav" class="menu"><img src="<?php echo theme_url(); ?>/img/menu.png"></a>
        <?php if(has_menu_items()): ?>
        <nav role="navigation">
          <ul>
            <li>
              <a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>">Home</a>
            </li>
            <?php while(menu_items()): if(hide_show_menu_item(menu_id(), "show-in-menu", "true") === "true") { ?>
              <li>
                <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
                  <?php echo menu_name(); ?>
                </a>
              </li>
            <?php } endwhile; ?>
            <?php if(twitter_account()): ?>
              <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
            <?php endif; ?>
          </ul>
        </nav>
        <?php endif; ?>
      </div>
    </header>