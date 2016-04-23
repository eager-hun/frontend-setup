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
            <div class="row">

              <!-- Main column. -->
              <div class="column column--main wide-17 wide-push-7 wide-m-16 wide-m-push-8">
                <h1 class="page__title"><?php print $page_title; ?></h1>

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
                    <a href="#" class="accordion-title">Next thing</a>
                    <div class="accordion-content" data-tab-content>
                      This is where the next thing will be able to reside.
                    </div>
                  </li>
                </ul>

              </div><!-- /.column--main -->

              <!-- Sidebar. -->
              <div class="column column--sidebar wide-7 wide-pull-17 wide-m-pull-17">

                <div class="box">
                  <div class="box__title">Box title one</div>
                  <div class="box__content">
                    <?php include('sample-contents/sample-dropdowns.php');?>
                    <p>Let us add a little text here, like this one.</p>
                  </div>
                </div>

                <div class="box">
                  <div class="box__title">Box title two, and this one is longer</div>
                  <div class="box__content">
                    <?php include('sample-contents/placeholder-text-small-amount.php');?>
                  </div>
                </div>

                <div class="box">
                  <div class="box__title">Box title three</div>
                  <div class="box__content">
                    <?php include('sample-contents/placeholder-text-small-amount.php');?>
                  </div>
                </div>

              </div><!-- /.column--sidebar -->

            </div>
          </div>
        </div><!-- /.page__level -->


        <div class="page__level">
          <div class="container grid-demos">

            <h2>"Layout two sidebars" variants and states</h2>

            <p>This layout is used (best) for the primary layout of a page.</p>



            <h3>Variant: content in the middle</h3>
            <p><code>.layout--2sb.content-in-mid</code></p>



            <h4>Only one sidebar</h4>
            <p><code>.layout--2sb.content-in-mid.has-1-sb</code></p>



            <h5>Only sidebar 1</h5>

            <p><code>.layout--2sb.content-in-mid.has-1-sb.sb-1</code></p>

            <!--
            CLASSES EXPLAINED:
            - layout with (potentially) two sidebars;
            - main content will be in middle, sidebars come up to its sides;
            - currently only one sidebar is present;
            - the one present sidebar is sidebar 1.
            -->
            <div class="row layout--2sb content-in-mid has-1-sb sb-1">

              <div class="column column--main">
                <div class="box"><div class="box__content">Main</div></div>
              </div>

              <div class="column column--sidebar column--sb--1">
                <div class="box"><div class="box__content">Sidebar 1</div></div>
              </div>

            </div>



            <h5>Only sidebar 2</h5>

            <p><code>.layout--2sb.content-in-mid.has-1-sb.sb-2</code></p>

            <!--
            CLASSES EXPLAINED:
            - layout with (potentially) two sidebars;
            - main content will be in middle, sidebars come up to its sides;
            - currently only one sidebar is present;
            - the one present sidebar is sidebar 2.
            -->
            <div class="row layout--2sb content-in-mid has-1-sb sb-2">

              <div class="column column--main">
                <div class="box"><div class="box__content">Main</div></div>
              </div>

              <div class="column column--sidebar column--sb--2">
                <div class="box"><div class="box__content">Sidebar 2</div></div>
              </div>

            </div>



            <h4>Both sidebars</h4>

            <p><code>.layout--2sb.content-in-mid.has-2-sb</code></p>

            <!--
            CLASSES EXPLAINED:
            - layout with (potentially) two sidebars;
            - main content will be in middle, sidebars come up to its sides;
            - currently both sidebars are present.
            -->
            <div class="row layout--2sb content-in-mid has-2-sb">

              <div class="column column--main">
                <div class="box"><div class="box__content">Main</div></div>
              </div>

              <div class="column column--sidebar column--sb--1">
                <div class="box"><div class="box__content">Sidebar 1</div></div>
              </div>

              <div class="column column--sidebar column--sb--2">
                <div class="box"><div class="box__content">Sidebar 2</div></div>
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
