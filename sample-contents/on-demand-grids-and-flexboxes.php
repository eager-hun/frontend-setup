<?php
/**
 * @file
 * On-demand-grid demonstrator items.
 */
?>

<div class="grid-demos">

  <p>These grids use the <code>.row</code> and <code>.column</code> classes, but <strong><em>nothing like</em></strong> <code>.narrow-l-3</code> or <code>.wide-12</code>.</p>

  <p>The width (and vertical margins) for these grid items is defined in the custom <em>sass/layouts/_on&#8209;demand&#8209;grids.scss</em> stylesheet.</p>





  <h2 class="h4">3 column on-demand grid.</h2>

  <!--
  NOTE: you can add row--flexbox--wide class (in inspector) to flexboxify it.
  -->

  <div class="row row--wrap row--wrap--3">

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Per inceptos hymenaeos. Donec elit libero, sodales nec, volutpat
            a, suscipit non, turpis. Aenean vulputate eleifend tellus.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Class aptent taciti sociosqu ad litora torquent per conubia
            nostra.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          Fusce neque.
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus.</p>
        </div>
      </div>
    </div>

  </div><!-- /.row -->




  <h2 class="h4">4 column on-demand grid.</h2>

  <div class="row row--wrap row--wrap--4">

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Per inceptos hymenaeos. Donec elit libero, sodales nec, volutpat
            a, suscipit non, turpis. Aenean vulputate eleifend tellus.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Class aptent taciti sociosqu ad litora torquent per conubia
            nostra.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          Fusce neque.
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Per inceptos hymenaeos. Donec elit libero, sodales nec.</p>
        </div>
      </div>
    </div>

  </div><!-- /.row -->





  <h2 class="h4">Flexboxified grid.</h2>

  <p>Note: this is not using any Foundation flexbox-related resources, but
    custom code.</p>

  <p>Note: this will only work if a modernizr build is included and is producing
    an .mdz-flexbox class on the :root element.</p>

  <div class="row row--wrap row--flexbox--wide row--wrap--4 natural-fit">

    <div class="column">
      <div class="box">
        <div class="box__content">
          <img src="sample-contents/photo-1-700.jpg" alt="Train wheel close-up, for image demo purpose.">
          <p>Lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Per inceptos hymenaeos. Donec elit libero, sodales nec, volutpat
            a, suscipit non, turpis. Aenean vulputate eleifend tellus.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Class aptent taciti sociosqu ad litora torquent per conubia
            nostra.</p>
          <img src="sample-contents/photo-1-700.jpg" alt="Train wheel close-up, for image demo purpose.">
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          Fusce neque.
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Lorem ipsum.</p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="box">
        <div class="box__content">
          <p>Per inceptos hymenaeos. Donec elit libero, sodales nec.</p>
        </div>
      </div>
    </div>

  </div><!-- /.row -->

</div>
