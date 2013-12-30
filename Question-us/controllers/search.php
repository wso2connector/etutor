<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

    private  $data = array();
    private  $pconfig = array();

    public function __constructor()
    {
        parent::__constructor();


    }
   
    public function index()
    {
            $this->template->write_view('content', 'search', $this->data);
            $this->template->render();
    }
            

    public function questions()
    {

        $this->load->model('msearch');
        $this->data['search_result'] = $this->msearch->getSearchResults($this->input->post('query'));
        $this->template->write_view('content', 'search', $this->data);
        $this->template->render();
    }
    
    
}


/* End of file home.php */
/* Location: ./application/controllers/home.php */


?>