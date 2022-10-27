<?php
class AraizModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
 //////////////////////////////////////////////////////
 var $table = "araiz";
var $select_column =array("shumara_ariza","shumara_maktob","date","mursal","mursal_elai","khulas_matlab","ejraat");
var $order_column = array("shumara_ariza","shumara_maktob","date","mursal","mursal_elai","khulas_matlab","ejraat");
function make_query(){
  $this->db->select($this->select_column);
  $this->db->from($this->table);
  if(isset($_POST["search"]["value"])){
    $this->db->like("shumara_ariza",$_POST["search"]["value"]);
    $this->db->or_like("shumara_maktob",$_POST["search"]["value"]);
     $this->db->or_like("mursal",$_POST["search"]["value"]);
    $this->db->or_like("mursal_elai",$_POST["search"]["value"]); 
    $this->db->or_like("khulas_matlab",$_POST["search"]["value"]);
    $this->db->or_like("date",$_POST["search"]["value"]); 

  }
  if(isset($_POST["order"])){
    $this->db->order_by($this->order_column[$_POST['order']['0']['column']],$_POST
       ['order']['0']['dir']);
  }else{
    $this->db->order_by("shumara_ariza", "DESC");
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
///////////////////////////////////////////////////////
    function getAraiz(){
    	$this->db->from('araiz');
    	return $this->db->get()->result();
    }
    function getResult(){
      $this->db->from('ejraat_result');
      return $this->db->get()->result();
    }
    function insertAraiz($data){
        return $this->db->insert('araiz',$data);
    }
    function deleteAraiz($id){
        $this->db->where('shumara_ariza',$id);
        return $this->db->delete('araiz');
    }
    function getAraizById($id){
        $this->db->where('shumara_ariza',$id);
        $this->db->from('araiz');
        return $this->db->get()->result();
    }
    function getNaweatMaktob($id){
        $this->db->where('ID',$id);
        $this->db->from('nawyat_maktob');
        return $this->db->get()->result();
    }
    function getArchive($id){
        $this->db->where('dosya_id ',$id);
        $this->db->from('dosya_archive');
        return $this->db->get()->result();
    }
    function getMaktob($id){
        $this->db->where('shumara_maktob ',$id);
        $this->db->from('makateb');
        return $this->db->get()->result();
    }

    function updateAraiz($id,$data){
        $this->db->where('shumara_ariza',$id);
        return $this->db->update('araiz',$data);
    }



}
?>
