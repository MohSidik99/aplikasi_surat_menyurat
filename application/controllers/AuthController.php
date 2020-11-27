<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends Ci_Controller{
	public function __construct(){
		echo "Tampilkan menu atas";
		parent::__construct();
	}

	public function tampilkan_login(){
		echo "Baru ini";
		$this->load->view("login");
	}

	public function tampilkan_register(){
		echo "Baru ini";
		echo "Disini nanti tampilkan halaman registrasi";
	}

	public function tampilkan_atas(){
		echo "Atas";
	}
}