<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    private  $data = array();
    private  $pconfig = array();
    
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('mlogin');
        $this->load->helper('display');

    	$this->data['message'] = "";
	}
	

	/**
	 * Index Page
	 */
	public function index()
	{
		
		$this->load->helper(array('form'));
		//$this->load->view('header');
		$this->viewLogin();
		//$this->load->view('footer');
 	}
	

	public function viewLogin()
	{

            $form_data = array(
                        'username' => '',
                        'password' => ''
                        );
            $this->data['form_data'] = $form_data;
            
			//$this->load->view('login_view', $this->data);
			$this->template->write_view('content', 'login_view', $this->data);
		 	$this->template->render();
	}


	public function check()
	{
            $this->form_validation->set_rules('username', 'UserName', 'required|max_length[50]');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');

            $this->form_validation->set_error_delimiters('<br /><span class="ferror-log error-post">', '</span>');

            if ($this->form_validation->run() == FALSE) 
            {
                $this->data['message'] = "Username or password missing.";
				//print_r($this->data);
                $this->viewLogin();
            }
            else
            {
                    
                    $form_data = array(
                                'username' => set_value('username'),
                                'password' => set_value('password')
                                );
                   // print_r($form_data);
                    
					$ret = $this->mlogin->checkLogin($form_data);
                    if ($ret != false) 
                    {
						
                        $this->form_validation->unset_field_data();
                               	
                        
						$this->session->set_userdata($ret);
						$this->session->set_userdata("logged_in", TRUE);
						
						if($this->session->userdata('usertype') == 'tutor')
						{
							redirect('/home/' , 'refresh');
						}
						else
						{
							redirect('/question/', 'refresh');
						}
						
                    }
                    else
                    {
                        $message= array(
                            'content' => "invalid user",
                            'type' => 'error' );
						$this->data['message'] = "Invalid your Login details.please try again.";
                        
                        $this->viewLogin();
                    }
            }
	}
	
	function logout(){
		//unset session data
		$this->session->sess_destroy();
		
		//redirect to login page
		redirect(site_url()."/login/check");
	}
	
	
}

