# Description #

This is a plugin for the [Elgg Social Networking Platform](http://elgg.org) that allows users to enter LaTeX markup in most long text fields, e.g. blog posts, comments, messages, forum posts and pages.  The markup gets rendered as HTML, with MathML used for equations.  The conversion is done client-side via javascript.

The plugin is based on the LaTeXMathML script by Jeff Knisley (http://math.etsu.edu/LaTeXMathML/).

For an example of this plugin in use, see [my elgg site](http://quantumcollaborations.org).

# Requirements #

  * A working installation of Elgg v1.0 or later.  It has been tested up to Elgg v1.6.1 and the latest version is recommended.
  * Users need to be using a browser that is MathML enabled, e.g. Firefox 3.5 or Internet Explorer with the Mathplayer plugin.

# Important Notes #

  * The plugin might not behave correctly with WYSWIG editors for textareas like TinyMCE.  It is best to use plain textareas.

  * You must always use the "\lt" command, or the html entity "&lt" to display the less than sign when using this plugin with Elgg.  This is because the "<" character is interpreted as the beginning of an HTML tag.