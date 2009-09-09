<?php

	/**
	 * Elgg LaTeXmathml plugin
	 * This plugin allows users to enter LaTeX anywhere that uses the view 'output/longtext'.  
	 * It also displays LaTeX in blogs and messages.  
	 * The output is rendered using the extened 
	 * LaTeXmathml script by Jeff Knisley, which is available from 
	 * http://math.etsu.edu/LaTeXMathML/
	 *
	 * @package LaTeXmathml
	 * @license http://gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public Licence version 2
	 * @author Matthew Saul Leifer <matt@mattleifer.info>
	 * @link http://www.mattleifer.info/Elgg_Latex/
	 */
	 
	/**
	 * LaTeXmathml initialization
	 */
	 
	 	function LaTeXmathml_init() {
                     /* This is how you should include the css file, but it didn't work in elgg 1.1 */
                     /* extend_view('css','LaTeXmathml/css'); */
                     extend_view('metatags','metaadditions');
		     extend_view('page_elements/header','latexstopper');
	 	}

	// Make sure the LaTeXmathml initialization function is called on initialization

		register_elgg_event_handler('init','system','LaTeXmathml_init');

?>