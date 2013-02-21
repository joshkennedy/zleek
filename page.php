<?php theme_include('header'); ?>

<!-- If page is set to home, show latest post -->
<?php if(is_homepage()): ?>
  <?php if(has_posts()): ?>
    <?php posts(); ?>

    <section class="article">
      <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
      <div class="overlay"></div>
      <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://www.wallope.com/wp-content/uploads/textures-wallpapers-334-free-wood-texture-grunge-wood-picture.jpg'); ?>);"></div>
      <article class="wrap post">
        <header class="post-header">
          <hgroup>
            <p class="category"><?php echo category_title(); ?></p>
            <h1><?php echo article_title(); ?></h1>
            <p class="lead"><?php echo article_description(); ?></p>
          </hgroup>
        </header>
        <?php echo article_html(); ?>
        <p class="meta">This is my <?php echo numeral(article_id()); ?> article and is <?php echo count_words(article_html()); ?> words long. <?php echo article_custom_field('attribution'); ?></p>
        <a href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="button">Tweet This</a>
      </article>
    </section>

  <?php else: ?>
    <p>I haven't written anything yet. This saddens me.</p>
  <?php endif; ?>

<?php else: ?>

    <section class="content wrap">
      <h1><?php echo page_title(); ?></h1>

      <?php echo page_content(); ?>

      <!--
        If you want to add custom functionality per-page, you can do so by using the bind() function, which is stored in the functions.php of your theme.
        Then, if you want to echo out your custom function, you just add a receive() function. Here's an example: "<?php echo receive(); ?>".
       -->
    </section>

<?php endif; ?>

		

<?php theme_include('footer'); ?>