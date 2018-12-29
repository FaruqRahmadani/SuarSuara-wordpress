<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <h1 class="main-title">PRODUCT</h1>
    <div class="uk-grid">
      <?php
      $query = new WP_Query( array('post_type' => 'bands') );
      while ( $query->have_posts() ) : $query->the_post();
      ?>
      <div class="uk-width-1 uk-width-1-2@s uk-width-1-3@m uk-width-1-4@l">
        <div class="frame">
          <a href="<?= get_the_permalink() ?>"><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="images">
            <span><?= the_title() ?></span>
          </a>
        </div>
      </div>
      <?php
      endwhile;
      ?>
    </div>
  </section>
</div>
<?php get_footer() ?>
