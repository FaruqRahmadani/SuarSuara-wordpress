<footer>

  <section class="footer-top">
    <div class="uk-container uk-text-center">
      <h2 class="uk-text-center">CONNECT WITH US</h2>
      <ul class="socmed">
        <li><a class="socmed-bottom" href="<?= get_option('url_fb') ?>"><img data-src="<?= get_img('fb.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_twitter') ?>"><img data-src="<?= get_img('tw.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_ig') ?>"><img data-src="<?= get_img('ig.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_youtube') ?>"><img data-src="<?= get_img('yt.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
      </ul>
      <div class="contact">
        <span>
          <strong><?= get_option('contact') ?></strong>
        </span>
      </div>
      <h2 class="uk-text-center">SUPPORT BY :</h2>
      <ul class=support>
        <?php
        $query = new WP_Query( array('post_type' => 'supports') );
        while ( $query->have_posts() ) : $query->the_post();
        if (has_post_thumbnail()):
          ?>
          <li><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="<?= the_title() ?>"></li>
          <?php
        endif;
      endwhile;
      ?>
    </ul>
  </div>
</section>
<section class="footer-bottom">
  <div class="uk-container">
    <p>&copy 2018 - underdogsmovement | suarsuara</p>
  </div>
</section>
</footer>

<div id="search" class="uk-modal-full uk-modal" uk-modal>
  <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
    <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
    <form class="uk-search uk-search-large" id="search" action="<?= home_url( '/' ) ?>" method="get">
      <input type="text" name="s" id="search" class="uk-search-input uk-text-center" placeholder="Cari..." value="<?php the_search_query(); ?>" />
    </form>
  </div>
</div>

<div id="menuresv" uk-offcanvas="mode: reveal; overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
    <ul class="uk-list uk-list-divider">
      <?php showMenu() ?>
      <li>
        <form class="uk-search uk-search-default"  id="search" action="<?= home_url( '/' ) ?>" method="get">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input type="text" name="s" id="search" class="uk-search-input uk-text-center" placeholder="Cari..." value="<?php the_search_query(); ?>" />
        </form>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
<?php wp_footer() ?>
