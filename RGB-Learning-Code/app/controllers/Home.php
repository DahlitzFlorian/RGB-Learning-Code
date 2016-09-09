<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller 
{

	/**
	 * @author Florian Dahlitz
	 *
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/home
	 *	- or -
	 * 		http://example.com/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'home';
		$this->load->view('layout', $this->data);
	}
}
