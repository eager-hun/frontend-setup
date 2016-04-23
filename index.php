<?php
/**
 * @file
 * Main page template.
 */

// #############################################################################
// Assets-related setup.
// See http://foundation.zurb.com/sites/docs/installation.html (For 6.1.2).

$base_path        = '/frontend-setup';

$bower_components = $base_path . '/bower_components';
$css_location     = $base_path . '/build/css';
$js_location      = $base_path . '/build/js';

// Looks like Foundation does its resets, so we could spare including normalize?
// <link rel="stylesheet" href="{$bower_components}/normalize-css/normalize.css">
$stylesheets = <<<EOT
  <link rel="stylesheet" href="{$css_location}/style-bundle-foundation.css">
  <link rel="stylesheet" href="{$css_location}/style-bundle-custom.css">
EOT;

$scripts = <<<EOT
  <script       src="{$js_location}/libs.min.js"></script>
  <script src="{$js_location}/foundation.min.js"></script>
  <script     src="{$js_location}/custom.min.js"></script>
EOT;


// #############################################################################
// Content-related setup.

$html_title = 'Frontend setup';
$page_title = 'Page title';


// #############################################################################
// Page template follows.
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php /* That's an empty favicon, prevents 404s. */ ?>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title><?php print $html_title; ?></title>
    <?php print $stylesheets; ?>
  </head>
  <body>
    <div id="page__wrap" class="page__wrap">

      <header id="page__header" class="page__level page__header">
        <div class="container">
          <div class="row">
            <div class="column">
              <a href="#" class="header__site-name">Site name</a>
            </div>
          </div>
        </div>
      </header>

      <div id="page__main" class="page__main">

        <div class="page__level">
          <div class="container">
            <div class="row layout--2sb has-no-sb">
              <div class="column column--main">

                <h1 class="page__title">Feature demos</h1>

                <ul class="accordion" data-accordion>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Texts for checking typography</a>
                    <div class="accordion-content" data-tab-content>
                      <?php include('sample-contents/sample-texts.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Lists for checking typography</a>
                    <div class="accordion-content" data-tab-content>
                      <?php include('sample-contents/sample-lists.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Sample layouts with grids</a>
                    <div class="accordion-content" data-tab-content>
                      <?php include('sample-contents/sample-grid-layouts.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">On-demand floated- and flexboxified grids</a>
                    <div class="accordion-content" data-tab-content>
                      <?php include('sample-contents/on-demand-grids-and-flexboxes.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">"Layout 2 sidebars" - a predefined layout set</a>
                    <div class="accordion-content" data-tab-content>
                      <?php include('sample-contents/layout-2-sidebars.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Page example with Foundation grid classes</a>
                    <div class="accordion-content reset" data-tab-content>
                      <?php include('sample-contents/page-example-with-foundation-classes.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Page example with "Layout 2 sidebars"</a>
                    <div class="accordion-content reset" data-tab-content>
                      <?php include('sample-contents/page-example-with-layout-2-sidebars.php');?>
                    </div>
                  </li>

                  <li class="accordion-item" data-accordion-item>
                    <a href="#" class="accordion-title">Next thing</a>
                    <div class="accordion-content" data-tab-content>
                      This is where the next thing will be able to reside.
                    </div>
                  </li>
                </ul>

              </div>
            </div>

          </div>
        </div><!-- /.page__level -->

      </div><!-- /#page__main -->

      <div class="footer__room-preserve"></div>
    </div><!-- /#page__wrap -->

    <footer id="page__footer" class="page__level page__footer">
      <div class="container">
        <div class="row">
          <div class="column l-fit">
            <p><a href="#">Footer.</a></p>
          </div>
        </div>
      </div>
    </footer>

    <?php print $scripts; ?>
  </body>
</html>
