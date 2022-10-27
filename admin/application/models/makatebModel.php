<?php
class MakatebModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
///////////////////////////////////////////
var $table = "makateb";
var $select_column =array("shumara_maktob","date","mursal","mursal_elai","khulas_matlab","mulahezat","sadra_number","qaid_warda","ejraat");
var $order_column = array("shumara_maktob","date","mursal","mursal_elai","khulas_matlab","mulahezat","sadra_number","qaid_warda","ejraat");
function make_query(){
  $this->db->select($this->select_column);
  $this->db->from($this->table);
  if(isset($_POST["search"]["value"])){
    $this->db->like("shumara_maktob",$_POST["search"]["value"]);
    $this->db->or_like("date",$_POST["search"]["value"]);
     $this->db->or_like("mursal",$_POST["search"]["value"]);
    $this->db->or_like("mursal_elai",$_POST["search"]["value"]); 
    $this->db->or_like("khulas_matlab",$_POST["search"]["value"]);
    $this->db->or_like("mulahezat",$_POST["search"]["value"]); 

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
    function getMakateb(){
    	$this->db->from('makateb');
      $this->db->group_by('mursal_elai');
    	return $this->db->get()->result();
    }
    function getEjraat(){
    	$this->db->from('makateb');
    	return $this->db->get()->result();
    }

    function getResult(){
      $this->db->from('ejraat_result');
      return $this->db->get()->result();
    }

    function insertMakateb($data){

        return $this->db->insert('makateb',$data);
    }
    function deleteMakateb($id){
        $this->db->where('shumara_maktob',$id);
        return $this->db->delete('makateb');
    }
    function getMakatebById($id){
        $this->db->where('shumara_maktob',$id);
        $this->db->from('makateb');
        return $this->db->get()->result();
    }

    function getMursal(){
    	$this->db->from('makateb');
    	return $this->db->get()->result();
    }

    function editMakateb($id,$data){
        $this->db->where('shumara_maktob',$id);
        return $this->db->update('makateb',$data);
    }
    function getYears(){
      $this->db->from('year');
      return $this->db->get()->result();
    }
    function addYear(){
        $type=$this->input->post('action');
        $data=array(
            'year'=>$this->input->post('date'),
            );
        return $this->db->insert('year',$data);
    }
    function deleteYear($id){
      $this->db->where('year',$id);
      return $this->db->delete('year');
    }

}
