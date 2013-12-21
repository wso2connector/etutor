<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __Construct()
	{
		parent::__Construct();

		
		$this->load->helper(array('form','url'));
	}

    private  $data = array();
    private  $pconfig = array();
    

	/**
	 * Index Page
	 */
	public function index()
	{
		
		$this->viewList();

 	}
	

	public function viewList()
	{		
			$this->load->library('form_validation');
			require_once(APPPATH.'modules/swift/swift_required.php');

			$this->form_validation->set_rules('name', 'Your Name' ,'required');
			$this->form_validation->set_rules('email', 'Your Email' ,'required');
			$this->form_validation->set_rules('message', 'Your Message' ,'required');

			if($this->form_validation->run() == FALSE){
				$data["message"] = "Please Corrct followings";

				$this->template->write_view('content', 'Contact', $data);
            	$this->template->render();
			}
			else{

$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('dinith26@gmail.com')
  ->setPassword('tharukadinith90')
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Contact Message')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('dinith26@gmail.com', 'other@domain.org' => 'A name'))
  ->setBody(set_value("message"))
  ;

// Send the message
$result = $mailer->send($message);

				// $config = Array(
				// 		  	'protocol' => 'smtp',
				// 		    'smtp_host' => 'smtp.gmail.com',
				// 		    'smtp_port' => 465,
				// 		    'smtp_user' => 'dinith26@gmail.com',
				// 		    'smtp_pass' => 'tharukadinith90',
				// 		    'mailtype'  => 'html', 
				// 		    'charset'   => 'iso-8859-1'
				// 		);


				$data["message"] = "The email has successfully been sent";




				// $this->load->library('email',$config);

				// $this->email->from(set_value("email") . set_value("name"));
				// $this->email->to("dinith26@gmail.com");
				// $this->email->subject("Contact Message");
				// $this->email->message(set_value("message"));

				// $this->email->send();

				// echo $this->email->print_debugger();

				$this->template->write_view('content', 'Contact', $data);
            	$this->template->render();
			}

			//

			//$this->email->from(set_value)

            
	}
	
	
	
}

