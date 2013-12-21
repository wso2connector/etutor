<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller{
	public function __Construct()
	{
		parent::__Construct();

		$this->load->helper(array('form','url'));
	}

	private  $data = array();
    private  $pconfig = array();

    public function index()
    {
    	$this->viewList();
    }

    public function viewList()
    {
    	$this->template->write_view('content', 'about', $this->data);
        $this->template->render();
    }
}

?>