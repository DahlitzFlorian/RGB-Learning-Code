<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codeigniter extends MY_Controller 
{

	/**
	 * type: controller
	 * handles Codeigniter page
	 *
	 * @author Florian Dahlitz
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'codeigniter';
		$this->load->view('layout', $this->data);
	}
}
