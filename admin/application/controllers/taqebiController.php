<?php
class taqebiController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('nawyat_maktobModel');
        $this->load->model('makatebModel');

    }
    function index($message = null, $type = null,$result=" لست مکاتیب صادره"){
        $data=$this->nawyat_maktobModel->getTaqebi();

        $this->load->view('include/header.inc.php',array('result'=>$result));
        $this->load->view('taqebi',array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');
  	}
     function fetchAllTaqebi()
    {
        $fetch_data = $this->nawyat_maktobModel->make_datatables();
        $data = array();
        $url = base_url() . "index.php/taqebiController/";
             
        
        foreach ($fetch_data as $row) {
          if($row->ID_nawyat_maktob==3){
            $sub_array = array();
            $sub_array[] = $row->shumara_maktob;
            $sub_array[] = "تعقیبی";
            $sub_array[] = $row->mursal;
            $sub_array[] = $row->mursal_elai;
            $sub_array[] = $row->khulas_matlab;
            $sub_array[] = $row->date;
            $sub_array[] = $row->qaid_warda;
             if($_SESSION["privilege"] == 3){
            $sub_array[] = '<a href=' . "$url" . 'taqebiDetail?id=' . $row->shumara_maktob . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>'.
                ' <a class="btn btn-circle btn-icon-only btn-success" href=' . "$url" . 'editmakateb?id=' . $row->shumara_maktob . '>ویرایش </a>';
              }elseif($_SESSION["privilege"] == 1){
                $sub_array[] = '<a href=' . "$url" . 'taqebiDetail?id=' . $row->shumara_maktob . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>';
              }
                  $data[] = $sub_array;

        }
      }

      
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->nawyat_maktobModel->get_all_data(),
            "recordsFiltered" => $this->nawyat_maktobModel->get_filtered_data(),
            "data" => $data
        );
        echo json_encode($output);
    }
    function taqebiDetail(){
      $id=$_GET['id'];
      $data=$this->makatebModel->getMakatebById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('taqebiDetail',array('data'=>$data));
      $this->load->view('include/footer.inc.php');
    }
     function editmakateb(){
       $id=$_GET['id'];
      $makateb=$this->makatebModel->getMakatebById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('editMakatebTaqebe',array('makateb'=>$makateb));
      $this->load->view('include/footer.inc.php');
    }
     function checkEditMakateb(){
        $error_shomaraiMaktob = $error_date = $error_shuba = $error_mursal = $error_typeOfMaktob = $error_mursalAlai = $error_saderaNumber = $error_dosyaArchive = $error_waredaNumber = $error_qaidWareda = $error_ejraat = $error_typeOfEjraat = $error_khulasMatlab = $error_bakhsheTahrerat = $error_hedayat =$error_photo= $error_mulahezat ='';
        $error = false;
        if (isset($_POST['addMaktob'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['shomaraiMaktob'])) {
                $error_shomaraiMaktob = 'لطفاً ا شماره عریضه را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['shuba'])) {
                $error_shuba = 'لطفاً  شعبه مربوطه را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['mursal'])) {
                $error_mursal = 'لطفاً مرسل را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['typeOfMaktob'])) {
                $error_typeOfMaktob = 'لطفاً  نوعیت مکتوب را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['mursalAlai'])) {
                $error_mursalAlai = 'لطفاً  مرسل الیه را وارد نماید';
                $error = true;
            }

            if (empty($_POST['dosyaArchive'])) {
                $error_dosyaArchive = 'لطفاً ا دوسیه آرشیف را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['mulahezat'])) {
                $error_mulahezat = 'لطفاً  ملاحظات را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['khulasMatlab'])) {
                $error_khulasMatlab = 'لطفاً  خلاصه مطلب را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['bakhsheTahrerat'])) {
                $error_bakhsheTahrerat = 'لطفاً  بخش تحریرات را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['typeOfEjraat'])) {
                $error_typeOfEjraat = 'لطفاً  نتیجه اجرات را وارد نماید!';
                $error = true;
            }
             if (empty($_POST['saderaNumber'])) {
                $error_saderaNumber = 'لطفاً  نمبر صادره را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['waredaNumber'])) {
               $error_waredaNumber = 'لطفاً  نمبر وارده را وارد نماید!';
               $error = true;
           }
           if (empty($_POST['qaidWareda'])) {
              $error_qaidWareda = 'لطفاً  قید وارده را وارد نماید!';
              $error = true;
          }

if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
            if ($_FILES["photo"]["type"] != "image/jpeg" && $_FILES["photo"]["type"] != "image/png") {
                $error_photo = "Please select jpeg| jpg| png files";
                $error = true;
            }
        } else {
            switch ($_FILES["photo"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $error_photo = "This photo has larger size";
                    $error = true;
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $error_photo = "The photo is larger than the script allows.";
                    $error = true;
                    break;
                case UPLOAD_ERR_NO_FILE:
                       $error_photo = "شما هیج عکس انتخاب نکرده اید";
                       $error = true;
                    break;
                default:
                    $error_photo = "Please contact to server manager !";
                    $error = true;
            }
        }
          }

        if (!$error) {
           $destination = "E:/xampp/htdocs/olmis/admin/assets/img/makateb/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/makateb/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
            if (empty($_FILES["photo"]["name"])) {
                $image = "";
            }
            $fields_data = array(
                'shumara_maktob' => $_POST['shomaraiMaktob'],
                'date' => $_POST['date'],
                'mursal' => $_POST['mursal'],
                'mursal_elai' => $_POST['mursalAlai'],
                'khulas_matlab' => $_POST['khulasMatlab'],
                'ID_nawyat_maktob' => $_POST['typeOfMaktob'],
                'ID_shuba_marbuta'=>$_POST['shuba'],
                'ID_dosya_archive'=> $_POST['dosyaArchive'],
                'mulahezat'=> $_POST['mulahezat'],
                'tahrerat'=> $_POST['bakhsheTahrerat'],
                'ID_ejraat_result' => $_POST['typeOfEjraat'],
                'sadra_number'=> $_POST['saderaNumber'],
                'warda_number'=> $_POST['waredaNumber'],
                'qaid_warda'=> $_POST['qaidWareda'],
                'image'=>$image,

            );
           $data= $this->makatebModel->editMakateb($_POST['id'],$fields_data);
           if($data){
            redirect('taqebiController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addMakateb', array(
                'error_shomaraiMaktob' => $error_shomaraiMaktob,
                'error_date' => $error_date,
                'error_mursal' => $error_mursal,
                'error_mursalAlai'=>$error_mursalAlai,
                'error_khulasMatlab'=>$error_khulasMatlab,
                'error_typeOfMaktob'=>$error_typeOfMaktob,
                'error_shuba'=>$error_shuba,
                'error_dosyaArchive'=>$error_dosyaArchive,
                'error_mulahezat' => $error_mulahezat,
                'error_bakhsheTahrerat' => $error_bakhsheTahrerat,
                'error_typeOfEjraat' => $error_typeOfEjraat,
                'error_saderaNumber' => $error_saderaNumber,
                'error_waredaNumber' => $error_waredaNumber,
                'error_qaidWareda' => $error_qaidWareda,
                'error_photo' => $error_photo,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
  }
  ?>
