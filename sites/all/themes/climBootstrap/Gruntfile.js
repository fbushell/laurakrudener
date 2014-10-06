'use strict'; 

module.exports = function(grunt) {
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

 	grunt.initConfig({
 		pkg: grunt.file.readJSON('package.json'),

 		project: {
		  app: 'app',
		  assets: '<%= project.app %>',
		  css: [
		    '<%= project.src %>/css/main.sass'
		  ],
		  sass: [
		  	'<%= project.src %>/sass/main.sass'
		  ]
		},


 		sass: {
		  dev: {
		    options: {
		      style: 'compressed'
		    },
		    files: {
		      'css/pre.css': 'sass/main.sass'
		    }
		  },
		},

		autoprefixer: {
			single_file: {
	    	src: 'css/pre.css',
	    	dest: 'css/main.css'
	    }
	  },


		watch: {
		  sass: {
		    files: 'sass/{,*/}*.{scss,sass}',
		    tasks: ['sass:dev', 'autoprefixer']
		  }
		}
	});

 	grunt.registerTask('default', [
 		'sass:dev',
 		'autoprefixer',
 		'watch'
 	])

};