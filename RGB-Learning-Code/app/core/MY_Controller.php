<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->config->load('general');

		$this->data['title'] = $this->config->item('title');
	}
	
}
