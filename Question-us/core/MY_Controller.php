<?php
class MY_Controller extends CI_Controller
{
    protected  $data = array();
    protected  $pconfig = array();

    function __construct()
    {
        parent::__construct();

        //check logged
        if($this->session->userdata('is_logged') == FALSE){
                redirect(site_url()."/login");
        }

        //echo $this->session->userdata('role_id');

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('display');

        //basic pagination configuration
        $this->pconfig['full_tag_open'] = '<div class="pagination">';
        $this->pconfig['full_tag_close'] = '</div>';
        $this->pconfig['per_page'] = 20;

        $this->data['message'] = "";
        
        $this->load->model('mauth');

        $form_data['role_id'] = $this->session->userdata('role_id');
        $form_data['module_page'] = $this->router->fetch_class();
        $form_data['action'] =$this->router->fetch_method();

        //print_r($form_data);
        if($form_data['action'] != "authFaild"){
            if(!$this->mauth->checkPermission($form_data)){
                //$this->authFaild();
                //show_error('message');
                redirect($form_data['module_page']."/authFaild");
            }
        }

    }

    function authFaild(){
        $form_data = array(
            );
        $this->data['form_data'] = $form_data;

        $this->template->write_view('content', 'error_unauthorizedaccess', $this->data);
        $this->template->render();
    }
}