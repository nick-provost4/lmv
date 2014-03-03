<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$vars['title'] = 'Home Page';
		$search_img = array(
			'src' => '../images/search.jpg',
			'alt' => 'Search vacation rental discounts',
			'width' => '20px',
		);
		$this->load->template_main('frontend/homeview', $vars);
	}

	public function signin()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$vars['title'] = 'Sign-in Page';
		$vars['message'] = 'Sign-in';
//		$this->load->login();
		$this->load->template_main('auth/login', $vars);
	}

}

/* End of home.php file */
/* Location: ./application/controllers/home.php */