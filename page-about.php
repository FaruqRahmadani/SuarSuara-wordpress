<?php
/* Template Name: About */
get_header();
?>
<div class="uk-container">
  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="main-title"><?= the_title() ?></h1>
        <p> <?php the_content(); ?> </p>
        <?php endwhile; endif; ?>
      </div>
      <?php include('sidebar.php') ?>
    </div>
  </section>
</div>
<?php get_footer() ?>
