<?php
class Home extends CI_Controller {

	public function index()
	{
	    $data['page'] = 'Home';
		$this->load->view('homeview', $data);
	}

}
?>