<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Answer extends CI_Controller
{
    private $data = array();
    private $pconfig = array();

    public function __Constructor()
    {
        parent::__Constructor();

        $this->data['message'] = "";
    }

    public function index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->helper(array('form'));
        $this->viewList();

    }


    public function viewList()
    {
        $this->load->library('pagination');
        $this->load->library('table');
        $this->load->helper('display');

        $this->load->model('manswer');


        $this->pconfig['full_tag_open'] = '<div class="pagination">';
        $this->pconfig['full_tag_close'] = '</div>';
        $this->pconfig['per_page'] = 10;


        $id = $_GET['id'];
        $result = $this->manswer->getList($this->pconfig['per_page'], $this->uri->segment(3), $id);;


        $this->pconfig['base_url'] = site_url() . '/answer/viewList/';
        $this->pconfig['total_rows'] = $result['total_count'];
        $this->pagination->initialize($this->pconfig);

        $this->data['id'] = $id;
        $this->data['table_data'] = $result['table_data'];
        $this->data['post'] = $_GET['id'];

        $this->load->model('mquestion');
        $result = $this->mquestion->getname($id);
        $this->data['question'] = $result;


        $this->template->write_view('content', 'answer_view', $this->data);
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
        $this->load->model('manswer');

        $this->form_validation->set_rules('answer', 'Answer', 'required');

        $this->form_validation->set_error_delimiters('<div id="alert-danger"><br />', '</div>');

        $form_data = array(
            'post' => $this->input->post('post'),
            'answer' => $this->input->post('answer'),
            'username' => $this->input->post('username'),
            'usertype' => $this->input->post('usertype')
        );
        $id = $this->input->post('post');

        if ($this->form_validation->run() == FALSE) {
            $this->data['message'] = null;
            $this->data['form_data'] = $form_data;
            $this->data['id'] = $id;


            $this->template->write_view('content', 'answer_view', $this->data);
            $this->template->render();
        } else {
            if ($this->manswer->saveNew($form_data) == TRUE) {
                $message = array(
                    'content' => "Answer Added.",
                    'type' => 'success');
                $this->data['message'] = $message;

                $this->form_validation->unset_field_data();
                //var_dump($form_data);

                redirect('/answer/?id=' . $id, 'refresh');
            } else {
                $message = array(
                    'content' => $this->manswer->getLastMessage(),
                    'type' => 'error');
                //var_dump($message);
                $this->data['message'] = $message;
                $this->add();
            }
        }


    }


    public function add()
    {
        $form_data = array(
            'post' => '',
            'answer' => '',
            'username' => '',
            'usertype' => ''
        );
        $this->data['form_data'] = $form_data;
        $this->template->write_view('content', 'answer_view', $this->data);
        $this->template->render();
    }



}

?>