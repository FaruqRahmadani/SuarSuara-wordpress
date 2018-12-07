<?php get_header() ?>
<div id="nav-frame" <?php if (is_admin_bar_showing()) echo "style='top: 32px'" ?>>
  <div class="uk-container">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo uk-padding-remove" href="#"><img src="<?= get_template_directory_uri()."/img/logo.png" ?>" alt="suarsuara"></a>
      </div>
      <div class="uk-navbar-right">
        <div class="main-menu">
          <ul class="uk-navbar-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="store.html">STORE</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a class="uk-navbar-toggle uk-float-right uk-padding-small" href="#search" uk-search-icon uk-toggle></a></li>
          </ul>
        </div>
        <a class="uk-padding-remove uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon href="#" uk-toggle="target: #menuresv"></a>
      </div>
    </div>

  </nav>
</div>
</div>

<div class="uk-container">
  <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" uk-slideshow="ratio: 5:2; animation: fade">
    <ul class="uk-slideshow-items">
      <li><img src="<?= get_template_directory_uri()."/img/slides/slide1.jpg" ?>" alt="image" uk-cover></li>
      <li><img src="<?= get_template_directory_uri()."/img/slides/slide2.jpg" ?>" alt="image" uk-cover></li>
      <li><img src="<?= get_template_directory_uri()."/img/slides/slide3.jpg" ?>" alt="image" uk-cover></li>
    </ul>
    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
  </div>

  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title">NEWS</h1>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img src="<?= get_template_directory_uri()."/img/light.jpg" ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="#">Lorem ipsum dolor sit amet</a></h2>
              <div class="post-date">01 OKTOBER 2018</div>
              <p class="uk-margin-remove-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              <a class="read-more" href="#">read more...</a>
            </div>
          </div>
        </article>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img src="<?= get_template_directory_uri()."/img/light.jpg" ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="#">Lorem ipsum dolor sit amet</a></h2>
              <div class="post-date">01 OKTOBER 2018</div>
              <p class="uk-margin-remove-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              <a class="read-more" href="#">read more...</a>
            </div>
          </div>
        </article>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img src="<?= get_template_directory_uri()."/img/light.jpg" ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="#">sapiente animi dolorem similique delectus dolorum</a></h2>
              <div class="post-date">01 OKTOBER 2018</div>
              <p class="uk-margin-remove-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <a class="read-more" href="#">read more...</a>
            </div>
          </div>
        </article>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img src="<?= get_template_directory_uri()."/img/light.jpg" ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="#">sapiente animi dolorem similique delectus dolorum</a></h2>
              <div class="post-date">01 OKTOBER 2018</div>
              <p class="uk-margin-remove-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <a class="read-more" href="#">read more...</a>
            </div>
          </div>
        </article>
        <article>
          <div class="uk-flex" uk-grid>
            <div class="uk-width-1-3@m uk-flex-first">
              <img src="<?= get_template_directory_uri()."/img/light.jpg" ?>" alt="Image">
            </div>
            <div class="uk-width-2-3@m">
              <h2 class="article-title uk-margin-remove-bottom"><a href="#">sapiente animi dolorem similique delectus dolorum</a></h2>
              <div class="post-date">01 OKTOBER 2018</div>
              <p class="uk-margin-remove-vertical">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <a class="read-more" href="#">read more...</a>
            </div>
          </div>
        </article>
      </div>
      <div class="uk-width-1-3@m">
        <h1 class="main-title">HIGHLIGHT VIDEO</h1>

        <div class="videowrapper">
          <iframe width="auto" height="100%" allowfullscreen
          src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1" class="video">
        </iframe>
      </div>
      <div class="widget">
        <h1 class="main-title">CATEGORY</h1>
        <ul class="uk-list">
          <li><a class="category" href="#">CATEGORY</a></li>
          <li><a class="category" href="#">CATEGORY</a></li>
          <li><a class="category" href="#">CATEGORY</a></li>
          <li><a class="category" href="#">CATEGORY</a></li>
          <li><a class="category" href="#">CATEGORY</a></li>
        </ul>
      </div>
      <div class="widget">
        <h1 class="main-title">EVENTS</h1>
        <section id="events">
          <div class="list-events">
            <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
            <ul class="uk-list uk-margin-remove-vertical">
              <li>
                <span uk-icon="icon:calendar; ratio:.8"></span>
                <span class="uk-text-middle uk-margin-small-right">10 Oktober 2018</span>

                <span uk-icon="icon:clock; ratio:.8"></span>
                <span class="uk-text-middle">15:00 - Finish</span>
              </li>
              <li>
                <span uk-icon="icon:location; ratio:.8"></span>
                <span class="uk-text-middle">Halaman Rattan Inn</span>
              </li>
            </ul>
          </div>
          <div class="list-events">
            <h4><a href="#">consectetur adipisicing elit</a></h4>
            <ul class="uk-list uk-margin-remove-vertical">
              <li>
                <span uk-icon="icon:calendar; ratio:.8"></span>
                <span class="uk-text-middle uk-margin-small-right">10 Oktober 2018</span>

                <span uk-icon="icon:clock; ratio:.8"></span>
                <span class="uk-text-middle">15:00 - Finish</span>
              </li>
              <li>
                <span uk-icon="icon:location; ratio:.8"></span>
                <span class="uk-text-middle">Halaman Rattan Inn</span>
              </li>
            </ul>
          </div>
          <div class="list-events">
            <h4><a href="#">Quam dolores atque ratione sit nesciunt</a></h4>
            <ul class="uk-list uk-margin-remove-vertical">
              <li>
                <span uk-icon="icon:calendar; ratio:.8"></span>
                <span class="uk-text-middle uk-margin-small-right">10 Oktober 2018</span>

                <span uk-icon="icon:clock; ratio:.8"></span>
                <span class="uk-text-middle">15:00 - Finish</span>
              </li>
              <li>
                <span uk-icon="icon:location; ratio:.8"></span>
                <span class="uk-text-middle">Halaman Rattan Inn</span>
              </li>
            </ul>
          </div>
          <div class="list-events">
            <h4><a href="#">Quam dolores atque ratione sit nesciunt</a></h4>
            <ul class="uk-list uk-margin-remove-vertical">
              <li>
                <span uk-icon="icon:calendar; ratio:.8"></span>
                <span class="uk-text-middle uk-margin-small-right">10 Oktober 2018</span>

                <span uk-icon="icon:clock; ratio:.8"></span>
                <span class="uk-text-middle">15:00 - Finish</span>
              </li>
              <li>
                <span uk-icon="icon:location; ratio:.8"></span>
                <span class="uk-text-middle">Halaman Rattan Inn</span>
              </li>
            </ul>
          </div>

        </section>
      </div>
    </div>
  </div>
</section>
<section id="info">
</section>

</div>
<?php get_footer() ?>
