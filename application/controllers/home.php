<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$vars['title'] = 'Home Page';
		$vars['content'] = 'This is the Home page contents.';
		$this->load->template_main('homeview', $vars);
		$search_img = array(
			'src' => '../images/search.jpg',
			'alt' => 'Search vacation rental discounts',
			'width' => '20px',
		);
	}

}

/* End of home.php file */
/* Location: ./application/controllers/home.php */