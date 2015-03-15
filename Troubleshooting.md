# Troubleshooting #

## Mathematics does not display properly ##

The most common problem is that your browser is not MathML enabled.  We recommend using Firefox 3.5 or later with the [Stix fonts](http://www.aip.org/stixfonts/) installed.  Any other Gecko based browser should also work.

Elgg-latex may also work on Internet Explorer with the [Mathplayer plugin](http://www.dessci.com/en/products/mathplayer/) and on Opera via a CSS stylesheet.  However, support on Gecko based browsers is far superior to either of these solutions.  Elgg-latex will not work properly on Safari or any other Webkit based browser.

## Part of my post does not appear ##

The most common reason for this is if you use "<" for the less-than symbol.  This is interpreted as the beginning of an HTML tag and so any markup after a "<" symbol, or between a "<" and a ">" symbol will not be displayed.  The solution is to use "\lt" instead, which the script will display as a less-than sign.

## My LaTeX markup does not display properly on the site or in the text editor ##

The most common reason for this is that you are using a WYSIWYG editor plugin for textareas on your site, such as TinyMCE.  Unfortunately, these have a habit of inserting a lot of their own HTML markup and interpreting your LaTeX markup incorrectly.  The simple solution is to turn off all editor plugins and just use plain textareas.  It should be possible to write a configuration for a WYSIWYG plugin that works with elgg-latex, but it has not been done yet.

## Other random LaTeX markup problems ##

There are a few bugs in the LaTeX mathml script, especially in the equation handling.  You can inform [Jeff Knisley](http://faculty.etsu.edu/knisleyj/) about these and hopefully they will be fixed in later versions.  I am also looking into implementing other LaTeX solutions for the Elgg platform, which will be included in future versions.