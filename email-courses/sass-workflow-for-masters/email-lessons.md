# 6 Steps Sass Workflow Experts Use to Move Faster and Smarter Than You
# The Sass Workflow Experts Use That You Haven't Considered
# The Secret Weapons Sass Experts Use to Move Faster and Smarter Than You

## An expert Sass workflow isn't just about using variables for colors and mixins for commonly used styles. It's so much more!

### Lesson 1 - Producing Quality Sass

Has nothing to do with:
- whether you use Sass or Scss
- if you use tabs or spaces
- strategies for naming variable types like fonts and colors
- has nothing to do with which reputable framework you use

Producing Quality Sass has 3 keys:
1. organization (organize files, folders, and code in files)
2. leveraging the features of Sass - variables, mixins, functions, maps.
3. testing - Sass -> linted (http://www.theguardian.com/info/developer-blog/2014/may/13/improving-sass-code-quality-on-theguardiancom) GRUNT MODULE


### Lesson 2 - Compile and Live Reloading

GRUNT MODULE

### Lesson 3 - Spriting and Images

A) Spriting
with grunt spriting library! NOT Compass
iconic icons w/ sass (it's already built in!)
http://jib.li/s/lib/fontawesome/docs/#integration
GRUNT MODULE

B) Image Optimization
http://web-design-weekly.com/2013/05/12/handy-sass-mixins/
- retina images
	http://chrisltd.com/blog/2013/05/retina-images-sass/
- retina background images
	https://gist.github.com/twe4ked/1432554

### Lesson 4 - MQ libraries with mixins

A) Need to worry about IE8? then here: https://github.com/guardian/sass-mq
B) How do you combine it with a framework like Bootstrap?
http://www.divshot.com/blog/tips-and-tricks/useful-sass-mixins-for-responsive-design-font-sizing-and-more/
http://www.sitepoint.com/managing-responsive-breakpoints-sass/
https://github.com/paranoida/sass-mediaqueries
http://css-tricks.com/media-queries-sass-3-2-and-codekit/
http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32

### Lesson 5 - Style Guide Generation

living style guides - http://www.phase2technology.com/blog/exploring-maps-in-sass-3-3part-3-calling-variables-with-variables/
http://trulia.github.io/hologram/

### Lesson 6 - Minify and ReMinify with MediaQuery optimization

- compressed/nested/normal

CSS -> mediaqueries organized CSS (https://www.npmjs.org/package/grunt-combine-media-queries)
MQ org'd -> minified css (https://github.com/gruntjs/grunt-contrib-cssmin)

