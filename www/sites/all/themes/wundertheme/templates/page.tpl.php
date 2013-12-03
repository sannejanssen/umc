<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 *
 * @link http://api.drupal.org/api/drupal/modules--system--page.tpl.php/7
 *
 * Wunderkraut changes
 * --------------------------------------------------------------------
 * - Add HTML5 asesomenesssss
 * - Alter regions
 * - Remove id's
 * -
 */

?>
<div class="page-wrapper">
  <div class="page">
    <header role="banner" class="header">
      <div class="container">

        <div class="header-top">
          <?php if ($logo): ?>
            <figure class="logo">
              <?php if($is_front): ?>
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              <?php else : ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
                  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
              <?php endif; ?>
            </figure>
          <?php endif; ?>

          <a href="#" class="navigation-toggle"><?php print t('Main navigation'); ?></a>
        </div>

        <?php if ($page['navigation']): ?>
          <nav class="primary-navigation" role="navigation">
            <?php print render($page['navigation']); ?>
          </nav>
        <?php endif; ?>

        <?php if ($page['secondary_navigation']): ?>
          <nav class="secondary-navigation" role="navigation">
            <?php print render($page['secondary_navigation']); ?>
          </nav>
        <?php endif; ?>

        <?php if ($page['language']): ?>
          <div class="language">
            <?php print render($page['language']); ?>
          </div>
        <?php endif; ?>

        <div class="site-info">
          <?php if($site_name): ?>
            <?php if($is_front): ?>
              <h1 class="site-name"><?php print $site_name; ?></h1>
            <?php else : ?>
              <p class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></p>
            <?php endif; ?>
          <?php endif; ?>

          <div class="facebook">
            <div class="fb-like" data-href="http://www.facebook.com/pages/United-Music-Concepts-UMC/142397865837084" data-send="false" data-layout="button_count" data-width="120" data-show-faces="false">
            </div>
          </div>
        </div>

        <div class="header-img" />
      </div>

    </header>

    <?php if($messages){ ?>
      <div class="message">
        <div class="container">
          <div class="drupal-messages">
            <?php print $messages; ?>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="container">

      <div role="main" class="main"><?php print render($page['content']); ?></div>
      <aside role="complementary" class="sidebar-first">sidebar first</aside>
      <aside role="complementary" class="sidebar-second">sidebar second</aside>    
    </div>

    <?php if ($page['footer']): ?>
      <div class="container">
        <footer role="contentinfo" class="footer">
          <?php print render($page['footer']); ?>
        </footer>
      </div>
    <?php endif; ?>

  </div> <!-- end page //-->
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/all.js#xfbml=1&appId=107728735990764";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
/*


<div class="page">
  <header role="banner">
    <div class="container">

      <?php if ($logo): ?>
        <figure class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        </figure>
      <?php endif; ?>

      <?php if($site_name OR $site_slogan ): ?>
        <div class="site-name-slogan">
          <?php if($site_name): ?>
            <?php if($is_front): ?>
              <h1 class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
            <?php else : ?>
              <p class="site-name"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></p>
            <?php endif; ?>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <p class="slogan"><?php print $site_slogan; ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div class="header">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>

    </div>
  </header>

  <?php if ($page['primary_navigation']): ?>
    <nav class="primary_navigation">
      <div class="container">
        <?php print render($page['primary_navigation']); ?>
      </div>
    </nav>
  <?php endif; ?>

  <div class="container">
    <?php if ($page['sidebar_first']): ?>
      <aside role="complementary" class="sidebar sidebar_first">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <div role="main" class="main">

      <?php if($page['highlighted']){ ?>
        <?php print render($page['highlighted']); ?>
      <?php } ?>

      

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
          <h1><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php print $breadcrumb; ?>

      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <?php if ($tabs['#primary']): ?>
        <nav class="tabs"><?php print render($tabs); ?></nav>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </div><!--/main-->

    <?php if ($page['sidebar_second']): ?>
    <aside role="complementary" class="sidebar sidebar_second">
      <?php print render($page['sidebar_second']); ?>
    </aside>
    <?php endif; ?>
  </div>
  <?php if ($page['footer']): ?>
    <footer role="contentinfo">
      <div class="container">
        <?php print render($page['footer']); ?>
      </div>
    </footer>
  <?php endif; ?>
</div>





*/