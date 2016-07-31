/**
 * @file
 * Script No 2.
 */

(function ($, window, document, undefined) {
  "use strict";


  // ###########################################################################
  // For debugging (and also testing the build script).

  if (typeof console === "undefined") {
    this.console = { log: function() {} };
  }

  var logMsg = 'Custom script 2.';
  console.log(logMsg);

})(jQuery, this, this.document);
