<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	// public function is_logged_in()
	// {
 //   	$vars['signin'] = $this->ion_auth->logged_in() ? 'signout' : 'signin';
 //   	$vars['signin_text'] = $this->ion_auth->logged_in() ? 'Sign-out' : 'Sign-in';
	// }

    public function template_main($template_name, $data = array(), $return = FALSE)
    {
    	// $ia = new ion_auth();
    	$data['signin'] = $this->ion_auth->logged_in() ? 'signout' : 'signin';
    	$data['signin_text'] = $this->ion_auth->logged_in() ? 'Sign-out' : 'Sign-in';
        $content  = $this->view('frontend/main_template/header', $data, $return);
        $content .= $this->view($template_name, $data, $return);
        $content .= $this->view('frontend/main_template/footer', $data, $return);

        if ($return)
        {
            return $content;
        }
    }

}

/* End of MY_Controller.php file */
/* Location: ./application/controllers/MY_Controller.php */