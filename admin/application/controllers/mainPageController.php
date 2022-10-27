<?php

class MainPageController extends MY_Controller{

	function __construct(){
		parent::__construct();
		 $this->load->model('makatebModel');
		// $this->load->model('mainPageModel');
	}

	function index($message = null, $type = null,$result="صفحه اصلی"){
		$data=$this->makatebModel->getMakateb();
		$this->load->view('include/header.inc.php',array('result'=>$result));
		$this->load->view('mainPage',array('data'=>$data));
		$this->load->view('include/footer.inc.php');
	}
	

	}
?>
