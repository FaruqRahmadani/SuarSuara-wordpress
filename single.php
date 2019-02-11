<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title"><?= the_title() ?></h1>
        <article>
          <div class="post-date"><?= get_the_date() ?></div>
          <?php
            if(have_posts()):
              while( have_posts() ): the_post();
          ?>
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
