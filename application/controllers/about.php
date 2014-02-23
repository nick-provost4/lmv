<?php
class About extends CI_Controller {

	public function index()
	{
		$vars['title'] = 'About Page';
		$vars['content'] = 'This is the About page contents.';
		$this->load->template_main('homeview', $vars);
	}

}

/* End of about.php file */
/* Location: ./application/controllers/about.php */