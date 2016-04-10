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

  // Set defaults for Foundation components.
  window.Foundation.Dropdown.defaults.closeOnClick = true;

  // Execute Foundation.
  $(document).foundation();

  console.log('Foundation.MediaQuery.current: ' + Foundation.MediaQuery.current);

  $(window).on('resize', function() {
    console.log('Foundation.MediaQuery.current: ' + Foundation.MediaQuery.current);
  });

})(jQuery, this, this.document);
