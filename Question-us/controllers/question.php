<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller
{

    private $data = array();
    private $pconfig = array();

    public function __Constructor()
    {
        parent::__Constructor();


        $this->data['message'] = "";
        // $this->load->model('mquestion');
    }

    public function  index()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->helper(array('form'));
        $this->viewQuestion();
    }

    public function viewQuestion()
    {

        $form_data = array(
            //'data' => 'date(Y-m-d)';
            'date' => 'date',
            'category_id' => '',
            ///'sub_category_id' => '',
            'subject' => '',
            'post' => '',
            'username' => '',
            'email' => '',
            'usertype' => ''
        );
        $this->load->model('mquestion');

        $cmbcategory = $this->mquestion->get_dropdown_list('category', 'category_name', 'category_id');
        $this->data['cmb_category'] = $cmbcategory;

        // $scmbSubCat = $this->mquestion->get_dropdown_list('sub_category', 'sub_category_name' ,'sub_category_id');
        // $this->data['sub_scmb_category'] = $scmbSubCat;

        $this->data['form_data'] = $form_data;

        $this->template->write_view('content', 'question_view', $this->data);
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
        $this->load->model('mquestion');

        $cmbcategory = $this->mquestion->get_dropdown_list('category', 'category_name', 'category_id');
        //$scmbSubCat = $this->mquestion->get_dropdown_list('sub_category', 'sub_category_name' ,'sub_category_id');

        $this->form_validation->set_rules('category_id', 'Category', 'required');
        //$this->form_validation->set_rules('sub_category_id', 'Sub Category',  'required');
        $this->form_validation->set_rules('subject', 'Title', 'required');
        $this->form_validation->set_rules('post', 'Question', 'required');
        $this->form_validation->set_rules('tags', 'Tags', 'required');

        $this->form_validation->set_error_delimiters('<div id="alert-danger"><br />', '</div>');

        $form_data = array(
            'date' => (date("Y-m-d")),
            'category_id' => $this->input->post('category_id'),
            'subject' => $this->input->post('subject'),
            'post' => $this->input->post('post'),
            'tags' => $this->input->post('tags'),
            'username' => $this->input->post('username'),
            'usertype' => $this->input->post('usertype')

        );


        if ($this->form_validation->run() == FALSE) {
            $this->data['message'] = null;
            $this->data['form_data'] = $form_data;
            $this->data['cmb_category'] = $cmbcategory;
            //$this->data['sub_scmb_category'] = $scmbSubCat;
            $this->template->write_view('content', 'question_view', $this->data);
            $this->template->render();
        } else {
            if ($this->mquestion->saveNew($form_data) == TRUE) {
                $message = array(
                    'content' => "Question Added.",
                    'type' => 'success');
                $this->data['message'] = $message;

                $this->form_validation->unset_field_data();

                redirect('/home/', 'refresh');
            } else {
                $message = array(
                    'content' => $this->mquestion->getLastMessage(),
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
            'date' => '', //date("Y-m-d"),
            'category_id' => '',
            //'sub_category_id' => '',
            'subject' => '',
            'post' => '',
            'username' => '',
            'email' => '',
            'usertype' => ''
        );
        $this->data['form_data'] = $form_data;
        // var_dump($form_data);
        $this->template->write_view('content', 'question_view', $this->data);
        $this->template->render();
    }

}

?>