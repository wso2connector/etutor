<?php

class Mregister extends CI_Model
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

    // --------------------------------------------------------------------
    function check($form_data)
    {
        $ret = FALSE;
        $this->db->from('user');
        $this->db->where('username', $form_data['username']);

        if ($this->db->count_all_results() > 0) {
            $ret = TRUE;
        }
        return $ret;
    }

    function checkNew($form_data)
    {
        $ret = FALSE;
        $this->db->from('user');
        $this->db->where('username', $form_data['username']);
        $this->db->where('email', $form_data['email']);
        $this->db->where('password', $form_data['password']);
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
                throw new Exception("User already exist");
            }

            $this->db->insert('user', $form_data);

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

            $this->db->where('user_id', $keys['user_id']);
            $this->db->update('user', $form_data);

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
                throw new Exception("User does not exist");
            }

            $this->db->delete('user', $keys);
            $ret = TRUE;
        } catch (Exception $e) {
            $this->lastMessage = $e->getMessage();
        }
        return $ret;
    }
}

?>