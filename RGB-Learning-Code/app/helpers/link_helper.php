<?php

/**
 * Helper-file to help navigating to other websites
 *
 * @author Florian Dahlitz
 *
 */

if (! function_exists('git_link'))
{
	function git_link($subdir)
	{
		return 'https://github.com/Train132/RGB-Learning/tree/master/' . $subdir . '.php';
	}
}