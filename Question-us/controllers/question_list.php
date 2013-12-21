
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_list extends CI_Controller {

    private  $data = array();
    private  $pconfig = array();

    public function __constructor()
    {
    	parent::__constructor();


    }
   
	public function index()
	{
		$this->viewList();
 	}
	

	public function viewList()
	{		
			$this->load->library('pagination');
            $this->load->library('table');
			$this->load->helper('display');

			$this->load->model('mquestion_list');


			$this->pconfig['full_tag_open'] = '<div class="pagination">';
	        $this->pconfig['full_tag_close'] = '</div>';
	        $this->pconfig['per_page'] = 5;

			$result = $this->mquestion_list->getList($this->pconfig['per_page'],$this->uri->segment(3));

			$this->pconfig['base_url'] = site_url().'/question_list/viewList/';     
            $this->pconfig['total_rows'] = $result['total_count'];
            $this->pagination->initialize($this->pconfig);

            $this->data['table_data'] = $result['table_data'];


            $this->template->write_view('content', 'question_list', $this->data);
            $this->template->render();
	}



	     function view()
	     {
            $keys['question_id'] =  $this->uri->segment(3, null);
            $this->load->model('mquestion');

            $form_data = $this->mquestion_list->retrive($keys);
            if($form_data == null){
                $form_data = array(
                		'question_id' =>'',
                        'category_id' => '',
						'sub_category_id' => '',
						'subject' => '',
						'post' => '',
						'username' => '',
						'email' => '',
						'usertype' => ''
                        );
            }
            $data['form_data'] = $form_data;
            $this->load->view("question_list", $data);
        }
	
	
	
}



?>