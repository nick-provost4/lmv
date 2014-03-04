<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {

    public function template_main($template_name, $vars = array(), $return = FALSE)
    {
    	$ia = new ion_auth();
    	$vars['signin'] = $ia->ion_auth->logged_in() ? 'signout' : 'signin';
    	$vars['signin_text'] = $ia->ion_auth->logged_in() ? 'Sign-out' : 'Sign-in';
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