<?php
class shuabatController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('shuabatModel');

    }
    function index($message = null, $type = null,$result=" لست شعبات"){
  	      $data=$this->shuabatModel->getshuabat();
          $this->load->view('include/header.inc.php',array('result'=>$result));
          $this->load->view('shuabat',array('data'=>$data,'Message' => $message, 'Type' => $type));
          $this->load->view('include/footer.inc.php');
  	}
    function addShuba(){
      $this->load->view('include/header.inc.php');
      $this->load->view('addShuba');
      $this->load->view('include/footer.inc.php');
    }
    function checkAddShuba(){
        $error_shuba_id = $error_shuba_name ='';
        $error = false;
        if (isset($_POST['addShuba'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['shuba_id'])) {
                $error_shuba_id = 'لطفا شماره را وارد نماید';
                $error = true;
            }

            if (empty($_POST['shuba_name'])) {
                $error_shuba_name = 'لطفاً  شعبه مربوطه را وارد نماید';
                $error = true;
            }

            }

        if (!$error) {
            $fields_data = array(
                'shuba_id' => $_POST['shuba_id'],
                'shuba_name' => $_POST['shuba_name'],

            );
           $data= $this->shuabatModel->addShuba($fields_data);
           if($data){
            redirect('shuabatController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addShuba', array(
                '$error_shuba_id' => $error_shuba_id,
                '$error_shuba_name' => $error_shuba_name,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function editShuabat(){
      $id=$_GET['id'];
     $shuabat=$this->shuabatModel->getShuabatById($id);
     $this->load->view('include/header.inc.php');
     $this->load->view('editshuabat',array('shuabat'=>$shuabat));
     $this->load->view('include/footer.inc.php');
   }
    function checkEditShuabat(){
        $error_shuba_id = $error_shuba_name ='';
        $error = false;
        if (isset($_POST['addShuba'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['shuba_id'])) {
                $error_shuba_id = 'لطفا شماره را وارد نماید';
                $error = true;
            }

            if (empty($_POST['shuba_name'])) {
                $error_shuba_name = 'لطفاً  شعبه مربوطه را وارد نماید';
                $error = true;
            }
            }

        if (!$error) {
            $fields_data = array(
              'shuba_id' => $_POST['shuba_id'],
              'shuba_name' => $_POST['shuba_name'],
            );
           $data= $this->shuabatModel->editShuabat($_POST['id'],$fields_data);
           if($data){
            redirect('shuabatController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addShuba', array(
              '$error_shuba_id' => $error_shuba_id,
              '$error_shuba_name' => $error_shuba_name,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function shuabatDetail(){
      $id=$_GET['id'];
      $araiz=$this->shuabatModel->getShuabatById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('shuabatDetail',array('shuabat'=>$shuabat));
      $this->load->view('include/footer.inc.php');
    }
   function deleteShuabat(){
    $id=$_GET['id'];
    $this->shuabatModel->deleteShuabat($id);
    redirect('shuabatController/index');
  }
  }
  ?>
