<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercises extends MY_Controller 
{

	/**
	 * type: controller
	 * handles PHP OOP page
	 *
	 * @author Florian Dahlitz
	 */

	public function __construkt()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'exercises';
		$this->load->view('layout', $this->data);
	}

	public function oop()
	{
		$this->data['subview'] = 'exercises/oop';
		$this->load->view('layout', $this->data);
	}

	public function heredity()
	{
		$this->data['subview'] = 'exercises/heredity';
		$this->load->view('layout', $this->data);
	}
}
