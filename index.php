<?php get_header() ?>
<div class="uk-container">
  <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" uk-slideshow="autoplay:true; ratio: 5:2; animation: fade">
    <ul class="uk-slideshow-items">
      <?php
        $query = new WP_Query( array('post_type' => 'slider') );
        while ( $query->have_posts() ) : $query->the_post();
      ?>
        <li><img src="<?= wp_get_attachment_url(get_post_thumbnail_id()) ?>" alt="image" uk-cover></li>
      <?php endwhile ?>
    </ul>
    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    <ul class="uk-margin-remove uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
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
          src="<?= get_option('url_highlight_youtube') ?>" class="video">
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
</div>
<?php get_footer() ?>
