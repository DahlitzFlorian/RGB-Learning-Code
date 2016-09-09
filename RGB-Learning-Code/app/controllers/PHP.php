<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PHP extends MY_Controller 
{

	/**
	 * type: controller
	 * handles PHP page
	 *
	 * @author Florian Dahlitz
	 */

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['subview'] = 'php';
		$this->load->view('layout', $this->data);
	}

	public function using_php_code()
	{
		$this->data['subview'] = 'php/using_php_code';
		$this->load->view('layout', $this->data);
	}

	public function comments()
	{
		$this->data['subview'] = 'php/comments';
		$this->load->view('layout', $this->data);
	}

	public function variables()
	{
		$this->data['subview'] = 'php/variables';
		$this->load->view('layout', $this->data);
	}

	public function arrays()
	{
		$this->data['subview'] = 'php/arrays';
		$this->load->view('layout', $this->data);
	}

	public function operators()
	{
		$this->data['subview'] = 'php/operators';
		$this->load->view('layout', $this->data);
	}

	public function branching()
	{
		$this->data['subview'] = 'php/branching';
		$this->load->view('layout', $this->data);
	}

	public function loopings()
	{
		$this->data['subview'] = 'php/loopings';
		$this->load->view('layout', $this->data);
	}

	public function including()
	{
		$this->data['subview'] = 'php/including';
		$this->load->view('layout', $this->data);
	}
}
