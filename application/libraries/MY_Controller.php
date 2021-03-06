<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Controller extention
 *
 * Common code for all controllers goes here.
 * @package Lenka
 * @subpackage Libraries
 * @author Luke Mundy
 */
class MY_Controller extends Controller
{
	public function __construct()
	{
		parent::Controller();
		
		// Which method/controller/module are we running
		$this->module = $this->router->fetch_module();
		$this->controller = $this->router->fetch_class();
		$this->method = $this->router->fetch_method();
		
		// Make these values accessible to all views
		$this->data['module'] =& $this->module;
		$this->data['controller'] =& $this->controller;
		$this->data['method'] =& $this->method;
		
		$this->load->library('template');
		
		// Load system-wide css and javascript
		$this->template->add_css(BASE_URL. 'static/css/system.css');
		$this->template->add_script(BASE_URL. 'static/js/jquery-1.4.2.min.js');
	}
}

// END - class MY_Controller