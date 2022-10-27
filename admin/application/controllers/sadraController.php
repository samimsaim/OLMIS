<?php
class sadraController extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('nawyat_maktobModel');
        $this->load->model('makatebModel');


    }
    function index($message = null, $type = null,$result=" لست مکاتیب صادره"){
        $data=$this->nawyat_maktobModel->getSadra();
       
        $this->load->view('include/header.inc.php',array('result'=>$result));
        $this->load->view('sadra',array('data'=>$data,'Message' => $message, 'Type' => $type));
        $this->load->view('include/footer.inc.php');
  	}
     function fetchAllSadra()
    {
        $fetch_data = $this->nawyat_maktobModel->make_datatables();
        $data = array();
        $url = base_url() . "index.php/sadraController/";
             
        
        foreach ($fetch_data as $row) {
          if($row->ID_nawyat_maktob==1){
            $sub_array = array();
            $sub_array[] = $row->shumara_maktob;
            $sub_array[] = "صادره";
            $sub_array[] = $row->mursal;
            $sub_array[] = $row->mursal_elai;
            $sub_array[] = $row->khulas_matlab;
            $sub_array[] = $row->date;
            $sub_array[] = $row->qaid_warda;
            $sub_array[] = '<a href=' . "$url" . 'sadraDetail?id=' . $row->shumara_maktob . ' class="btn  btn-icon-only btn-circle green-meadow">جزیات</a>';
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
    function sadraDetail(){
      $id=$_GET['id'];
      $data=$this->makatebModel->getMakatebById($id);
      $this->load->view('include/header.inc.php');
      $this->load->view('sadraDetail',array('data'=>$data));
      $this->load->view('include/footer.inc.php');
    }
  }
  ?>
