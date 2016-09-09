<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PHP_OOP extends MY_Controller 
{

	/**
	 * type: controller
	 * handles PHP OOP page
	 *
	 * @author Florian Dahlitz
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'php_oop';
		$this->load->view('layout', $this->data);
	}

	public function general()
	{
		$this->data['subview'] = 'php_oop/general';
		$this->load->view('layout', $this->data);
	}

	public function classes()
	{
		$this->data['subview'] = 'php_oop/classes';
		$this->load->view('layout', $this->data);
	}

	public function attributes()
	{
		$this->data['subview'] = 'php_oop/attributes';
		$this->load->view('layout', $this->data);
	}

	public function constructor()
	{
		$this->data['subview'] = 'php_oop/constructor';
		$this->load->view('layout', $this->data);
	}

	public function methods()
	{
		$this->data['subview'] = 'php_oop/methods';
		$this->load->view('layout', $this->data);
	}

	public function heredity()
	{
		$this->data['subview'] = 'php_oop/heredity';
		$this->load->view('layout', $this->data);
	}
}
