<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {

    public function template_main($template_name, $vars = array(), $return = FALSE)
    {
    	$ci =& get_instance();
    	if ($ci->ion_auth->logged_in())
    	{
    		$vars['signin'] 		= 'signout';
    		$vars['signin_text'] 	= 'Sign-out';
    		$vars['update']			= anchor('edit_account', 'Update account', array('class'=>'menu_item', 'title'=>'Update account')).
    		'<span class=\'divider\'>|</span>';
    	}
    	else
    	{
    		$vars['signin'] 		= 'signin';
    		$vars['signin_text'] 	= 'Sign-in';
    		$vars['update']			= '';
    	}
        $content  = $this->view('frontend/main_template/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('frontend/main_template/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}

/* End of MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */