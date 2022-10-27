<?php
class ahkamController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ahkam_wa_hedayatModel');

    }
    function index($message = null, $type = null,$result=" لست احکام"){
  	      $data=$this->ahkam_wa_hedayatModel->getAhkam_wa_hedayat();
          $this->load->view('include/header.inc.php',array('result'=>$result));
          $this->load->view('ahkam',array('data'=>$data,'Message' => $message, 'Type' => $type));
          $this->load->view('include/footer.inc.php');
  	}
  function fetchAllAhkam()
    {
        $fetch_data = $this->ahkam_wa_hedayatModel->make_datatables();
        $data = array();
        $url = base_url() . "index.php/ahkamController/";
        foreach ($fetch_data as $row) {
            $sub_array = array();
            $sub_array[] = $row->shumara_maktob;
            $sub_array[] = $row->date;
            $sub_array[] = $row->mursal;
            $sub_array[] = $row->mursal_elai;
            $sub_array[] = $row->khulas_matlab;
            $sub_array[] = $row->mulahezat;
            $sub_array[] = $row->tahrerat;
            $sub_array[] = '<a href=' . "$url" . 'ahkamDetail?id=' . $row->hukom_id . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>' .
                ' <a class="btn btn-circle btn-icon-only btn-success" href=' . "$url" . 'editAhkam?id=' . $row->hukom_id . '>ویرایش </a>' .
                '<a class="btn btn-circle btn-icon-only btn-danger" href=' . "$url" . 'deleteAhkam?id=' . $row->hukom_id . '>حذف </a> ';
                  
                
            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->ahkam_wa_hedayatModel->get_all_data(),
            "recordsFiltered" => $this->ahkam_wa_hedayatModel->get_filtered_data(),
            "data" => $data
        );
        echo json_encode($output);
    }
    function addHukom(){
          $this->load->view('include/header.inc.php');
          $this->load->view('addHukom');
          $this->load->view('include/footer.inc.php');
    }
     function checkAddHukm(){
        $error_shomaraiMaktob = $error_date = $error_khulasMatlab = $error_mursal = $error_typeOfMaktob = $error_mursalAlai = $error_saderaNumber = $error_dosyaArchive =  $error_ejraat = $error_typeOfEjraat =  $error_mulahezat = $error_bakhsheTahrerat ='';
        $error = false;
        if (isset($_POST['addHukom'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['shomaraiMaktob'])) {
                $error_shomaraiMaktob = 'لطفاً شماره مکتوب را وارد نماید';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['mursal'])) {
                $error_mursal = 'لطفاً آ مرسل را وارد نماید';
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
            if (empty($_POST['ejraat'])) {
                $error_ejraat = 'لطفاً  اجرات را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['dosyaArchive'])) {
                $error_dosyaArchive = 'لطفاً ا دوسیه آرشیف را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['khulasMatlab'])) {
                $error_khulasMatlab = 'لطفاً  اجرات را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['mulahezat'])) {
                $error_mulahezat = 'لطفاً  ملاحظات را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['typeOfEjraat'])) {
                $error_typeOfEjraat = 'لطفاً  نتیجه اجرات را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['bakhsheTahrerat'])) {
                $error_bakhsheTahrerat = 'لطفاً  بخش تحریرات را وارد نماید!';
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
          //                        $error_photo = "شما هیج عکس انتخاب نکرده اید";
          //                        $error = true;
                      break;
                  default:
                      $error_photo = "Please contact to server manager !";
                      $error = true;
              }
          }
            }

          if (!$error) {
          $destination = "C:/xampp/htdocs/library/admin/assets/img/ahkam/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/ahkam/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
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
                'mulahezat'=> $_POST['mulahezat'],
                'ID_dosya_archive'=> $_POST['dosyaArchive'],
                'tahrerat'=> $_POST['bakhsheTahrerat'],
                'ejraat'=> $_POST['ejraat'],
                'ID_ejraat_result' => $_POST['typeOfEjraat'],
                'image'=>$image,
            );
           $data= $this->ahkam_wa_hedayatModel->insertHukom($fields_data);
           if($data){
            redirect('ahkamController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addHukom', array(
                'error_shomaraiMaktob' => $error_shomaraiMaktob,
                'error_date' => $error_date,
                'error_mursal' => $error_mursal,
                'error_mursalAlai'=>$error_mursalAlai,
                'error_khulasMatlab'=>$error_khulasMatlab,
                'error_typeOfMaktob'=>$error_typeOfMaktob,
                'error_dosyaArchive'=>$error_dosyaArchive,
                'error_ejraat' => $error_ejraat,
                'error_mulahezat' => $error_mulahezat,
                'error_bakhsheTahrerat' => $error_bakhsheTahrerat,
                'error_typeOfEjraat' => $error_typeOfEjraat,
                'error_photo' => $error_photo,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
     function editAhkam(){
       $id=$_GET['id'];
      $ahkam=$this->ahkam_wa_hedayatModel->getAhkamById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('editAhkam',array('ahkam'=>$ahkam));
      $this->load->view('include/footer.inc.php');
    }
         function checkEditHukm(){
        $error_shomaraiMaktob = $error_date = $error_khulasMatlab = $error_mursal = $error_typeOfMaktob = $error_mursalAlai = $error_saderaNumber = $error_dosyaArchive =  $error_ejraat = $error_typeOfEjraat=  $error_mulahezat = $error_bakhsheTahrerat =$error_photo ='';
        $error = false;
        if (isset($_POST['addHukm'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['shomaraiMaktob'])) {
                $error_shomaraiMaktob = 'لطفاً شماره مکتوب را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['mursal'])) {
                $error_mursal = 'لطفاً آ مرسل را وارد نماید';
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
            if (empty($_POST['ejraat'])) {
                $error_ejraat = 'لطفاً  اجرات را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['khulasMatlab'])) {
                $error_khulasMatlab = 'لطفاً  اجرات را وارد نماید!';
                $error = true;
            }

            if (empty($_POST['mulahezat'])) {
                $error_mulahezat = 'لطفاً  ملاحظات را وارد نماید!';
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

            }

            if (!$error) {
              $id=$_POST['id'];
              $destination = "C:/xampp/htdocs/library/admin/assets/img/ahkam/";
                if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                    move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
                $image = "assets/img/ahkam/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
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
                'mulahezat'=> $_POST['mulahezat'],
                'ID_dosya_archive'=> $_POST['dosyaArchive'],
                'ejraat'=> $_POST['ejraat'],
                'tahrerat'=> $_POST['bakhsheTahrerat'],
                'ID_ejraat_result' => $_POST['typeOfEjraat'],
                'image'=>$image,
            );
           $data= $this->ahkam_wa_hedayatModel->EditHukm($_POST['id'],$fields_data);
           if($data){
            redirect('ahkamController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addHukom', array(
                'error_shomaraiMaktob' => $error_shomaraiMaktob,
                'error_date' => $error_date,
                'error_mursal' => $error_mursal,
                'error_mursalAlai'=>$error_mursalAlai,
                'error_khulasMatlab'=>$error_khulasMatlab,
                'error_typeOfMaktob'=>$error_typeOfMaktob,
                'error_dosyaArchive'=>$error_dosyaArchive,
                'error_ejraat' => $error_ejraat,
                'error_mulahezat' => $error_mulahezat,
                'error_bakhsheTahrerat' => $error_bakhsheTahrerat,
                'error_typeOfEjraat' => $error_typeOfEjraat,
                'error_photo' => $error_photo,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
     function ahkamDetail(){
      $id=$_GET['id'];
      $ahkam=$this->ahkam_wa_hedayatModel->getAhkamById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('ahkamDetail',array('ahkam'=>$ahkam));
      $this->load->view('include/footer.inc.php');
    }

    function deleteAhkam(){
    $id=$_GET['id'];
    $this->ahkam_wa_hedayatModel->deleteAhkam($id);
    redirect('ahkamController/index');
  }

  }
  ?>
