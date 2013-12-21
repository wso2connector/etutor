
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
            

    public function getlist()
    {
        $this->load->model('msearch');
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
            $this->data['result'] = $this->msearch->retrive($id);

            //var_dump($this->data['result']);
        }
        $this->template->write_view('content', 'search', $this->data);
        $this->template->render();
    }
    
    
}


/* End of file home.php */
/* Location: ./application/controllers/home.php */


?>