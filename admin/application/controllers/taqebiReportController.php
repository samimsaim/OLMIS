<?php
class taqebiReportController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('makatebModel');


    }

        function index($message = null, $type = null,$result="راپور مکاتیب تعقیبی"){
            $data=$this->makatebModel->getMakateb();
            $this->load->view('include/header.inc.php',array('result'=>$result));
            $this->load->view('taqebiReports',array('data'=>$data,'Message' => $message, 'Type' => $type));
            $this->load->view('include/footer.inc.php');
    }
    function years($message = null, $type = null,$result="راپور مکاتیب تعقیبی"){
            $data=$this->makatebModel->getYears();
            $this->load->view('include/header.inc.php',array('result'=>$result));
            $this->load->view('years',array('data'=>$data,'Message' => $message, 'Type' => $type));
            $this->load->view('include/footer.inc.php');
    }
    function addYear(){
    $result=$this->makatebModel->addYear();
    if($result){
      redirect('taqebiReportController/years');
    }}
    function deleteYear(){
      $id=$_GET['id'];
      $result =$this->makatebModel->deleteYear($id);
      if($result){
        redirect('taqebiReportController/years');
      }
    }
   
   function allReports($message = null, $type = null){
        $this->load->view('include/header.inc.php');
        $this->load->view("allReports");
        $this->load->view('include/footer.inc.php');
  }
   function monthRep($message = null, $type = null){
        $this->load->view('include/header.inc.php');
        $this->load->view("monthlyReports");
        $this->load->view('include/footer.inc.php');
  }
  function rubRep($message = null, $type = null){
        $this->load->view('include/header.inc.php');
        $this->load->view("rubRep");
        $this->load->view('include/footer.inc.php');
  }
  function hamalRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("hamalRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function sawrRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("sawrRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function jawzaRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("jawzaRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function saratanRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("saratanRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function asadRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("asadRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function snblaRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("snblaRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function mezanRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("mezanRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function aqrabRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("aqrabRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
 function qawsRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("qawsRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function jadeRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("jadeRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function dalwaRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("dalwaRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function hotRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("hotRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  //////////////////////////////////////RUB REPORTS////////////////////////////////////////////////
   function firstRubRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("firstRubRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function secondRub($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("secondRub",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function thirdRub($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("thirdRub",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
  function fourtRub($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("fourtRub",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }
   function yearlyRep($message = null, $type = null){
        $data=$this->makatebModel->getMakateb();
        $this->load->view('include/header.inc.php');
        $this->load->view("yearlyRep",array('data'=>$data));
        $this->load->view('include/footer.inc.php');
  }

      }
      ?>
