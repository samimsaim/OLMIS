<?php
class reportsController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('makatebModel');
        

    }

        function index($message = null, $type = null,$result="راپور عمومی"){
            $data=$this->makatebModel->getMakateb();

            $this->load->view('include/header.inc.php',array('result'=>$result));
            $this->load->view('reports',array('data'=>$data,'Message' => $message, 'Type' => $type));
            $this->load->view('include/footer.inc.php');
      	}

      }
      ?>
