<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_ctrl extends CI_Controller {
	public function view($page = 'homepage'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);

		$this->load->view('template/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('template/footer');
	}
}
