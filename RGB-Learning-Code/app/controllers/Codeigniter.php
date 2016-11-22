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
    
    public function download()
    {
        $this->data['subview'] = 'codeigniter/download';
        $this->load->view('layout', $this->data);
    }
    
    public function adjust_xampp()
    {
        $this->data['subview'] = 'codeigniter/adjust_xampp';
        $this->load->view('layout', $this->data);
    }
    
    public function basic_settings()
    {
        $this->data['subview'] = 'codeigniter/basic_settings';
        $this->load->view('layout', $this->data);
    }
}
