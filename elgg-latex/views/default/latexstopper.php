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
	 * Addition to the <body> section of every page that prevents 
	 * LaTeXmathml parsing pages that have no LaTeX content.
	 */
?>	
       <pre class="LaTeX"><div></div></pre>