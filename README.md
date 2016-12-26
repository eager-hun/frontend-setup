Frontend build setup study.

Keywords: Foundation, Gulp, Browsersync.

**Note:**

**This project is deprecated, no further development should be expected.**

This project has been made a submodule of the "[anypage][anypage]" project, and
it is now expected that this project is accessed via "anypage" as a wrapper
around it.

Sample contents can be accessed and developed by using this project together
with the "anypage" project.

## Installing external packages and building assets

1. Edit project-related config in `gulpfile.js`.
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


[anypage]: https://github.com/eager-hun/anypage
