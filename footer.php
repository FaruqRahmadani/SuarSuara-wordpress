<footer>

  <section class="footer-top">
    <div class="uk-container uk-text-center">
      <h2 class="uk-text-center">CONNECT WITH US</h2>
      <ul class="sosmed">
        <li><a class="socmed-bottom" href="<?= get_option('url_fb') ?>"><img data-src="<?= get_img('fb.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_twitter') ?>"><img data-src="<?= get_img('tw.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_ig') ?>"><img data-src="<?= get_img('ig.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
        <li><a class="socmed-bottom" href="<?= get_option('url_youtube') ?>"><img data-src="<?= get_img('yt.svg', 'socmed') ?>" alt="facebook" uk-img></a></li>
      </ul>
      <h2 class="uk-text-center">SUPPORT BY :</h2>
      <ul class=support>
        <li><img src="<?= get_img('sembilan.png', 'support') ?>" alt="Sembilan"></li>
        <li><img src="<?= get_img('vistud.png', 'support') ?>" alt="Vision Studio"></li>
        <li><img src="<?= get_img('rollingstone.png', 'support') ?>" alt="Rolling Stone"></li>
        <li><img src="<?= get_img('youtube.png', 'support') ?>" alt="Youtube"></li>
        <li><img src="<?= get_img('fb.png', 'support') ?>" alt="Facebook"></li>
        <li><img src="<?= get_img('twitter.png', 'support') ?>" alt="Twitter"></li>
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
      <li><a href="<?= get_home_url() ?>">BERANDA</a></li>
      <li><a href="<?= get_category_link(get_cat_ID('Band')) ?>">STORE</a></li>
      <?php wp_list_pages( array(
        'title_li'    => '',
      ) ) ?>
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
