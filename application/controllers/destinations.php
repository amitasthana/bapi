<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {

	$this->load->helper('url');

	$data['title']  = '';
	$this->load->view('templates/header', $data);
	$this->load->view('templates/footer', $data);
}



