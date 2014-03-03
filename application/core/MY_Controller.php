<?php
class MY_Controller extends CI_Controller
{
    function MY_Controller ()  {
        parent::Controller();
    }

	// public function is_post()
	// {
	// 	return $_SERVER['REQUEST_METHOD'] == 'POST' ? TRUE : FALSE;
	// }

	if ( ! $this->ion_auth->is_admin()) {
		// redirect('auth/login');
	}
	// else {
	// 	//Store user in $data
	// 	$data['user_info'] = $this->ion_auth->user()->row();
	// 	//Load $the_user in all views
	// 	$this->load->vars($data);
	// }
}

/* End of MY_Controller.php file */
/* Location: ./application/core/MY_Controller.php */