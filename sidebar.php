<div class="uk-width-1-3@m">
  <h1 class="main-title">HIGHLIGHT VIDEO</h1>
  <div class="videowrapper">
    <iframe width="auto" height="100%" allowfullscreen
    src="<?= get_option('url_highlight_youtube') ?>" class="video"></iframe>
  </div>
  <div class="widget">
    <h1 class="main-title">CATEGORY</h1>
    <ul class="uk-list">
      <?php
        $categories = get_categories();
        foreach($categories as $category) :
      ?>
          <li><a class="category" href="<?= get_category_link( $category->term_id ) ?>"><?= $category->name ?></a></li>
      <?php
        endforeach;
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