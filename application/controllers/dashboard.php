<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = "My Dashboard";
		$user = $this->ion_auth_model->user()->row();
		$data['first_name'] = $user->first_name;
		$data['last_name'] = $user->last_name;
		$data['email'] = $user->email;
		$data['identity'] = $this->ion_auth->logged_in();
		$this->load->template_main('backend/dashboard_view', $data);
	}

}

/* End of dashboard.php file */
/* Location: ./application/controllers/dashboard.php */