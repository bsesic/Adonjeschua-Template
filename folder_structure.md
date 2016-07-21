
#Folder structure

##root

necessary:
index.php //Main file
apple_touch_icon.png //for apple
component.php
error.php //error file
favicon.ico //favicon
index.html //security
template_preview.jpg //the preview in the template settings
template_thumbnail.jpg //small preview of the template in the settings
templateDetails.xml //installation file
update.xml //the updates file for changes, will be checked for upgrade

##css
all the necessary css files
custom.css //important overrides and customizations
editor.css //css for the jce and tinymce editor
sidr // a responsive sidebar
k2*.css //necessary for k2
bootstrap.ccs //compiles bootstrap
bootstrap.less //less variables for the compilation of bootstrap
bootstrap-min.css //minified boostrap

##images
all the important picutres
logo.gif
triangle.png //for the main menu

##html
the folder for joomla plugins
com_* -> component
mod_* -> module

Important joomla plugins:
JEvent
K2
Breadcumbs
Contact
DJimageslider -> the slider
JEvents latest -> Calendar on the main page
mod_menu -> reworked Main Menu, or use bootstrap menu
mod_search -> reworked search plugin
bootstrapnav -> main menu which uses bootstrap and is organized after bootstrap

##js
all the necessary js
jquery
bootstrap.min.js
& maybe all the bootstrap's individual *.js files

##fonts
all the necessary fonts
SegoeUI //TODO: use google font
glyphicons
font-awesome //TODO: include font awesome

##language
alle the language files for the template

##src
bootstrap source files
maybe unimportant later

###tests
only tests, nothing important

#other nice plugins
sidr, a responsive sidebar
google fonts
font awesome
bootstrap, of course a repsonsive framework
scrollspy
compression (gzip)
CDN
minify for css and js
jQuery a js library
LESS & SASS //compiles css files
lessphp, a css compiler
mrclay
http://www.minifier.org/

#tools
composer
bower
koala
npm


#TODO

minify
lessphp compile the less files.
Backend configuration
CDN
Redo frontend
