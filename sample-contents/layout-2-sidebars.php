<?php
/**
 * @file
 * On-demand-grid demonstrator items.
 */
?>

<div class="grid-demos">

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
