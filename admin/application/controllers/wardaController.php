<?php
class wardaController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('nawyat_maktobModel');
        $this->load->model('makatebModel');

    }
    function index($message = null, $type = null,$result=" لست مکاتیب وارده"){
         $data=$this->nawyat_maktobModel->getWarda();

        $this->load->view('include/header.inc.php',array('result'=>$result));
        $this->load->view('warda',array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');
  	}

      function fetchAllWarda()
    {
        $fetch_data = $this->nawyat_maktobModel->make_datatables();
        $data = array();
        $url = base_url() . "index.php/wardaController/";
             
        
        foreach ($fetch_data as $row) {
          if($row->ID_nawyat_maktob==2){
            $sub_array = array();
            $sub_array[] = $row->shumara_maktob;
            $sub_array[] = "وارده";
            $sub_array[] = $row->mursal;
            $sub_array[] = $row->mursal_elai;
            $sub_array[] = $row->khulas_matlab;
            $sub_array[] = $row->date;
            $sub_array[] = $row->qaid_warda;
            $sub_array[] = '<a href=' . "$url" . 'wardaDetail?id=' . $row->shumara_maktob . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>';
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
     function wardaDetail(){
      $id=$_GET['id'];
      $data=$this->makatebModel->getMakatebById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('wardaDetail',array('data'=>$data));
      $this->load->view('include/footer.inc.php');
    }
  }
  ?>
