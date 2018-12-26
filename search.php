<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title">Search : <?php the_search_query(); ?></h1>
        <?php while ( have_posts() ) : the_post();?>
          <article>
            <div class="uk-flex" uk-grid>
              <div class="uk-width-1-3@m uk-flex-first">
                <img src="<?= has_post_thumbnail()?wp_get_attachment_url(get_post_thumbnail_id()):get_img('logo.png') ?>" alt="Image">
              </div>
              <div class="uk-width-2-3@m">
                <h2 class="article-title uk-margin-remove-bottom"><a href="<?= get_the_permalink() ?>"><?= the_title() ?></a></h2>
                <div class="post-date"><?= get_the_date() ?></div>
                <p class="uk-margin-remove-vertical"><?= get_the_excerpt() ?></p>
                <a class="read-more" href="<?= get_the_permalink() ?>">read more...</a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php include('sidebar.php') ?>
    </div>
  </section>
</div>
<?php get_footer() ?>
