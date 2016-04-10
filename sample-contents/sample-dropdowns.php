<?php
/**
 * @file
 * Sample components to include in the main page template (index.php).
 */
?>

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
  Hoverable dropdown button's dropdown-pane's content is this, and it can even go longer, like this; at this point I might wonder why I didn't use some lorem ipsum instead of typing. Nevermind.
</div>
