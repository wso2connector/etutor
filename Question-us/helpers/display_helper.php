<?php
/*
 * <div id="" class="ui_tab_btn">
 * <img width="16px;"
 * height="16px;"
 * style="cursor:pointer;cursor:hand;"
 * onclick="viewMonthlyAttendance('http://dev.metalanka.com/nandana/PANAS_CONCORD/index.php?ctrl=Attendance&amp;pg=atd_month&amp;ac=atdmonth_view&amp;semp=1&amp;i_emp_id=2','http://dev.metalanka.com/nandana/PANAS_CONCORD/index.php?ctrl=Attendance&amp;pg=atd_month&amp;ac=atdmonth_view&amp;semp=1&amp;i_emp_id=2','');"
 * alt="View"
 * src="images/button/View.png"
 * name="View"
 * title="View">
 *
 * $config['icon'] = "images/button/View.png"
 * $config['title'] = "View"
 * $config['js'] = "View"
 * $config['js'] = "View"
 * </div>
 */
function get_action_button($config = null)
{
	// get flash message from CI instance
	//$ci =& get_instance();
	//$flashmsg = $ci->session->flashdata('message');
        //echo $flashmsg;

	$html = '';
	if (is_array($config))
	{

		$html .= '<div id="" class="ui_tab_btn">
			<img
                          width="16px;"
                          height="16px;"
                          style="cursor:pointer;cursor:hand;" '.
                        ' src="'.$config['icon'].'"'.
                        ' alt="'.$config['title'].'"'.
                        ' title="'.$config['title'].'"';

                $js = "";
                if(isset($config['js']) && $config['js'] != ""){
                    $js = ' onclick="return '.$config['js'].'"';
                    $config['action'] = "#";
                }

		$html .= '/></div>';

            if($config['action'] != ""){
                $html = '<a href="'.$config['action'].'" '.$js.'>'.$html."</a>";
            }else{
                $html = '<a href="#" '.$js.'>'.$html."</a>";
            }
	}
	return $html;
}

function get_label_button($config = null)
{
	// get flash message from CI instance
	//$ci =& get_instance();
	//$flashmsg = $ci->session->flashdata('message');
        //echo $flashmsg;

	$html = '';
	if (is_array($config))
	{
            $js = "";
            if(isset($config['js'])){
                $js = ' onclick="'.$config['js'].'"';
            }

            $action = "#";
            if($config['action'] != ""){
                $action = $config['action'];
            }


           //button open
           $html .= '<div id="" class="ui_label_btn">';
           //icon
           $html .= '<a href="'.$action.'" '.$js.' class="icon">';
           $html .= '<img width="32px;" height="32px;" style="cursor:pointer;cursor:hand;" '.
                    ' src="'.$config['icon'].'"'.
                    ' alt="'.$config['title'].'"'.
                    ' title="'.$config['title'].'"'.
                    '/>&nbsp;';
           $html .= '</a>';

           //label
           $html .= '<a href="'.$action.'" '.$js.' class="btn_label">';
           $html .= $config['title'];
           $html .= '</a>';

           //close button
           $html .= '</div>';
	}
	return $html;
}
?>
