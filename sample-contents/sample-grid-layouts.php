<?php
/**
 * @file
 * Grid demonstrator items.
 *
 * See http://foundation.zurb.com/sites/docs/grid.html (For 6.1.2).
 */

/*


 */
?>


<div class="grid-demos">

  <p>These items start out as 100% wide, then as the screen grows, they go 50% wide, then 100% wide again, then 50% wide again.</p>

  <div class="row">

    <div class="column narrow-l-12 wide-24 wide-m-12">
      <div class="box">
        <div class="box__content">
          Box 1
        </div>
      </div>
    </div>
    <div class="column narrow-l-12 wide-24 wide-m-12">
      <div class="box">
        <div class="box__content">
          Box 2
        </div>
      </div>
    </div>

  </div>

  <p>By default, Foundation will float the last grid item to the opposite direction than the others (right). This is due to work around rounding errors in width calculations, therefore to ensure perfectly aligned column edges on the right side too.</p>
  <p>Columns also seem to be able to wrap to multi lines.</p>
  <p>If there is a remainder at the end, it goes to the wrong end.</p>

  <div class="row">

    <div class="column wide-12">
      <div class="box">
        <div class="box__content">
          Box 1
        </div>
      </div>
    </div>
    <div class="column wide-12">
      <div class="box">
        <div class="box__content">
          Box 2
        </div>
      </div>
    </div>
    <div class="column wide-12">
      <div class="box">
        <div class="box__content">
          Box 3
        </div>
      </div>
    </div>

  </div>

  <p>By adding an .end class to the last column, the right-floating of that element can be prevented.</p>

  <div class="row">

    <div class="column wide-12">
      <div class="box">
        <div class="box__content">
          Box 1
        </div>
      </div>
    </div>
    <div class="column wide-12">
      <div class="box">
        <div class="box__content">
          Box 2
        </div>
      </div>
    </div>
    <div class="column wide-12 end">
      <div class="box">
        <div class="box__content">
          Box 3
        </div>
      </div>
    </div>

  </div>

  <p>Testing a nested grid.</p>

  <div class="row">

    <div class="column wide-18">

      <div class="row">

        <div class="column wide-12">
          <div class="box">
            <div class="box__content">
              Inner row, box 1
            </div>
          </div>
        </div>
        <div class="column wide-12">
          <div class="box">
            <div class="box__content">
              Inner row, box 2
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="column wide-6">
      <div class="box">
        <div class="box__content">
          Outer row, box 1
        </div>
      </div>
    </div>

  </div>

  <p>Taking nesting further.</p>
  <p>The innermost elements go sharing width only at "wide-m" media query.</p>

  <div class="row">

    <div class="column wide-18">

      <div class="row">

        <div class="column wide-12">
          <div class="box">
            <div class="box__content">
              Inner row, box 1
            </div>
          </div>
        </div>
        <div class="column wide-12">

          <div class="row">

            <div class="column wide-m-12">
              <div class="box">
                <div class="box__content">
                  Innermost row, box 1
                </div>
              </div>
            </div>
            <div class="column wide-m-12">
              <div class="box">
                <div class="box__content">
                  Innermost row, box 2
                </div>
              </div>
            </div>
            <div class="column wide-m-12 end">
              <div class="box">
                <div class="box__content">
                  Innermost row, box 3
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>
    <div class="column wide-6">
      <div class="box">
        <div class="box__content">
          Outer row, box 1
        </div>
      </div>
    </div>

  </div>


  <p>Item that gets centered at "wide" width, then changes width at "wide-m"</p>

  <div class="row">

    <div class="column wide-8 wide-centered wide-m-20">
      <div class="box">
        <div class="box__content">
          Box 1
        </div>
      </div>
    </div>

  </div>

  <p>Practical(-ish) example where we position boxes progressively next to each other, as growing width allows.</p>

  <div class="row">

    <div class="column narrow-l-12 wide-m-8">
      <div class="box">
        <div class="box__content">
          Box 1
        </div>
      </div>
    </div>
    <div class="column narrow-l-12 wide-m-8">
      <div class="box">
        <div class="box__content">
          Box 2
        </div>
      </div>
    </div>
    <div class="column wide-m-8">
      <div class="box">
        <div class="box__content">
          Box 3
        </div>
      </div>
    </div>

  </div>

</div>


