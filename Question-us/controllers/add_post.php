<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_post extends CI_Controller
{
	private $data = array();
	private $pconfig = array();

	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->helper('form');
		//$this->load->model('mask_question');
        $this->load->helper('display');

    	$this->data['message'] = "";
	}

	public function  index()
	{
		$this->load->helper(array('form'));
		$this->load->view('header');
		$this->load->view('add_post_view');
		$this->load->view('footer');
	}

}




?>