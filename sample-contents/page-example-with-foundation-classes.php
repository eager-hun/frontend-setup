<?php
/**
 * @file
 * On-demand-grid demonstrator items.
 */
?>

<!-- NOTE!
This row here is cheating, it's only needed here because this page example is
now being embedded into the internal structure of a page. In any real-life
scenario it's not needed. -->
<div class="row">



  <div class="page__level">
    <div class="container">
      <div class="row">

        <!-- Main column. -->
        <div class="column column--main wide-17 wide-push-7 wide-m-16 wide-m-push-8">
          <h1 class="page__title"><?php print $page_title; ?></h1>

          <ul class="accordion" data-accordion>

            <li class="accordion-item" data-accordion-item>
              <a href="#" class="accordion-title">Placeholder boxes</a>
              <div class="accordion-content" data-tab-content>
                <?php include('sample-contents/placeholder-boxes.php');?>
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
            <div class="box__title">Sample box</div>
            <div class="box__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

          <div class="box">
            <div class="box__title">Another box title, and this one is longer</div>
            <div class="box__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>

        </div><!-- /.column--sidebar -->

      </div>
    </div>
  </div><!-- /.page__level -->



</div>
