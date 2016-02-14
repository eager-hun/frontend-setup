/**
 * @file
 * Script No 3.
 */

(function (window, document, undefined) {
  "use strict";


  // ###########################################################################
  // For debugging (and also testing the build script).

  if (typeof console === "undefined") {
    this.console = { log: function() {} };
  }

  var logMsg = 'Custom script 3.';
  console.log(logMsg);


  // ###########################################################################
  // Stuff.

  window.stuff = 'String set by script 3.';

})(this, this.document);
