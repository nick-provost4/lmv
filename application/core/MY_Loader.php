<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class MY_Loader extends CI_Loader {
    public function template_main($template_name, $vars = array(), $return = FALSE)
    {
        $content  = $this->view('main_template/header', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
        $content .= $this->view('main_template/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}

/* End of MY_Loader.php */
/* Location: ./application/core/MY_Loader.php */