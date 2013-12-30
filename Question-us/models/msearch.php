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

        if ($this->db->count_all_results() > 0) {
            $ret = TRUE;
        }
        return $ret;
    }

    function getSearchResults($searchQuery)
    {
        $ret = null;
        $sql = "SELECT * FROM questions WHERE MATCH(subject) AGAINST('{$searchQuery}') AND MATCH(tags) AGAINST('{$searchQuery}')";
        $query = $this->db->query($sql);
        $ret = $query->result_array();
        return $ret;
    }

}
