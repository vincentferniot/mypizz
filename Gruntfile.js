// Generated on 2015-01-31 using generator-angular 0.10.0
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to recursively match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);

  // Time how long tasks take. Can help when optimizing build times
  require('time-grunt')(grunt);

  // Configurable paths for the application
  var appConfig = {
    app: 'app/Resources',
    dist: 'web'
  };

  // Define the configuration for all the tasks
  grunt.initConfig({

    // Project settings
    mypizz: appConfig,

    // Watches files for changes and runs tasks based on the changed files
    watch: {
      //bower: {
      //  files: ['bower.json'],
      //  tasks: ['wiredep']
      //},
      js: {
        files: ['<%= mypizz.app %>/scripts/{,*/}*.js'],
        tasks: ['copy:scripts']
        //options: {
        //  livereload: '<%= connect.options.livereload %>'
        //}
      },
      html: {
        files: ['<%= mypizz.app %>/views/{,*/}*.html'],
        tasks: ['copy:views']
        //options: {
        //  livereload: '<%= connect.options.livereload %>'
        //}
      },
      //jsTest: {
      //  files: ['test/spec/{,*/}*.js'],
      //  tasks: ['newer:jshint:test', 'karma']
      //},
      compass: {
        files: ['<%= mypizz.app %>/styles/{,*/}*.{scss,sass}'],
        tasks: ['compass:server', 'autoprefixer', 'copy:styles']
      },
      gruntfile: {
        files: ['Gruntfile.js']
      },
      livereload: {
        options: {
          livereload: true
        },
        files: [
          '<%= mypizz.app %>/views/{,*/}*.twig',
          '<%= mypizz.dist %>/views/{,*/}*.html',
          '<%= mypizz.dist %>/scripts/{,*/}*.js',
          '<%= mypizz.dist %>/styles/{,*/}*.css'
          //'<%= mypizz.app %>/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },

    // The actual grunt server settings
    connect: {
      options: {
        port: 9001,
        // Change this to '0.0.0.0' to access the server from outside.
        hostname: '0.0.0.0',
        livereload: 35729
      },
      livereload: {
        options: {
          open: true,
          middleware: function (connect) {
            return [
              connect.static('.tmp'),
              connect().use(
                '/bower_components',
                connect.static('./bower_components')
              ),
              connect.static(appConfig.app)
            ];
          }
        }
      }
      //test: {
      //  options: {
      //    port: 9002,
      //    middleware: function (connect) {
      //      return [
      //        connect.static('.tmp'),
      //        connect.static('test'),
      //        connect().use(
      //          '/bower_components',
      //          connect.static('./bower_components')
      //        ),
      //        connect.static(appConfig.app)
      //      ];
      //    }
      //  }
      //},
      //dist: {
      //  options: {
      //    open: true,
      //    base: '<%= mypizz.dist %>'
      //  }
      //}
    },

    // Make sure code styles are up to par and there are no obvious mistakes
    jshint: {
      options: {
        jshintrc: '.jshintrc',
        reporter: require('jshint-stylish')
      },
      all: {
        src: [
          'Gruntfile.js',
          '<%= mypizz.app %>/scripts/{,*/}*.js'
        ]
      }
      //,
      //test: {
      //  options: {
      //    jshintrc: 'test/.jshintrc'
      //  },
      //  src: ['test/spec/{,*/}*.js']
      //}
    },
    //
    // Empties folders to start fresh
    clean: {
      dist: {
        files: [{
          dot: true,
          src: [
            '.tmp',
            '<%= mypizz.dist %>/{,*/}*',
            '!<%= mypizz.dist %>/.git{,*/}*'
          ]
        }]
      },
      server: '.tmp'
    },

    //Copy bower components into vendor folder
    bowercopy: {
      server: {
        options: {
          destPrefix: '<%= mypizz.app %>/scripts/vendor'
        },
        files: {
          'jquery.js': 'jquery/dist/jquery.js',
          'es5-shim.js': 'es5-shim/es5-shim.js',
          'angular.js': 'angular/angular.js',
          'json3.js': 'json3/lib/json3.js',
          'bootstrap.js': 'bootstrap-sass-official/assets/javascripts/bootstrap.js',
          'angular-animate.js': 'angular-animate/angular-animate.js',
          'angular-cookies.js': 'angular-cookies/angular-cookies.js',
          'angular-resource.js': 'angular-resource/angular-resource.js',
          'angular-route.js': 'angular-route/angular-route.js',
          'angular-sanitize.js': 'angular-sanitize/angular-sanitize.js',
          'angular-touch.js': 'angular-touch/angular-touch.js'
        }
      },
      fonts: {
        options: {
          destPrefix: '<%= mypizz.app %>/styles/fonts'
        },
        files: {
          'bootstrap': 'bootstrap-sass-official/assets/fonts/bootstrap/*.{eot,svg,ttf,woff,woff2}'
        }
      }
    },
    // Add vendor prefixed styles
    autoprefixer: {
      options: {
        browsers: ['last 1 version']
      },
      dist: {
        files: [{
          expand: true,
          cwd: '.tmp/styles/',
          src: '{,*/}*.css',
          dest: '.tmp/styles/'
        }]
      }
    },

    // Automatically inject Bower components into the app
    wiredep: {
      //app: {
      //  src: ['<%= mypizz.app %>/views/base.html.twig'],
      //  ignorePath:  /(\.\.\/){1,2}/
      //},
      sass: {
        src: ['<%= mypizz.app %>/styles/{,*/}*.{scss,sass}']
        //,
        //ignorePath: /(\.\.\/){1,2}bower_components\//
      }
    },

    // Compiles Sass to CSS and generates necessary files if requested
    compass: {
      options: {
        sassDir: '<%= mypizz.app %>/styles',
        cssDir: '.tmp/styles',
        generatedImagesDir: '.tmp/images/generated',
        imagesDir: '<%= mypizz.app %>/images',
        javascriptsDir: '<%= mypizz.app %>/scripts',
        fontsDir: '<%= mypizz.app %>/styles/fonts',
        importPath: './bower_components',
        httpImagesPath: '/images',
        httpGeneratedImagesPath: '/images/generated',
        httpFontsPath: '/styles/fonts',
        relativeAssets: false,
        assetCacheBuster: false,
        raw: 'Sass::Script::Number.precision = 10\n'
      },
      dist: {
        options: {
          generatedImagesDir: '<%= mypizz.dist %>/images/generated'
        }
      },
      server: {
        options: {
          debugInfo: false
        }
      }
    },

    // Renames files for browser caching purposes
    //filerev: {
    //  dist: {
    //    src: [
    //      '<%= mypizz.dist %>/scripts/{,*/}*.js',
    //      '<%= mypizz.dist %>/styles/{,*/}*.css',
    //      '<%= mypizz.dist %>/images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}',
    //      '<%= mypizz.dist %>/styles/fonts/*'
    //    ]
    //  }
    //},

    // Reads HTML for usemin blocks to enable smart builds that automatically
    // concat, minify and revision files. Creates configurations in memory so
    // additional tasks can operate on them
    useminPrepare: {
      html: '<%= mypizz.app %>/views/base.html.twig',
      options: {
        dest: '<%= mypizz.dist %>',
        flow: {
          html: {
            steps: {
              js: ['concat', 'uglifyjs'],
              css: ['cssmin']
            },
            post: {}
          }
        }
      }
    },

    // Performs rewrites based on filerev and the useminPrepare configuration
    usemin: {
      html: ['<%= mypizz.app %>/views/base.html.twig'],
      css: ['.tmp/styles/{,*/}*.css'],
      options: {
        assetsDirs: ['<%= mypizz.app %>','<%= mypizz.app %>/images']
      }
    },

    // The following *-min tasks will produce minified files in the dist folder
    // By default, your `index.html`'s <!-- Usemin block --> will take care of
    // minification. These next options are pre-configured if you do not wish
    // to use the Usemin blocks.
    // cssmin: {
    //   dist: {
    //     files: {
    //       '<%= mypizz.dist %>/styles/main.css': [
    //         '.tmp/styles/{,*/}*.css'
    //       ]
    //     }
    //   }
    // },
    // uglify: {
    //   dist: {
    //     files: {
    //       '<%= mypizz.dist %>/scripts/scripts.js': [
    //         '<%= mypizz.dist %>/scripts/scripts.js'
    //       ]
    //     }
    //   }
    // },
    // concat: {
    //   dist: {}
    // },

    //imagemin: {
    //  dist: {
    //    files: [{
    //      expand: true,
    //      cwd: '<%= mypizz.app %>/images',
    //      src: '{,*/}*.{png,jpg,jpeg,gif}',
    //      dest: '<%= mypizz.dist %>/images'
    //    }]
    //  }
    //},
    //
    //svgmin: {
    //  dist: {
    //    files: [{
    //      expand: true,
    //      cwd: '<%= mypizz.app %>/images',
    //      src: '{,*/}*.svg',
    //      dest: '<%= mypizz.dist %>/images'
    //    }]
    //  }
    //},
    //
    //htmlmin: {
    //  dist: {
    //    options: {
    //      collapseWhitespace: true,
    //      conservativeCollapse: true,
    //      collapseBooleanAttributes: true,
    //      removeCommentsFromCDATA: true,
    //      removeOptionalTags: true
    //    },
    //    files: [{
    //      expand: true,
    //      cwd: '<%= mypizz.dist %>',
    //      src: ['*.html', 'views/{,*/}*.html'],
    //      dest: '<%= mypizz.dist %>'
    //    }]
    //  }
    //},

    // ng-annotate tries to make the code safe for minification automatically
    // by using the Angular long form for dependency injection.
    //ngAnnotate: {
    //  dist: {
    //    files: [{
    //      expand: true,
    //      cwd: '.tmp/concat/scripts',
    //      src: ['*.js', '!oldieshim.js'],
    //      dest: '.tmp/concat/scripts'
    //    }]
    //  }
    //},

    // Replace Google CDN references
    //cdnify: {
    //  dist: {
    //    html: ['<%= mypizz.dist %>/*.html']
    //  }
    //},

    // Copies remaining files to places other tasks can use
    copy: {
      server: {
        files: [{
          expand: true,
          dot: true,
          cwd: '<%= mypizz.app %>',
          dest: '<%= mypizz.dist %>',
          src: [
            'images/{,*/}*.{webp,png,jpg}',
            'styles/fonts/{,*/}*.*',
            'scripts/{,*/}*.js',
            'views/{,*/}*.html'
          ]
        }, {
          expand: true,
          cwd: '.tmp/styles',
          dest: '<%= mypizz.dist %>/styles',
          src: ['*.css']
        }, {
          expand: true,
          cwd: '.tmp/images',
          dest: '<%= mypizz.dist %>/images',
          src: ['generated/*']
        }]
      },
      dist: {
        files: [{
          expand: true,
          dot: true,
          cwd: '<%= mypizz.app %>',
          dest: '<%= mypizz.dist %>',
          src: [
            '*.{ico,png,txt}',
            '.htaccess',
            '*.html',
            'views/{,*/}*.html',
            'images/{,*/}*.{webp}',
            'fonts/{,*/}*.*'
          ]
        }, {
          expand: true,
          cwd: '.tmp/images',
          dest: '<%= mypizz.dist %>/images',
          src: ['generated/*']
        }, {
          expand: true,
          cwd: '.',
          src: 'bower_components/bootstrap-sass-official/assets/fonts/bootstrap/*',
          dest: '<%= mypizz.dist %>'
        }]
      },
      styles: {
        expand: true,
        cwd: '.tmp/styles',
        dest: '<%= mypizz.dist %>/styles',
        src: ['*.css']
      },
      scripts: {
        expand: true,
        cwd: '<%= mypizz.app %>',
        dest: '<%= mypizz.dist %>',
        src: ['scripts/{,*/}*.js']
      },
      views: {
        expand: true,
        cwd: '<%= mypizz.app %>',
        dest: '<%= mypizz.dist %>',
        src: ['views/{,*/}*.html']
      }
    },

    // Run some tasks in parallel to speed up the build process
    concurrent: {
      server: [
        'compass:server'
      ],
      test: [
        'compass'
      ],
      dist: [
        'compass:dist',
        'imagemin',
        'svgmin'
      ]
    }

    // Test settings
    //karma: {
    //  unit: {
    //    configFile: 'test/karma.conf.js',
    //    singleRun: true
    //  }
    //}
  });


  grunt.registerTask('serve', 'Compile then start a connect web server', function (target) {
    if (target === 'dist') {
      return grunt.task.run(['build', 'connect:dist:keepalive']);
    }

    grunt.task.run([
      'clean:server',
      'bowercopy',
      'wiredep',
      'concurrent:server',
      'autoprefixer',
      'copy:server',
      //'connect:livereload',
      'watch'
    ]);
  });

  //grunt.registerTask('server', 'DEPRECATED TASK. Use the "serve" task instead', function (target) {
  //  grunt.log.warn('The `server` task has been deprecated. Use `grunt serve` to start a server.');
  //  grunt.task.run(['serve:' + target]);
  //});
  //
  //grunt.registerTask('test', [
  //  'clean:server',
  //  'concurrent:test',
  //  'autoprefixer',
  //  'connect:test',
  //  'karma'
  //]);
  //
  //grunt.registerTask('build', [
  //  'clean:dist',
  //  'wiredep',
  //  'useminPrepare',
  //  'concurrent:dist',
  //  'autoprefixer',
  //  'concat',
  //  'ngAnnotate',
  //  'copy:dist',
  //  'cdnify',
  //  'cssmin',
  //  'uglify',
  //  'filerev',
  //  'usemin',
  //  'htmlmin'
  //]);
  //
  //grunt.registerTask('default', [
  //  'newer:jshint',
  //  'test',
  //  'build'
  //]);
};
