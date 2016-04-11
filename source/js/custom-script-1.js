/**
 * @file
 * Script No 1.
 */

(function ($, window, document, undefined) {
  "use strict";


  // ###########################################################################
  // For debugging (and also testing the build script).

  if (typeof console === "undefined") {
    this.console = { log: function() {} };
  }

  var logMsg = 'Custom script 1.';
  console.log(logMsg);


  // ###########################################################################
  // Stuff.

  // ---------------------------------------------------------------------------
  // Set defaults for Foundation components.

  // Dropdown.
  window.Foundation.Dropdown.defaults.closeOnClick = true;
  window.Foundation.Dropdown.defaults.hoverPane = true;

  // Accordion.
  window.Foundation.Accordion.defaults.slideSpeed = 700;
  window.Foundation.Accordion.defaults.multiExpand = true;
  window.Foundation.Accordion.defaults.allowAllClosed = true;

  // ---------------------------------------------------------------------------
  // Execute Foundation.

  $(document).foundation();

  // ---------------------------------------------------------------------------
  // Helpers.

  console.log('Foundation.MediaQuery.current: ' + Foundation.MediaQuery.current);

  $(window).on('resize', function() {
    console.log('Foundation.MediaQuery.current: ' + Foundation.MediaQuery.current);
  });

})(jQuery, this, this.document);
