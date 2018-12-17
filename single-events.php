<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title">EVENTS</h1>
        <article>
          <?php
            if(have_posts()):
              while( have_posts() ): the_post();
                $postId = get_the_ID();
          ?>
            <h2 class="article-title"><?= the_title() ?></h2>
            <div class="post-date"><?= get_the_date() ?></div>
            <div>
              <span uk-icon="icon:calendar; ratio:.8"></span>
              <span class="uk-text-middle uk-margin-small-right"><?= get_post_meta($postId, 'event_date', true) ?></span>
              <span uk-icon="icon:clock; ratio:.8"></span>
              <span class="uk-text-middle"><?= get_post_meta($postId, 'event_time', true) ?></span>
              <span uk-icon="icon:location; ratio:.8"></span>
              <span class="uk-text-middle"><?= get_post_meta($postId, 'event_location', true) ?></span>
            </div>
            <p><?= the_content() ?></p>
          <?php
              endwhile;
            endif;
          ?>
        </article>
      </div>
      <?php include('sidebar.php') ?>
  </div>
</div>
<?php get_footer() ?>
