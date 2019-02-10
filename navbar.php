<div id="nav-frame" <?php if (is_admin_bar_showing()) echo "style='top: 32px'" ?>>
  <div class="uk-container">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo uk-padding-remove" href="<?= get_home_url() ?>"><img src="<?= get_img('logo.png') ?>" alt="suarsuara"></a>
      </div>
      <div class="uk-navbar-right">
        <div class="main-menu">
          <ul class="uk-navbar-nav">
            <?php showMenu() ?>
            <li><a class="uk-navbar-toggle uk-float-right uk-padding-small" href="#search" uk-search-icon uk-toggle></a></li>
          </ul>
        </div>
        <a class="uk-padding-remove uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon href="#" uk-toggle="target: #menuresv"></a>
      </div>
    </nav>
  </div>
</div>
