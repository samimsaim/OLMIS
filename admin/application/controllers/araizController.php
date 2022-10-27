<?php
class araizController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('araizModel');

    }
    function index($message = null, $type = null,$result=" لست عرایض"){
  	      $data=$this->araizModel->getAraiz();
          $this->load->view('include/header.inc.php',array('result'=>$result));
          $this->load->view('araiz',array('data'=>$data,'Message' => $message, 'Type' => $type));
          $this->load->view('include/footer.inc.php');
  	}
    function addAraiz(){
      $this->load->view('include/header.inc.php');
      $this->load->view('addAraiz');
      $this->load->view('include/footer.inc.php');
    }

   function fetchAllAraiz()
    {
        $fetch_data = $this->araizModel->make_datatables();
        $data = array();
        $url = base_url() . "index.php/araizController/";
        foreach ($fetch_data as $row) {
            $sub_array = array();
            $sub_array[] = $row->shumara_ariza;
            $sub_array[] = $row->shumara_maktob;
            $sub_array[] = $row->date;
            $sub_array[] = $row->mursal_elai;
            $sub_array[] = $row->mursal;
            $sub_array[] = $row->khulas_matlab;
            $sub_array[] = $row->ejraat;
            if($_SESSION["privilege"] == 1){
            $sub_array[] = '<a href=' . "$url" . 'araizDetail?id=' . $row->shumara_ariza . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>' .
                ' <a class="btn btn-circle btn-icon-only btn-success" href=' . "$url" . 'editAraiz?id=' . $row->shumara_ariza . '>ویرایش </a>' .
                '<a class="btn btn-circle btn-icon-only btn-danger" href=' . "$url" . 'deleteAraiz?id=' . $row->shumara_ariza . '>حذف </a> ';
                  }else{
              $sub_array[] = '<a href=' . "$url" . 'makatebDetail?id=' . $row->shumara_ariza . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>';
                  }
                
            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($_POST["draw"]),
            "recordsTotal" => $this->araizModel->get_all_data(),
            "recordsFiltered" => $this->araizModel->get_filtered_data(),
            "data" => $data
        );
        echo json_encode($output);
    }

  function checkAddAraiz(){
        $error_shomaraiAreza = $error_date = $error_maktobNumber = $error_mursal = $error_typeOfMaktob = $error_mursalAlai = $error_saderaNumber = $error_dosyaArchive = $error_waredaNumber = $error_ejrat = $error_typeOfEjraat = $error_qaidWareda = $error_mulahezat= $error_photo =$error_khulasMatlab =$error_bakhsheTahrerat ='';
        $error = false;
        if (isset($_POST['addAraiz'])) {
            // -------------- Form validation -----------------
             $data=$this->araizModel->getAraiz();
            foreach($data as $row){
              if ($_POST['shomaraiAreza']==$row->shumara_ariza) {
                $error_shomaraiAreza = 'شماره عریضه  موجود میباشد لطفاً دوباره امتحان کنید';
                $error = true;
            } 
            if (empty($_POST['shomaraiAreza'])) {
                $error_shomaraiAreza = 'لطفا شماره عریضه را وارد نماید';
                $error = true;
            }
        }
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['maktobNumber'])) {
                $error_maktobNumber = 'لطفاً  نمبر مکتوب را وارد نمبر!';
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
             if (empty($_POST['saderaNumber'])) {
                $error_saderaNumber = 'لطفاً  صادره نمبر را واردنماید';
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
                $error_khulasMatlab = 'لطفاً  خلاصخ مطب را وارد نماید!';
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
          $destination = "E:/xampp/htdocs/olmis/admin/assets/img/ariza/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/ariza/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
            if (empty($_FILES["photo"]["name"])) {
                $image = "";
            }
            $fields_data = array(
                'shumara_ariza' => $_POST['shomaraiAreza'],
                'date' => $_POST['date'],
                'shumara_maktob' => $_POST['maktobNumber'],
                'ID_nwyat_maktob' => $_POST['typeOfMaktob'],
                'mursal' => $_POST['mursal'],
                'mursal_elai'=>$_POST['mursalAlai'],
                'ID_dosya_archive'=> $_POST['dosyaArchive'],
                'ejraat'=> $_POST['ejrat'],
                'mulahezat'=> $_POST['mulahezat'],
                'khulas_matlab'=> $_POST['khulasMatlab'],
                'tahrerat'=> $_POST['bakhsheTahrerat'],
                'sadra_number'=> $_POST['saderaNumber'],
                'ID_ejraat_result' => $_POST['typeOfEjraat'],
                'image'=>$image,

            );
           $data= $this->araizModel->insertAraiz($fields_data);
           if($data){
            redirect('araizController/index');
           }
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addAraiz', array(
                'error_shomaraiAreza' => $error_shomaraiAreza,
                'error_date' => $error_date,
                'error_maktobNumber' => $error_maktobNumber,
                'error_mursal'=>$error_mursal,
                'error_typeOfMaktob'=>$error_typeOfMaktob,
                'error_mursalAlai'=>$error_mursalAlai,
                'error_saderaNumber'=>$error_saderaNumber,
                'error_dosyaArchive'=>$error_dosyaArchive,
                'error_waredaNumber' => $error_waredaNumber,
                'error_ejrat' => $error_ejrat,
                'error_qaidWareda' => $error_qaidWareda,
                'error_mulahezat' => $error_mulahezat,
                'error_khulasMatlab' => $error_khulasMatlab,
                'error_bakhsheTahrerat' => $error_bakhsheTahrerat,
                'error_typeOfEjraat' => $error_typeOfEjraat,
                'error_photo' => $error_photo,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
function editAraiz(){
      $id=$_GET['id'];
     $araiz=$this->araizModel->getAraizById($id);
     $this->load->view('include/header.inc.php');
     $this->load->view('editAraiz',array('araiz'=>$araiz));
     $this->load->view('include/footer.inc.php');
   }
   function checkEditAraiz(){
        $error_shomaraiAreza = $error_date = $error_maktobNumber = $error_mursal = $error_typeOfMaktob = $error_mursalAlai = $error_saderaNumber = $error_dosyaArchive = $error_waredaNumber = $error_ejrat = $error_typeOfEjraat = $error_qaidWareda = $error_mulahezat= $error_photo =$error_khulasMatlab =$error_bakhsheTahrerat ='';
        $error = false;
        if (isset($_POST['addAraiz'])) {
            // -------------- Form validation -----------------
          
            if (empty($_POST['shomaraiAreza'])) {
                $error_shomaraiAreza = 'لطفا شماره عریضه را وارد نماید';
                $error = true;
            }
        
            if (empty($_POST['date'])) {
                $error_date = 'لطفاً  تاریخ را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['maktobNumber'])) {
                $error_maktobNumber = 'لطفاً  نمبر مکتوب را وارد نمبر!';
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
             if (empty($_POST['saderaNumber'])) {
                $error_saderaNumber = 'لطفاً  صادره نمبر را واردنماید';
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
                $error_khulasMatlab = 'لطفاً  خلاصخ مطب را وارد نماید!';
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
          $destination = "E:/xampp/htdocs/olmis/admin/assets/img/ariza/";
            if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
                move_uploaded_file($_FILES['photo']['tmp_name'], $destination . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5));
            $image = "assets/img/ariza/" . ($_FILES['photo']['name']) . date('his') . "." . substr($_FILES['photo']['type'], 6, 5);
            if (empty($_FILES["photo"]["name"])) {
                $image = "";
            }
            $fields_data = array(
                'shumara_ariza' => $_POST['shomaraiAreza'],
                'date' => $_POST['date'],
                'shumara_maktob' => $_POST['maktobNumber'],
                'ID_nwyat_maktob' => $_POST['typeOfMaktob'],
                'mursal' => $_POST['mursal'],
                'mursal_elai'=>$_POST['mursalAlai'],
                'ID_dosya_archive'=> $_POST['dosyaArchive'],
                'ejraat'=> $_POST['ejrat'],
                'mulahezat'=> $_POST['mulahezat'],
                'khulas_matlab'=> $_POST['khulasMatlab'],
                'tahrerat'=> $_POST['bakhsheTahrerat'],
                'sadra_number'=> $_POST['saderaNumber'],
                'ID_ejraat_result' => $_POST['typeOfEjraat'],
                'image'=>$image,

            );
           $id=$_GET['id'];
           $data= $this->araizModel->updateAraiz($_POST['id'],$fields_data);
           if($data){
            redirect('araizController/index');
           }
        } else {
           $araiz=$this->araizModel->getAraizById($_POST['id']);
            $this->load->view('include/header.inc.php');
            $this->load->view('EditAraiz', array(
                'araiz'=>$araiz,
                'error_shomaraiAreza' => $error_shomaraiAreza,
                'error_date' => $error_date,
                'error_maktobNumber' => $error_maktobNumber,
                'error_mursal'=>$error_mursal,
                'error_typeOfMaktob'=>$error_typeOfMaktob,
                'error_mursalAlai'=>$error_mursalAlai,
                'error_saderaNumber'=>$error_saderaNumber,
                'error_dosyaArchive'=>$error_dosyaArchive,
                'error_waredaNumber' => $error_waredaNumber,
                'error_ejrat' => $error_ejrat,
                'error_qaidWareda' => $error_qaidWareda,
                'error_mulahezat' => $error_mulahezat,
                'error_khulasMatlab' => $error_khulasMatlab,
                'error_bakhsheTahrerat' => $error_bakhsheTahrerat,
                'error_typeOfEjraat' => $error_typeOfEjraat,
                'error_photo' => $error_photo,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }
    function araizDetail(){
      $id=$_GET['id'];
      $araiz=$this->araizModel->getAraizById($id);
      $naweatMaktob=$this->araizModel->getNaweatMaktob($id);
      $archive=$this->araizModel->getArchive($id);
      $makateb=$this->araizModel->getMaktob($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('araizDetail',array('naweatMaktob'=>$naweatMaktob,'araiz'=>$araiz,'archive'=>$archive,'makateb'=>$makateb));
      $this->load->view('include/footer.inc.php');
    }
   function deleteAraiz(){
    $id=$_GET['id'];
    $this->araizModel->deleteAraiz($id);
    redirect('araizController/index');
  }
  function download(){
  $this->load->helper('download');
  $file=$_GET['id'];
  // $mytext=base_url('20210401_214644.jpg062901.jpeg');
 force_download($file,null);
    }
  }
  ?>
