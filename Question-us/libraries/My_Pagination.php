<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Pagination extends CI_Pagination {

    var $ajax = false;

    public function __construct()
    {
        parent::__construct();
    }
	
    function create_links()
    {
            $html = parent::create_links();

            $CI =& get_instance();

            $isAjax = $CI->input->is_ajax_request();
            if(!$isAjax && $this->ajax){
                $isAjax = true;
            }

            if($isAjax){
                $html = str_replace("<a", "<a onclick=\"return ajaxPagination(this)\" ", $html);
            }

            return $html;
    }

    function ajax_pagination($flag){
        $this->ajax = $flag;
    }
}