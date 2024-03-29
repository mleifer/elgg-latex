<?php

	/**
	 * Elgg display long text
	 * Displays a large amount of text, with new lines converted to line breaks
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 * @uses $vars['text'] The text to display
	 * 
	 * Hacked version to work with LaTeXmathml.  Hacks are commented "LaTeXmathml Hack".  M. S. Leifer
	 *
	 */

    /* LaTeXmathml Hack */
    echo "<pre class=\"LaTeX\"><div>" . $vars['value'] . "</div></pre>";
?>