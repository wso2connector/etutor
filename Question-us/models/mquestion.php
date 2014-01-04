<?php
class MQuestion extends CI_Model
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

        if ($this->db->count_all_results() > 0) {
            $ret = TRUE;
        }
        return $ret;
    }

    function checkNew($form_data)
    {
        $ret = FALSE;
        $this->db->from('questions');
        $this->db->where('date', $form_data['date']);
        $this->db->where('category_id', $form_data['category_id']);
        // $this->db->where('sub_category_id', $form_data['sub_category_id']);
        $this->db->where('subject', $form_data['subject']);
        $this->db->where('post', $form_data['post']);
        $this->db->where('tags', $form_data['tags']);
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
                throw new Exception("This question is already in the database");
            }

            $this->db->insert('questions', $form_data);

            if ($this->db->affected_rows() == '1') {
                $ret = TRUE;
            }
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }

    function saveEdit($form_data, $keys)
    {
        $ret = FALSE;
        $this->lastMessage = "";
        try {
            if ($this->check($keys) == FALSE) {
                throw new Exception("Unit does not exist");
            }

            $this->db->where('question_id', $keys['question_id']);
            $this->db->update('questions', $form_data);

            $ret = TRUE;
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }

    function delete($keys)
    {
        $ret = FALSE;
        $this->lastMessage = "";
        try {
            if ($this->check($keys) == FALSE) {
                throw new Exception("Question does not exist");
            }

            $this->db->delete('questions', $keys);
            $ret = TRUE;
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }


    function cmbCategory()
    {
        $ret = array("Select Category");
        $this->lastMessage = "";
        try {
            $query = $this->db->get('category');

            foreach ($query->result() as $row) {
                $cid = $row->category_name;
                $ret[$cid] = $row->category_name;
            }
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }


    function cmbSubCat()
    {

        $ret = array("Select Sub Category");
        $this->lastMessage = "";
        try {
            $query = $this->db->get('sub_category');
            //$query = $this->db->get()

            foreach ($query->result() as $row) {
                $scid = $row->sub_category_name;
                $ret[$scid] = $row->sub_category_name;
            }
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;

    }

    function get_dropdown_list($table, $column, $id)
    {
        $this->db->from($table);
        $result = $this->db->get();
        $return = array();
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row[$id]] = $row[$column];
            }
        }

        return $return;
    }


    function retrive($keys)
    {
        $ret = null;
        $this->lastMessage = "";
        try {
            if ($this->check($keys) == FALSE) {
                throw new Exception("Question does not exist");
            }

            $sql = "SELECT * FROM `questions` ORDER BY question_id DESC";
            $query = $this->db->query($sql);
            $ret = $query->row_array();
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }


    function getname($qname)
    {


        $sql = "SELECT *  FROM `questions` WHERE question_id = $qname";

        $query = $this->db->query($sql);

        return array_shift($query->result_array());

        // $row = array_shift($query->result_array());
        // $this->data['name'] = $row['post'];
    }

    function getList($num, $offset)
    {
        $ret['total_count'] = 0;
        $ret['table_data'] = array();
        $this->lastMessage = "";
        try {

            if ($offset == null) {
                $offset = 0;
            }

            $sql = "SELECT *  FROM `questions` ORDER BY question_id DESC";
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