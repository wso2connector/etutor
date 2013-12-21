<?php
 class MSearch extends CI_Model
 {
    private $lastMessage = "";

    function __construct()
    {
        parent::__construct();
    }

    function getLastMessage()
    {
        return $this->lastMessage;
    }

            function check($form_data)
        {
            $ret = FALSE;
            $this->db->from('questions');
            $this->db->where('question_id', $form_data['question_id']);

            if( $this->db->count_all_results() > 0 )
            {
                $ret = TRUE;
            }
            return $ret;
        }



        function retrive($qname)
        {
            $ret = null;
            $this->lastMessage = "";

                $sql = "SELECT * FROM `questions` WHERE subject LIKE  '%$qname%'";
                $query = $this->db->query($sql);
                $ret = $query->result_array();
                //var_dump($ret);
                return $ret;
        }

 }

?>