<?php

// #############################################################################
// Assets-related.

$base_path           = '/frontend-setup';

$bower_components    = $base_path . '/bower_components';
$css_location        = $base_path . '/build/css';
$js_location         = $base_path . '/build/js';


// -----------------------------------------------------------------------------
// These make it easier to print <script> tags for various .js files while
// debugging the build script.

$scripts = [
  'libs.min.js',
  'custom.min.js',
];

function script_tags($scripts, $js_location) {
  $output = '';
  foreach ($scripts as $file) {
    $output .= '<script src="' . $js_location . '/' . $file . '"></script>' . PHP_EOL;
  }
  return $output;
}


// #############################################################################
// Content.

$html_title = 'Frontend setup';

$page_title = 'Page title.';

$body_text = <<<EOT
  <p>Page paragraph. Lovely.</p>

  <div class="has-vertical-space">

    <div class="some-flexbox">
      <div class="flex-item">Flex item.</div>
      <div class="flex-item">Flex item.</div>
      <div class="flex-item">Flex item.</div>
    </div>

  </div>


  <div class="has-vertical-space">


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

  </div>

EOT;


// #############################################################################
// Page template follows.

// See http://foundation.zurb.com/sites/docs/installation.html (For 6.1.2).

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php print $html_title; ?></title>

    <link rel="stylesheet" href="<?php print $bower_components . '/normalize-css/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php print $css_location . '/foundation-styles.css'; ?>">
    <link rel="stylesheet" href="<?php print $css_location . '/custom-styles.css'; ?>">

    <?php /* That's an empty favicon, prevents 404s. */ ?>
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">

  </head>
  <body>

    <header class="header">
      <h1 class="page__title"><?php print $page_title; ?></h1>
    </header>

    <div class="main-content">
      <?php print $body_text; ?>
    </div>

    <?php print script_tags($scripts, $js_location); ?>

  </body>
</html>
