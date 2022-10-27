<?php
class ahkam_wa_hedayatModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    ///////////////////////////////////////////
var $table = "ahkam_wa_hedayat";
var $select_column =array("shumara_maktob","date","mursal","mursal_elai","khulas_matlab","mulahezat","ID_nawyat_maktob","tahrerat","hukom_id");
var $order_column = array("shumara_maktob","date","mursal","mursal_elai","khulas_matlab","mulahezat","ID_nawyat_maktob","tahrerat","hukom_id");
function make_query(){
  $this->db->select($this->select_column);
  $this->db->from($this->table);
  if(isset($_POST["search"]["value"])){
    $this->db->like("shumara_maktob",$_POST["search"]["value"]);
    $this->db->or_like("date",$_POST["search"]["value"]);
     $this->db->or_like("mursal",$_POST["search"]["value"]);
    $this->db->or_like("mursal_elai",$_POST["search"]["value"]); 
    $this->db->or_like("khulas_matlab",$_POST["search"]["value"]);
    $this->db->or_like("hukom_id",$_POST["search"]["value"]); 

  }
  if(isset($_POST["order"])){
    $this->db->order_by($this->order_column[$_POST['order']['0']['column']],$_POST
       ['order']['0']['dir']);
  }else{
    $this->db->order_by("shumara_maktob", "DESC");
  }
}
function make_datatables(){
  $this->make_query();
  if($_POST["length"] != -1)
  {
    $this->db->limit($_POST["length"], $_POST["start"]);
    
  }
  $query = $this->db->get();
  return $query->result();
}
function get_filtered_data(){
  $this->make_query();
  $query = $this->db->get();
  return $query->num_rows();
}
function get_all_data(){
  $this->db->select("*");
  $this->db->from($this->table);
  return $this->db->count_all_results();
}
///////////////////////////////////////////
    function getAhkam_wa_hedayat(){
        $this->db->from("ahkam_wa_hedayat");
        return $this->db->get()->result();
    }
    function getShumara_maktob(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }

    function getMursal(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
  
    function getResult(){
      $this->db->from('ejraat_result');
      return $this->db->get()->result();
    }
    function getMursal_elai(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
    function getMulahezat(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
    function getEjraat(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
    function getTahrerat(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
    function getHukom_id(){
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }
    function getAhkamById($id){
        $this->db->where('hukom_id',$id);
        $this->db->from('ahkam_wa_hedayat');
        return $this->db->get()->result();
    }

    function insertHukom($data){
        return $this->db->insert('ahkam_wa_hedayat',$data);
    }
    function deleteAhkam($id){
        $this->db->where('hukom_id',$id);
        return $this->db->delete('ahkam_wa_hedayat');
    }
    function EditHukm($id,$data){
        $this->db->where('hukom_id',$id);
        return $this->db->update('ahkam_wa_hedayat',$data);
    }

}
?>
