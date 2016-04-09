<?php


// #############################################################################
// Assets-related.
// See http://foundation.zurb.com/sites/docs/installation.html (For 6.1.2).

$base_path        = '/frontend-setup';

$bower_components = $base_path . '/bower_components';
$css_location     = $base_path . '/build/css';
$js_location      = $base_path . '/build/js';

$stylesheets = <<<EOT
  <link rel="stylesheet" href="{$bower_components}/normalize-css/normalize.css">
  <link rel="stylesheet"     href="{$css_location}/foundation-styles.css">
  <link rel="stylesheet"     href="{$css_location}/custom-styles.css">
EOT;

$scripts = <<<EOT
  <script       src="{$js_location}/libs.min.js"></script>
  <script src="{$js_location}/foundation.min.js"></script>
  <script     src="{$js_location}/custom.min.js"></script>
EOT;


// #############################################################################
// Content-related.

$html_title = 'Frontend setup';
$page_title = 'Page title.';


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

    <header id="page__header" class="page__header">
      <h1 class="page__title"><?php print $page_title; ?></h1>
    </header>

    <div id="page__main" class="page__main">



      <button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
      <div class="dropdown-pane" id="example-dropdown" data-dropdown data-auto-focus="true">
        Example form in a dropdown.
        <form>
          <div class="row">
            <div class="medium-6 columns">
              <label>Name
                <input type="text" placeholder="Kirk, James T.">
              </label>
            </div>
            <div class="medium-6 columns">
              <label>Rank
                <input type="text" placeholder="Captain">
              </label>
            </div>
          </div>
        </form>
      </div>
      <button class="button" type="button" data-toggle="example-dropdown-1">Hoverable Dropdown</button>
      <div class="dropdown-pane" id="example-dropdown-1" data-dropdown data-hover="true">
        Just some junk that needs to be said. Or not. Your choice.
      </div>




    </div><!-- /#page__main -->

    <?php print $scripts; ?>
  </body>
</html>
