<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HTML_CSS extends MY_Controller 
{

	/**
	 * type: controller
	 * handles HTML & CSS page
	 *
	 * @author Florian Dahlitz
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'html_css';
		$this->load->view('layout', $this->data);
	}
}
