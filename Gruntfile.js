module.exports = function(grunt){
    'use strict';

    // Configuration
    grunt.initConfig({

        // Package
        pkg: grunt.file.readJSON('package.json'),

        // JS Minifier
        uglify: {
            options: {
                mangle: false
            },
            dist: {
                files: {
                    'assets/js/application.js': [
                        'assets/js/_jquery.js',
                        'assets/js/_preloader.js',
                        'assets/js/_parallax.js',
                        'assets/js/_validate.js',
                        'assets/js/_carousel.js',
                        'assets/js/_lightbox.js',
                        // 'assets/js/_stellar.js',
                        'assets/js/_waypoints.js',
                        'assets/js/_shadowbox.js',
                        'assets/js/_contact.js',
                        'assets/js/_init.js',
                        'assets/js/_custom.js'
                    ]
                },
                options: {
                    banner: '/*\n***********************\n' + 
                            'File: Application JS\n' +
                            'Project: <%= pkg.title %>\n' +
                            'Author: <%= pkg.author.name %> <<%= pkg.author.email %>>\n' +
                            'Author URL: <%= pkg.author.url %>\n' +
                            'Last Update: <%= grunt.template.today("dd-mm-yyyy") %>\n' + 
                            '***********************\n*/\n'
                }
            }
        },

        // Sprite Generator
        sprite: {
            images: {
                padding:   5,
                algorithm: 'binary-tree',
                src:       'assets/images/sprite/*.png',
                dest:      'assets/images/sprite.png',
                destCss:   'assets/css/sprites/_sprite.scss',
                cssFormat:  'css',
                imgPath:   '../images/sprite.png',
                cssOpts: {
                    cssClass: function (item) {
                        return '.' + item.name;
                    }
                }
            }, 
        },

        watch: {
            php: {
                files: [
                    "*.php", 
                    "includes/*.php", 
                    "assets/css/**/*.scss", 
                    "assets/css/*.css",
                    "assets/js/**/*.js",
                    "!assets/js/application.js"
                ],
                tasks: ['uglify']
            }
        },

        browserSync: {
            default_options: {
                bsFiles: {
                    src: [
                        "assets/css/**/*.css",
                        "*.html",
                        "assets/js/**/*.js",
                        "includes/*.php",
                        "*.php"
                    ]
                },
                options: {
                    ghostMode: {
                        clicks: true,
                        forms: true,
                        scroll: true
                    },
                    // Stop the browser from automatically opening
                    open: false,
                    watchTask: true,
                    proxy: 'localhost:8010',
                    port: 8080
                }
            }
        },

        php: {
            dev: {
                options: {
                    port: 8010,
                    base: '.'
                }
            }
        },

        sassdoc: {

      // Bare minimum.
      bare: {
        src: 'assets/css/**/*.scss',
      }

    }

    });
 
    // Plugins
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-php');
    grunt.loadNpmTasks('grunt-sassdoc');

    // Tasks
    grunt.registerTask('default', ['uglify', 'sprite']);
    grunt.registerTask('docs', ['sassdoc']);
    grunt.registerTask('server', ['php', 'browserSync', 'watch']);
    
};

