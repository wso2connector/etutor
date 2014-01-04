<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $this->viewList();
    }


    public function viewList()
    {


        $form_data = array(
            'user_id' => '',
            'username' => '',
            'email' => '',
            'password' => '',
            'usertype' => ''
        );
        $this->data['form_data'] = $form_data;

        $this->template->write_view('content', 'register_view', $this->data);
        $this->template->render();
    }


    public function add()
    {

        $form_data = array(
            'user_id' => '',
            'username' => '',
            'email' => '',
            'password' => '',
            'usertype' => ''
        );
        $this->data['form_data'] = $form_data;
        //var_dump($form_data);
        $this->template->write_view('content', 'register_view', $this->data);
        $this->template->render();
    }


    public function save()
    {
        if ($this->input->post("form_action") == "new") {
            $this->saveNew();
        } else if ($this->input->post("form_action") == "edit") {
            $this->saveEdit();
        }
    }


    public function saveNew()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('mregister');

        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('usertype', 'usertype', 'required');

        $this->form_validation->set_error_delimiters('<br /><span class="ferror-log error-post">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $this->data['message'] = null;
            $this->add();
        } else {
            $form_data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'usertype' => $this->input->post('usertype')
            );
            var_dump($form_data);
            if ($this->mregister->saveNew($form_data) == TRUE) {
                $message = array(
                    'content' => "Register Successfully.",
                    'type' => 'success');
                $this->data['message'] = $message;

                $this->form_validation->unset_field_data();

                redirect('/login/', 'refresh');
            } else {
                $message = array(
                    'content' => $this->mregister->getLastMessage(),
                    'type' => 'error');

                $this->data['message'] = $message;
                $this->add();
            }
        }
    }
}