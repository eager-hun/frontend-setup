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

    <header id="page__header" class="page__level page__header">
      <div class="container">
        <div class="row">
          <div class="column">
            <a href="#" class="header__site-name">Site name</a>
          </div>
        </div>
      </div>
    </header>

    <div id="page__main" class="page__level page__main">
      <div class="container">
        <div class="row">
          <div class="column column--main wide-16 wide-push-8">
            <h1 class="page__title"><?php print $page_title; ?></h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus ut augue viverra, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut <a href="#">nunc fringilla gravida</a> vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <h2>Heading type two</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus
              <a href="#">ut augue viverra</a>, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <h3>Heading type three</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus ut augue viverra, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <h4>Heading type four</h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus ut augue viverra, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <h5>Heading type five</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus ut augue viverra, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <h6>Heading type six</h6>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in malesuada leo. Aenean elementum dictum mauris nec venenatis. Sed vehicula nunc at augue lacinia, vel cursus ligula interdum. Vivamus ut augue viverra, luctus leo a, mattis orci.</p>

            <p>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna, vestibulum non ipsum eget, ultricies lobortis orci. Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</p>

            <ul><li>Sed a libero ut nunc fringilla gravida vel ut nibh. Ut et condimentum tellus. Donec dolor magna.</li>
              <li>Vestibulum non ipsum eget, ultricies lobortis orci.

                <ul><li>Donec sit amet neque pretium, elementum ligula eu, maximus nisi.</li>
                  <li>Aliquam facilisis odio sed fermentum molestie. Cras a lorem ac odio hendrerit.</li>
                </ul></li>
              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                <ul><li>Lacinia id nec tortor. Cras sagittis luctus odio, non sollicitudin sapien consequat ut.</li>
                </ul></li>
              <li>Morbi lectus arcu, porta id mattis a, egestas sit amet lorem.</li>
            </ul><p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus convallis lectus elit, et posuere nunc tempus id. Suspendisse at scelerisque ligula, ut sollicitudin nulla. In ut pharetra nulla. Quisque quis justo in sem efficitur elementum.</p>

            <ol><li>Integer dapibus, mi eget efficitur dictum,</li>
              <li>diam ligula cursus arcu, vel ultricies nulla arcu sed nibh,</li>
              <li>proin vulputate rhoncus metus sed tempor,

                <ul><li>aliquam efficitur maximus ex et tincidunt,</li>
                  <li>sed odio odio, rhoncus et ex eu,</li>
                  <li>tincidunt consectetur ligula. Phasellus pharetra turpis.</li>
                </ul></li>
              <li>Non velit dictum, eu auctor arcu sollicitudin.

                <ul><li>sed imperdiet mi fermentum elit.</li>
                </ul></li>
              <li>Nunc sagittis volutpat ultrices. Nam consequat massa ligula.</li>
            </ol><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium accumsan neque sit amet aliquam. Curabitur a purus euismod nibh laoreet commodo. Etiam tincidunt felis posuere, tincidunt nisl pretium, congue ligula. Fusce nunc est, aliquet eu ipsum vitae, finibus laoreet ex.</p>

            <p id="anchor--id-test">HTML id test.</p>

            <p>Integer nec tortor in erat semper tincidunt nec at nibh. Curabitur fermentum tellus nec dui sagittis semper. Nullam tristique aliquet odio. Integer sagittis purus turpis, in sodales lectus ullamcorper vitae.</p>

            <dl><dt>Definition term</dt>
              <dd>Definition description, such as praesent nec feugiat elit. Donec viverra augue in massa pretium, a tincidunt est dictum.</dd>
              <dt>Definition term</dt>
              <dd>Definition description, such as praesent nec feugiat elit. Donec viverra augue in massa pretium, a tincidunt est dictum.</dd>
              <dt>Definition term</dt>
              <dd>Definition description, such as praesent nec feugiat elit. Donec viverra augue in massa pretium, a tincidunt est dictum.</dd>
              <dt>Definition term</dt>
              <dd>Definition description, such as praesent nec feugiat elit. Donec viverra augue in massa pretium, a tincidunt est dictum.</dd>
            </dl><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi dapibus, justo condimentum accumsan ultrices, augue dolor condimentum sem, vitae vestibulum augue lacus nec lorem. Pellentesque porttitor massa interdum lorem mattis tincidunt. Nulla eget suscipit massa. Cras nec eros velit. Donec vel feugiat tellus.</p>

            <blockquote>
              <p>This is a standard blockquote.</p>

              <p>Nunc eget commodo sem. Quisque sit amet convallis tortor, nec tempus neque. Vivamus quis nibh a urna auctor dictum id in sapien. Lorem ipsum dolor sit amet.</p>
            </blockquote>

            <p>Integer nec tortor in erat semper tincidunt nec at nibh. Curabitur fermentum tellus nec dui sagittis semper. Nullam tristique aliquet odio. Integer sagittis purus turpis, in sodales lectus ullamcorper vitae.</p>








          </div><!-- /.column--main -->

          <div class="column column--sidebar wide-7 wide-pull-17">
            <button class="button" type="button" data-toggle="example-dropdown">Toggle Dropdown</button>
            <div class="dropdown-pane" id="example-dropdown" data-dropdown data-auto-focus="true">
              Example form in a dropdown.
              <form>
                <div class="row">
                  <div class="narrow-l-12 columns">
                    <label>Name
                      <input type="text" placeholder="Kirk, James T.">
                    </label>
                  </div>
                  <div class="narrow-l-12 columns">
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
          </div><!-- /.column--sidebar -->


        </div>
      </div>
    </div><!-- /#page__main -->

    <footer id="page__footer" class="page__level page__footer">
      <div class="container">
        <div class="row">
          <div class="column">
            <p><a href="#">Footer.</a></p>
          </div>
        </div>
      </div>
    </footer>

    <?php print $scripts; ?>
  </body>
</html>
