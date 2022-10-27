<?php
class dosya_archiveController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('dosya_archiveModel');

    }
    function index($message = null, $type = null,$result=" لست دوسیه های آرشیف"){
  	      $data=$this->dosya_archiveModel->getdosya_archive();
          $this->load->view('include/header.inc.php',array('result'=>$result));
          $this->load->view('dosya_archive',array('data'=>$data,'Message' => $message, 'Type' => $type));
          $this->load->view('include/footer.inc.php');
  	}
    function addDosya(){
      $this->load->view('include/header.inc.php');
      $this->load->view('addDosya');
      $this->load->view('include/footers.inc.php');
    }
    function checkAddDosya(){
        $error_dosya_id = $error_dosya_name ='';
        $error = false;
        if (isset($_POST['addDosya'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['dosya_id'])) {
                $error_dosya_id = 'لطفا شماره را وارد نماید';
                $error = true;
            }

            if (empty($_POST['dosya_name'])) {
                $error_shuba_name = 'لطفاً  دوسیه آرشیف را وارد نماید';
                $error = true;
            }

            }

        if (!$error) {
            $fields_data = array(
                'dosya_id' => $_POST['dosya_id'],
                'dosya_name' => $_POST['dosya_name'],

            );
           $data= $this->dosya_archiveModel->addDosya($fields_data);
           if($data){
            redirect('dosya_archiveController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addDosya', array(
                '$error_dosya_id' => $error_dosya_id,
                '$error_dosya_name' => $error_dosya_name,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function editdosya_archive(){
      $id=$_GET['id'];
     $dosya_archive=$this->dosya_archiveModel->getdosya_archiveById($id);
     $this->load->view('include/header.inc.php');
     $this->load->view('editdosya_archive',array('dosya_archive'=>$dosya_archive));
     $this->load->view('include/footer.inc.php');
   }
    function checkEditDosya_archive(){
        $error_dosya_id = $error_dosya_name ='';
        $error = false;
        if (isset($_POST['addDosya'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['dosya_id'])) {
                $error_dosya_id = 'لطفا شماره را وارد نماید';
                $error = true;
            }

            if (empty($_POST['dosya_name'])) {
                $error_dosya_name = 'لطفاً  شعبه مربوطه را وارد نماید';
                $error = true;
            }
            }

        if (!$error) {
            $fields_data = array(
              'dosya_id' => $_POST['dosya_id'],
              'dosya_name' => $_POST['dosya_name'],
            );
           $data= $this->dosya_archiveModel->editdosya_archive($_POST['id'],$fields_data);
           if($data){
            redirect('dosya_archiveController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addShuba', array(
              '$error_dosya_id' => $error_dosya_id,
              '$error_dosya_name' => $error_dosya_name,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function dosya_archiveDetail(){
      $id=$_GET['id'];
      $araiz=$this->dosya_archiveModel->getdosya_archiveById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('dosya_archiveDetail',array('dosya_archive'=>$dosya_archive));
      $this->load->view('include/footer.inc.php');
    }
   function deletedosya_archive(){
    $id=$_GET['id'];
    $this->dosya_archiveModel->deletedosya_archive($id);
    redirect('dosya_archiveController/index');
  }
  }
  ?>
