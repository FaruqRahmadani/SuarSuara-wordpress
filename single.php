<?php get_header() ?>
<div class="uk-container">
  <section id="content">
    <div uk-grid>
      <div class="uk-width-2-3@m">
        <h1 class="main-title"><?= the_title() ?></h1>
        <article>
          <div class="post-date"><?= get_the_date() ?></div>
          <?php foreach (get_the_category() as $category): ?>
            <div class="post-category"><?= $category->cat_name ?></div>
          <?php endforeach; ?>
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
