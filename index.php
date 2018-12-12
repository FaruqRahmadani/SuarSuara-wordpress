<?php get_header() ?>
<div class="uk-container">
  <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" uk-slideshow="autoplay:true; ratio: 5:2; animation: fade">
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
          $query = new WP_Query( array('post_type' => 'any') );
            while ( $query->have_posts() ) : $query->the_post();
        ?>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first uk-inline">
              <img src="<?= has_post_thumbnail()?wp_get_attachment_url(get_post_thumbnail_id()):get_img('logo.png') ?>" alt="Image" class="uk-position-center">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="<?= get_the_permalink() ?>"><?= the_title() ?> </a></h2>
              <div class="post-date"><?= get_the_date() ?></div>
              <p class="uk-margin-remove-vertical"><?= get_the_excerpt() ?></p>
              <a class="read-more" href="<?= get_the_permalink() ?>">read more...</a>
            </div>
          </div>
        </article>
        <?php
          endwhile;
        ?>
      </div>
      <div class="uk-width-1-3@m">
        <h1 class="main-title">HIGHLIGHT VIDEO</h1>
        <div class="videowrapper">
          <iframe width="auto" height="100%" allowfullscreen
          src="<?= get_option('url_highlight_youtube') ?>" class="video">
        </iframe>
      </div>
      <div class="widget">
        <h1 class="main-title">CATEGORY</h1>
        <ul class="uk-list">
          <?php
          $categories = get_categories();
          foreach($categories as $category) {
            ?>
            <li><a class="category" href="#"><?= $category->name ?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
      <div class="widget">
        <h1 class="main-title">EVENTS</h1>
        <section id="events">
          <?php
            $query = new WP_Query( array('post_type' => 'events', 'posts_per_page' => 5) );
            while ( $query->have_posts() ) : $query->the_post();
            $postId = get_the_ID();
          ?>
          <div class="list-events">
            <h4><a href="<?= get_the_permalink() ?>"><?= the_title() ?></a></h4>
            <ul class="uk-list uk-margin-remove-vertical">
              <li>
                <span uk-icon="icon:calendar; ratio:.8"></span>
                <span class="uk-text-middle uk-margin-small-right"><?= get_post_meta($postId, 'event_date', true) ?></span>
                <span uk-icon="icon:clock; ratio:.8"></span>
                <span class="uk-text-middle"><?= get_post_meta($postId, 'event_time', true) ?></span>
              </li>
              <li>
                <span uk-icon="icon:location; ratio:.8"></span>
                <span class="uk-text-middle"><?= get_post_meta($postId, 'event_location', true) ?></span>
              </li>
            </ul>
          </div>
          <?php
            endwhile;
          ?>
        </section>
      </div>
    </div>
  </div>
</section>
</div>
<?php get_footer() ?>
