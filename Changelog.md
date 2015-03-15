# Release notes for v1.05: #

This is mainly a cosmetic release that reflects the change to hosting the code on Google code rather than my own website.  It adds some new documentation files and an explicit license file.

# Release notes for v1.04: #

This version should work with themes without requiring any hacking.  Also, you no longer need to makes sure that the plugin in below your theme in the loading order.  You still need to make sure that it is below the blog and messages modules in the loading order.
Technical details: I have used the extend\_view command to add the necessary code to get LaTeXmathml to work instead of overriding header.php.  This should remove conflicts with themes.  As a result, the plugin no longer overrides the view page\_elements/header, but it does still override:
default/messages/messages
default/object/blog
default/output/longtext

# Release notes for v1.03: #

The only change in this release is that Jeff Knisley has fixed some bugs in the LaTeXMathML.js script, so the new version is included in this update.  Specifically, \ref commands to \section, \subsection, etc. labels are now working and the script no longer returns indecipherable error codes when it encounters something it cannot parse.

# Release notes for v1.02: #

This release introduces some new css so that LaTeX tables display in a more reasonable way and fixes a bug that caused numbered and unnumbered lists to be displayed incorrectly.

# Release notes for v1.01: #

This release fixed a bug that caused display equations and some other elements to display incorrectly.

# Release notes for v1.0: #

This is the original release.