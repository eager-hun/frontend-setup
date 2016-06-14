Frontend build setup study.

Keywords: Foundation, Gulp, Browsersync.

## Installing

This project has been made a submodule of the ["Anypage"][Anypage] project, and
the default configuration is now expecting that this project is accessed via
Anypage as a wrapper around it.

1. Edit project-related config (mainly locations) in `index.php` and in
  `gulpfile.js`. (If you are not using the "Anypage" project as a wrapper,
  there will be a little more to edit in gulpfile.js.)
2. Then in cli:

        $ bower install
        $ npm install
        $ gulp


### Adding Modernizr build

The modernizr build is not part of this package, therefore some functionality
will not be available until it is added.

The `source/libs-custom/modernizr-readme.txt` offers help on how it can be
added.


## If you are new to node.js and npm:

- Learn their specific procedures on your operating system. E.g.:
    - you will not want to get stuck with your `node_modules` directories on
      Windows machines; see: http://stackoverflow.com/q/28175200


[Anypage]: https://github.com/eager-hun/Anypage

