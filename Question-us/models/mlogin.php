<?php

class MLogin extends CI_Model {

	private $lastMessage = "";
	
	function __construct()
	{
		parent::__construct();
	}

	function getLastMessage()
	{
		return $this->lastMessage;
	}


	function checkLogin($form_data)
	{
		$ret = FALSE;
		
		$where = array('username' => $form_data['username'], 'password' => md5($form_data['password']));
		$query = $this->db->get_where('user', $where);	
		
		if( $this->db->count_all_results() > 0 )
		{
			
			$ret = $query->row_array();
		}
		return $ret;
	}
	
       
}
?>