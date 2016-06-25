/**
 * @file
 * Gulpfile.
 */

/*

NOTES:

Docs:

https://github.com/gulpjs/gulp/blob/master/docs/API.md
https://github.com/gulpjs/gulp/tree/master/docs/recipes

Overviews:

http://andy-carter.com/blog/a-beginners-guide-to-the-task-runner-gulp
https://markgoodyear.com/2014/01/getting-started-with-gulp/
http://www.chenhuijing.com/blog/drupal-101-theming-with-gulp/

On concatenating files:

Gulp minify multiple js files to one
http://stackoverflow.com/a/26719941
Using Gulp to Concatenate and Uglify files
http://stackoverflow.com/a/24597914

Complex example might worth examining:
http://stackoverflow.com/a/31436472

On sourcemaps:
https://github.com/floridoo/gulp-sourcemaps/wiki/Plugins-with-gulp-sourcemaps-support

When it comes to Browserify:
https://github.com/gulpjs/gulp/blob/master/docs/recipes/browserify-uglify-sourcemap.md

 */


// #############################################################################
// Gulp wiring.
// See https://www.npmjs.com/package/<plugin-name>

const gulp         = require('gulp');
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps   = require('gulp-sourcemaps');
const jshint       = require('gulp-jshint');
const uglify       = require('gulp-uglify');
const rename       = require('gulp-rename');
const concat       = require('gulp-concat');
const del          = require('del');
const order        = require('gulp-order');
const browsersync  = require('browser-sync').create();
// const plumber      = require('gulp-plumber');


// #############################################################################
// Project setup.

// -----------------------------------------------------------------------------
// Paths.

var paths = {
  web: {
    // Use leading slash, but not trailing slash!
    toDocRoot: '/anypage',
    toGulpfile: '/anypage/frontend-setup'
  },
  source: {
    // Paths relative to the gulpfile. No trailing slash!
    bower:      'bower_components',
    customLibs: 'source/libs-custom',
    customJs:   'source/js',
    css:        'source/sass'
  },
  dest: {
    // Paths relative to the gulpfile. No trailing slash!
    css: 'build/css',
    js:  'build/js'
  }
};

// -----------------------------------------------------------------------------
// Options.

var options = {
  // Whether to bundle a modernizr build into the customLibs js bundle.
  // NOTE: needs to be downloaded first into paths.source.customLibs.
  // Find the url there.
  modernizr: false,
  // Cleaning deletes earlier instances of built files before writing new ones.
  cleaning: {
    enabled: true,
    verbose: false,
    delOpts: {
      dryrun: false
    }
  },
  sass: {
    // Note that options from
    // https://github.com/sass/node-sass/blob/master/README.md may also apply.
    // See https://web-design-weekly.com/2014/06/15/different-sass-output-styles/
    // nested || expanded || compact || compressed
    outputStyle: 'expanded',
    includePaths: [
      paths.source.bower + '/foundation-sites/scss'
    ]
  },
  autoprefixer: {
    // https://github.com/postcss/autoprefixer#options
    // https://github.com/ai/browserslist#queries
    // Foundation 6 recommendation: http://foundation.zurb.com/sites/docs/sass.html
    browsers: ['last 2 versions', 'ie >= 9', 'and_chr >= 2.3'],
    flexbox: 'no-2009',
    cascade: true
  },
  sourcemaps: {
    css: {
      'sourceMappingURLPrefix': paths.web.toGulpfile + '/' + paths.dest.css
    },
    js: {
      'sourceMappingURLPrefix': paths.web.toGulpfile + '/' + paths.dest.js
    }
  },
  uglify: {
    mangle: false
  },
  browsersync: {
    proxy: "http://your-local-environment's-domain" + paths.web.toDocRoot,
    // browser: 'google chrome', // https://www.browsersync.io/docs/options/#option-browser
    online: false,
    notify: false
  },
  reloadOn: {
    html: true,
    php: true,
    svg: true
  }
};

// #############################################################################
// Js bundle definitions.

var jsBundles = {
  libs: {
    filename: 'libs'
  },
  framework: {
    filename: 'foundation'
  },
  custom: {
    filename: 'custom'
  }
};

// -----------------------------------------------------------------------------
// Libraries.
// Provide full paths (relative to gulpfile.js) along with the filenames.

jsBundles.libs.files = [
  paths.source.bower + '/jquery/dist/jquery.js'
];

if (options.modernizr) {
  jsBundles.libs.files.unshift(paths.source.customLibs + '/modernizr-custom.js');
}

// -----------------------------------------------------------------------------
// Framework JS files.
// Provide full paths (relative to gulpfile.js) along with the filenames.

paths.source.frameworkJs = paths.source.bower + '/foundation-sites/js';

jsBundles.framework.files = [
  paths.source.frameworkJs + '/foundation.core.js',
  paths.source.frameworkJs + '/foundation.util.mediaQuery.js',
  paths.source.frameworkJs + '/foundation.util.keyboard.js',
  paths.source.frameworkJs + '/foundation.util.box.js',
  paths.source.frameworkJs + '/foundation.util.triggers.js',
  paths.source.frameworkJs + '/foundation.dropdown.js',
  paths.source.frameworkJs + '/foundation.accordion.js'
];


// #############################################################################
// Tasks and their helpers.

// -----------------------------------------------------------------------------
// CLEANING UP old files before saving new ones.

var announceCleaning = function announceCleaning(paths) {
  if (paths.length > 0) {
    if (options.cleaning.delOpts.dryrun) {
      console.log('Files and folders that would be deleted:');
      console.log(paths.join('\n'));
    }
    else if (options.cleaning.verbose) {
      console.log('Deleted files and folders:');
      console.log(paths.join('\n'));
    }
  }
};

gulp.task('clean-css', function () {
  if (options.cleaning.enabled) {
    del([paths.dest.css + '/*'], options.cleaning.delOpts)
      .then(announceCleaning);
  }
});

gulp.task('clean-js-libs', function () {
  if (options.cleaning.enabled) {
    var globs = [
      paths.dest.js + '/' + jsBundles.libs.filename + '.js',
      paths.dest.js + '/' + jsBundles.libs.filename + '.min.js',
      paths.dest.js + '/sourcemaps/' + jsBundles.libs.filename + '.js.map',
      paths.dest.js + '/sourcemaps/' + jsBundles.libs.filename + '.min.js.map'
    ];
    del(globs, options.cleaning.delOpts)
      .then(announceCleaning);
  }
});

gulp.task('clean-framework-js', function () {
  if (options.cleaning.enabled) {
    var globs = [
      paths.dest.js + '/' + jsBundles.framework.filename + '.js',
      paths.dest.js + '/' + jsBundles.framework.filename + '.min.js',
      paths.dest.js + '/sourcemaps/' + jsBundles.framework.filename + '.js.map',
      paths.dest.js + '/sourcemaps/' + jsBundles.framework.filename + '.min.js.map'
    ];
    del(globs, options.cleaning.delOpts)
      .then(announceCleaning);
  }
});

gulp.task('clean-custom-js', function () {
  if (options.cleaning.enabled) {
    var globs = [
      paths.dest.js + '/' + jsBundles.custom.filename + '.js',
      paths.dest.js + '/' + jsBundles.custom.filename + '.min.js',
      paths.dest.js + '/sourcemaps/' + jsBundles.custom.filename + '.js.map',
      paths.dest.js + '/sourcemaps/' + jsBundles.custom.filename + '.min.js.map'
    ];
    del(globs, options.cleaning.delOpts)
      .then(announceCleaning);
  }
});

// -----------------------------------------------------------------------------
// COMPILING CSS.

gulp.task('compile-css', ['clean-css'], function () {
  return gulp.src(paths.source.css + '/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass(options.sass)
      .on('error', sass.logError))
    .pipe(autoprefixer(options.autoprefixer))
    .pipe(sourcemaps.write('./sourcemaps', options.sourcemaps.css))
    .pipe(gulp.dest(paths.dest.css))
    .pipe(browsersync.stream({match: '**/*.css'}));
});

// -----------------------------------------------------------------------------
// COMPILING JS LIBS AND FRAMEWORK JS BUNDLES.

// NOTE: there is no watcher for these, if you add or remove libraries or
// framework js files, you need to relaunch gulp.

// WARNING: are we guaranteed to get back the components in the concatenated
// file in the same order they were passed in?

// Related: https://github.com/gulpjs/gulp/issues/687
// Related: http://stackoverflow.com/questions/28486866/gulp-src-using-sync-globbing
// Also, using order() here only made things worse.

gulp.task('compile-js-libs', ['clean-js-libs'], function() {
  return gulp.src(jsBundles.libs.files)
    .pipe(sourcemaps.init())
    .pipe(concat(jsBundles.libs.filename + '.js', {newLine: "\n;"}))
    .pipe(gulp.dest(paths.dest.js))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify(options.uglify))
    .pipe(sourcemaps.write('./sourcemaps', options.sourcemaps.js))
    .pipe(gulp.dest(paths.dest.js));
});

gulp.task('compile-framework-js', ['clean-framework-js'], function() {
  return gulp.src(jsBundles.framework.files)
    .pipe(sourcemaps.init())
    .pipe(concat(jsBundles.framework.filename + '.js', {newLine: "\n;"}))
    .pipe(gulp.dest(paths.dest.js))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify(options.uglify))
    .pipe(sourcemaps.write('./sourcemaps', options.sourcemaps.js))
    .pipe(gulp.dest(paths.dest.js));
});

// -----------------------------------------------------------------------------
// COMPILING CUSTOM JS.

gulp.task('compile-custom-js', ['clean-custom-js'], function() {

  // NOTICE: we may need to define custom order of these files, as some of them
  // may depend on another one(s).

  // If we provide only a subset of the existing files for order(), it seems
  // that they will be ordered as such at the beginning of the concatenated
  // file, then the rest of the files will follow in abc-order.
  var jsFilesOrder = [
    'custom-script-3.js',
    'custom-script-2.js'
  ];

  return gulp.src(paths.source.customJs + '/*.js')
    .pipe(order(jsFilesOrder))
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(sourcemaps.init())
    .pipe(concat(jsBundles.custom.filename + '.js', {newLine: "\n;"}))
    .pipe(gulp.dest(paths.dest.js))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify(options.uglify))
    .pipe(sourcemaps.write('./sourcemaps', options.sourcemaps.js))
    .pipe(gulp.dest(paths.dest.js))
    .pipe(browsersync.stream({match: '**/*.js'}));
});

// -----------------------------------------------------------------------------
// WATCHING AND BROWSERSYNCING.
// See https://www.browsersync.io/docs/gulp/

var watcherAnnounce = function watcherAnnounce(event) {
  console.log(event.path + ' <<== File was ' + event.type + '; running tasks:');
};

// Resource-specific compiler+reloaders.
gulp.task('reload-at-css', ['compile-css'], browsersync.reload);
gulp.task('reload-at-custom-js', ['compile-custom-js'], browsersync.reload);

gulp.task('serve', ['compile-css', 'compile-js-libs', 'compile-framework-js', 'compile-custom-js'], function() {
  browsersync.init(options.browsersync);

  // See https://www.browsersync.io/docs/gulp/#gulp-reload
  // + See https://www.browsersync.io/docs/gulp/#gulp-manual-reload
  // + See https://github.com/gulpjs/gulp/blob/master/docs/API.md#user-content-tasks

  gulp.watch([paths.source.css + '/**/*.scss'], ['reload-at-css'])
    .on('change', watcherAnnounce);

  gulp.watch([paths.source.customJs + '/*.js'], ['reload-at-custom-js'])
    .on('change', watcherAnnounce);

  if (options.reloadOn.html) {
    gulp.watch('**/*.html')
      .on('change', function(event) {
        watcherAnnounce(event);
        browsersync.reload();
      });
  }

  if (options.reloadOn.php) {
    gulp.watch('**/*.php')
      .on('change', function(event) {
        watcherAnnounce(event);
        browsersync.reload();
      });
  }
});

// -----------------------------------------------------------------------------
// Automatic execution of the default build sequence at the `gulp` command.

gulp.task('default', ['serve']);


// #############################################################################
// Known bugs and issues:

// gulp.watch: Error: watch ENOENT (When renaming a directory.)
// https://github.com/gulpjs/gulp/issues/427#issuecomment-114848813

// Sass sourcemaps:
// Wrong line numbers working with Libsass
// Note: seemingly only when using 'compressed' output.
// https://github.com/floridoo/gulp-sourcemaps/issues/88

// Js sourcemaps:
// In Chrome console, Js sourcemap data are not picked up/displayed on page
// load, only after page reload.
// In Firefox, Js sourcemap data are not used by the console tab (though in the
// Debugger tab they are utilized); This is a Firefox issue:
// https://bugzilla.mozilla.org/show_bug.cgi?id=670002

// Error: EEXIST: file already exists, mkdir '/xxxxxx/build/css/sourcemaps' at Error (native)
