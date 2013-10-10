<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();

		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}

		function with($name, $value)
		{
			$this->page_data[$name] = $value;
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$view_data = (isset($this->page_data)) ? array_merge($view_data, $this->page_data) : $view_data;
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			return $this->CI->load->view('layouts/'.$template, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */