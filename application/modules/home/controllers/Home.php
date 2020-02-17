<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
		$this->load->module('template');
    }

    public function index() {
    	$this->manage();
    }

    public function manage() {
        $this->data['home_page'] = TRUE;

        $this->data['view_module'] = 'home';
        $this->data['view_file'] = 'manage';
        $this->load->module('template');
        $this->template->_shop_ui($this->data);
	}


}
