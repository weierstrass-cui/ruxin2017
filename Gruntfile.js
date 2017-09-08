module.exports = function (grunt){
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		clean: {
			ruxin: {
				src: ['./build/uat/**']
			}
		},
		uglify: {
			ruxin: {
				src: 'js/*.js',
				dest: 'build/sit/js/<%= pkg.name %>.min.js'
			}
		},
		cssmin: {
			ruxin: {
				src: 'build/sit/css/<%= pkg.name %>.css',
				dest: 'build/sit/css/<%= pkg.name %>.min.css'
			}
		},
		concat: {
			ruxin: {
				src: ['css/*.css'],
				dest: 'build/sit/css/<%= pkg.name %>.css'
			}
		},
		imagemin: {
			ruxin: {
				options: {
					optimizationLevel: 3
				},
				files: [{
					expand: true,
					cwd: 'uploads/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'build/ruxin/uploads'
				}]
			}
		},
		copy: {
			ruxin:{
				files: [{
					expand: true,
					cwd: './template',
					src: ['*.html'],
					dest: 'build/sit/template'
				},{
					expand: true,
					cwd: './lib',
					src: ['**/*'],
					dest: 'build/sit/lib'
				},{
					expand: true,
					cwd: './',
					src: ['*.html'],
					dest: 'build/sit'
				}]
			}
		},
		usemin: {
			ruxin:{
				files: [{
					html: ['build/sit/index.html']
				}],
				options: {
					blockReplacements: {
						css: function(block){
							var time = new Date().getTime();
							return '<link rel="stylesheet" href="css/acs.min.css?version=' + time + '" />';
						},
						js: function(block){
							var time = new Date().getTime();
							return '<script src="js/acs.min.js?version=' + time + '"></script><script src="lib/ga/ga.js?version=' + time + '"></script>';
						}
					}
				}
			}
		}
	});
	// 加载插件
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-usemin');
	grunt.loadNpmTasks('grunt-css');

	// 任务列表
	grunt.registerTask('default', ['imagemin:ruxin']);

}