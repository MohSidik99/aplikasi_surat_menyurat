<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends Ci_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function halaman_home(){
		echo "INi home loh";
	}
}