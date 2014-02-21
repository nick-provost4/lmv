<?php
class Home extends CI_Controller {

	public function index()
	{
	    $data['page'] = 'Home';
		$this->load->view('main_template/header');
		$this->load->view('homeview', $data);
		$this->load->view('main_template/footer');
	}

}
?>