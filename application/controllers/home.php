<?php
class Home extends CI_Controller {

	public function index()
	{
		$vars['title'] = 'Home';
		$search_img = array(
			'src' => '../images/search.jpg',
			'alt' => 'Search vacation rental discounts',
			'width' => '20px',
		);
		$this->load->template_main('frontend/homeview', $vars);
	}

	public function email_notify()
	{
		$vars['title'] = 'Email notify';
		if ($this->ion_auth->logged_in())
		{
			$this->load->template_main('frontend/update_member', $vars);
		}
		else
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function list_property()
	{
		$vars['title'] = 'List property';
		if ($this->ion_auth->logged_in())
		{
			$this->load->template_main('frontend/list_property', $vars);
		}
		else
		{

		}
	}

}

/* End of home.php file */
/* Location: ./application/controllers/home.php */