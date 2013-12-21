<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 * How to Set
 *  $this->session->set_flashdata( 'message', array(
 *      'content' => 'License could not be saved',
 *      'type' => 'error' ));
 *
 * Message Types
 *  <div class="info">Info message</div>
    <div class="success">Successful operation message</div>
    <div class="warning">Warning message</div>
    <div class="error">Error message</div>
 */
function show_message($flashmsg = null)
{
	// get flash message from CI instance
	//$ci =& get_instance();
	//$flashmsg = $ci->session->flashdata('message');
        //echo $flashmsg;
        
	$html = '';
	if (is_array($flashmsg))
	{
		$html = '<div class="'.$flashmsg['type'].'">
			<p>'.$flashmsg['content'].'</p>
			</div>';
	}
	return $html;
}
?>
