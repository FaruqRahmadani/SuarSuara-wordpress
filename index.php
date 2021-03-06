<?php get_header() ?>
<div class="uk-container">
  <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" uk-slideshow="autoplay:true; ratio: 7:3; animation: fade">
    <ul class="uk-slideshow-items">
      <?php
      $query = new WP_Query( array('post_type' => 'slider') );
      while ( $query->have_posts() ) : $query->the_post();
      if (has_post_thumbnail()):
        ?>
        <li><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="image" uk-cover></li>
        <?php
      endif;
    endwhile;
    ?>
  </ul>
  <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
  <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
  <ul class="uk-margin-remove uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>
<section id="content">
  <div uk-grid>
    <div class="uk-width-2-3@m">
      <h1 class="main-title">NEWS</h1>
      <?php
      $paged = get_query_var( 'paged' ) ?? 1;
      $query = new WP_Query( [
        'post_type' => ['post', 'events', 'bands', 'lapak'],
        'posts_per_page' => get_option( 'posts_per_page' ),
        'paged'     => $paged
        ] );
        while ( $query->have_posts() ) : $query->the_post();
        ?>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img class="thumbnail-post" src="<?= has_post_thumbnail()?wp_get_attachment_url(get_post_thumbnail_id()):get_img('logo.png') ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="<?= get_the_permalink() ?>"><?= the_title() ?></a></h2>
              <div class="post-date"><?= get_the_date() ?></div>
              <?php foreach (get_the_category() as $category): ?>
                <div class="post-category"><?= $category->cat_name ?></div>
              <?php endforeach; ?>
              <p class="uk-margin-remove-vertical"><?= get_the_excerpt() ?></p>
              <a class="read-more" href="<?= get_the_permalink() ?>">Selengkapnya...</a>
            </div>
          </div>
        </article>
        <?php
      endwhile;
      ?>
      <nav class="prev-next-posts">
        <div class="prev-posts-link">
          <?= get_next_posts_link( '<button class="uk-button uk-button-default uk-button-small"><span uk-icon="icon:  triangle-left"></span> Older Post</button>', $query->max_num_pages )?>
          <?= get_previous_posts_link( '<button class="uk-button uk-button-default uk-button-small">Newer Post <span uk-icon="icon:  triangle-right"></span></button>' ) ?>
        </div>
      </nav>
    </div>
    <?php include('sidebar.php') ?>
  </div>
</section>
</div>
<?php get_footer() ?>
