<?php
class MAnswer extends CI_Model
{
    private $lastMessage = "";

    function __Construct()
    {
        parent::__Construct();
    }


    function check($id)
    {
        $ret = FALSE;
        $this->db->from('answers');
        $this->db->where('post', $id);

        if ($this->db->count_all_results() > 0) {
            $ret = TRUE;
        }
        return $ret;
    }


    function checkNew($form_data)
    {
        $ret = FALSE;
        $this->db->from('answers');
        $this->db->where('post', $form_data['post']);
        $this->db->where('answer', $form_data['answer']);
        $this->db->where('username', $form_data['username']);
        $this->db->where('usertype', $form_data['usertype']);

        if ($this->db->count_all_results() > 0) {
            $ret = TRUE;
        }
        return $ret;
    }


    function saveNew($form_data)
    {
        $ret = FALSE;
        $this->lastMessage = "";
        try {
            if ($this->checkNew($form_data) == TRUE) {
                throw new Exception("");
            }

            $this->db->insert('answers', $form_data);

            if ($this->db->affected_rows() == '1') {
                $ret = TRUE;
            }
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }


    function getList1($num, $offset, $questionID)
    {
        // $ret['total_count'] = 0;
        // $ret['table_data'] = array();
        // $this->lastMessage = "";
        // try{

        //     if($offset == null){
        //         $offset = 0;
        //     }

        //     $sql = "SELECT *  FROM `questions` WHERE question_id = '$questionID'";
        //     //$sql .= "limit $offset, $num";
        //     //echo $sql;
        //     //$query = $this->db->get('user', $num, $offset);
        //     $query = $this->db->query($sql);
        //     $tdata = array();
        //     foreach ($query->result_array() as $row)
        //     {
        //        $tdata[] = $row;
        //     }
        //    // echo $this->db->last_query();

        //     //count total result
        //     $this->db->from('questions');
        //     $total = $this->db->count_all_results();

        //     //set return
        //     $ret['total_count'] = $total;
        //     $ret['table_data'] = $tdata;
        // }
        // catch (Exception $e)
        // {
        //     $this->lastMessage = $e->getMessage();
        // }
        // return $ret;
    }


    function retrieve($id)
    {
        $ret = null;
        $this->lastMessage = "";
        try {
            if ($this->check($id) == FALSE) {
                throw new Exception("Question does not exist");
            }

            $sql = "SELECT * FROM answers WHERE post='{$id}'";
            $query = $this->db->query($sql);
            $ret = $query->row_array();
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }


    function getList($num, $offset, $id)
    {
        $ret['total_count'] = 0;
        $ret['table_data'] = array();
        $this->lastMessage = "";
        try {

            if ($offset == null) {
                $offset = 0;
            }

            $sql = "SELECT *  FROM `answers` WHERE post = $id";
            //$sql .= "limit $offset, $num";
            //echo $sql;
            //$query = $this->db->get('user', $num, $offset);
            $query = $this->db->query($sql);
            $tdata = array();
            foreach ($query->result_array() as $row) {
                $tdata[] = $row;
            }
            //echo $this->db->last_query();

            //count total result
            $this->db->from('questions');
            $total = $this->db->count_all_results();

            //set return
            $ret['total_count'] = $total;
            $ret['table_data'] = $tdata;
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }

}

?>