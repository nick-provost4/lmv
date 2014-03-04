<?php
class Home extends CI_Controller {

	public function index()
	{
		$vars['title'] = 'Home Page';
		$search_img = array(
			'src' => '../images/search.jpg',
			'alt' => 'Search vacation rental discounts',
			'width' => '20px',
		);
		$this->load->template_main('frontend/homeview', $vars);
	}

}

/* End of home.php file */
/* Location: ./application/controllers/home.php */