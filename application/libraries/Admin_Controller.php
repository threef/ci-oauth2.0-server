<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class Admin_Controller extends CI_Controller {
	public $data = array();
	public function __construct()
	{
		parent::__construct();
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */