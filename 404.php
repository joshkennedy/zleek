<?php theme_include('header'); ?>

 <section class="article">
  <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
  <div class="overlay"></div>
  <div class="featured-image" style="background-image: url(http://fc00.deviantart.net/fs43/f/2009/160/3/a/Burned_Cedar_Plank_by_snakstock.jpg); ?>);"></div>
  <article class="wrap post">
    <header class="post-header">
      <hgroup>
        <p class="category">Ruh roh</p>
        <h1>Page Not Found</h1>
        <p class="lead">Unfortunately, the page <code>/<?php echo current_url(); ?></code> could not be found.</p>
      </hgroup>
    </header>
    <p>Your best bet is either to try the <a href="<?php echo base_url(); ?>">home page</a> or go and cry in a corner (although I don't recommend the latter).</p>
  </article>
</section>

<?php theme_include('footer'); ?>