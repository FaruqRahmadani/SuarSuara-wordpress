<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <?php
      if(have_posts()):
        while( have_posts() ): the_post();
          $postId = get_the_ID();
    ?>
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title">PRODUCT</h1>
        <article>
          <h2 class="article-title"><?= the_title() ?></h2>
          <p><?= the_content() ?></p>
        </article>
      </div>
      <div class="uk-width-1-3@m">
        <h1 class="main-title">INFORMATION</h1>
        <div class="brand-info">
          <div class="box-info">
            <h3>DESCRIPTION</h3>
            <p><?= nl2br(get_post_meta($postId, 'band_description', true)) ?></p>
          </div>
          <div class="box-info">
            <h3>CONCTACT</h3>
            <span class="phone">
              <p>
                <?= nl2br(get_post_meta($postId, 'band_contact', true)) ?>
              </p>
            </span>
          </div>
        </div>
      </div>
    </div>
    <?php
        endwhile;
      endif;
    ?>
  </section>
</div>
<?php get_footer() ?>
