<footer>

  <section class="footer-top">
    <div class="uk-container uk-text-center">
      <h2 class="uk-text-center">CONNECT WITH US</h2>
      <ul class="uk-padding-remove">
        <a class="socmed-bottom" href="<?= get_option('url_fb') ?>"><img data-src="<?= get_template_directory_uri()."/img/socmed/fb.svg" ?>" alt="facebook" uk-img></a>
        <a class="socmed-bottom" href="<?= get_option('url_twitter') ?>"><img data-src="<?= get_template_directory_uri()."/img/socmed/tw.svg" ?>" alt="facebook" uk-img></a>
        <a class="socmed-bottom" href="<?= get_option('url_ig') ?>"><img data-src="<?= get_template_directory_uri()."/img/socmed/ig.svg" ?>" alt="facebook" uk-img></a>
        <a class="socmed-bottom" href="<?= get_option('url_youtube') ?>"><img data-src="<?= get_template_directory_uri()."/img/socmed/yt.svg" ?>" alt="facebook" uk-img></a>
      </ul>

    </div>
  </section>
  <section class="footer-bottom">
    <div class="uk-container">
      <p>&copy 2018 - UnderdogsMovement | SuarSuara</p>
    </div>
  </section>
</footer>



<div id="search" class="uk-modal-full uk-modal" uk-modal>
  <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
    <button class="uk-modal-close-full" type="button" uk-close></button>
    <form class="uk-search uk-search-large">
      <input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus>
    </form>
  </div>
</div>

<div id="menuresv" uk-offcanvas="mode: reveal; overlay: true">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>
    <ul class="uk-list uk-list-divider">
      <li><a href="index.html">HOME</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="store.html">STORE</a></li>
      <li><a href="#">ABOUT US</a></li>
      <li>
        <form class="uk-search uk-search-default">
          <a href="" class="uk-search-icon-flip" uk-search-icon></a>
          <input class="uk-search-input" type="search" placeholder="Search...">
        </form>
      </li>
    </ul>
  </div>
</div>
</body>
</html>
<?php wp_footer() ?>
