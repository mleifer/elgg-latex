<?php

	/**
	 * elgg-latex plugin
	 * This plugin allows users to enter LaTeX anywhere that uses the view 'output/longtext'.  
	 * It also displays LaTeX in blogs and messages.  
	 * The output is rendered using the extened 
	 * LaTeXmathml script by Jeff Knisley, which is available from 
	 * http://math.etsu.edu/LaTeXMathML/
	 *
	 * @package elgg-latex
	 * @license http://gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public Licence version 2
	 * @author Matthew Saul Leifer <matt@mattleifer.info>
	 * @link http://code.google.com/p/elgg-latex/
	 */

	/**
	 * Add link to the javascript and css for LaTeXmathml to the
	 * page metatags
	 */
?>	
	 <script type="text/javascript" src="<?php echo $vars['url']; ?>mod/LaTeXmathml/javascript/LaTeXMathML.js"></script>
	 <link rel="stylesheet" type="text/css" href="<?php echo $vars['url']; ?>mod/LaTeXmathml/LaTeXMathML.standardarticle.css" />