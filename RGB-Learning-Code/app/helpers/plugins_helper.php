<?php

/**
 * Helper-file to help including plugins
 *
 * @author Florian Dahlitz
 *
 */

if (! function_exists('git_code'))
{
	function git_code($filename)
	{
		return '<script src="http://gist-it.appspot.com/http://github.com/Train132/RGB-Learning/blob/master/' . $filename . '.php' . '"></script>';
	}
}