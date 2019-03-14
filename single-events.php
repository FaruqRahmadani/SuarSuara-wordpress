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
          ?>
            <h2 class="article-title"><?= the_title() ?></h2>
            <div class="post-date"><?= get_the_date() ?></div>
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
