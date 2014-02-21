<?php
class Home extends CI_Controller {

	public function index()
	{
	    $vars['title'] = 'Home Page';
	    $vars['content'] = 'This is the Home page contents.';
	    $this->load->template_main('homeview', $vars);
	}

}
?>