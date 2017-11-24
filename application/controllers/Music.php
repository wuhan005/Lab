<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Music extends CI_Controller {

	public function index()
    {
		$data["nowType"] = "music"; 
		//Load main page.
		$this->load->view('templates/header', $data);
		$this->load->view("MusicHunter");
		$this->load->view('templates/footer');
    }
}
