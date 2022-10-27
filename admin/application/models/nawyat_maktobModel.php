<?php
class Nawyat_maktobModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
 ///////////////////////////////////////////
   
var $table = 'makateb';
var $select_column =array("shumara_maktob","ID_nawyat_maktob","mursal","mursal_elai","khulas_matlab","date","sadra_number","qaid_warda","ejraat");
var $order_column = array("shumara_maktob","ID_nawyat_maktob","mursal","mursal_elai","khulas_matlab","date","sadra_number","qaid_warda","ejraat");
function make_query(){
  $this->db->select($this->select_column);
  $this->db->from($this->table);
  if(isset($_POST["search"]["value"])){
    $this->db->like("shumara_maktob",$_POST["search"]["value"]);
    $this->db->or_like("ID_nawyat_maktob",$_POST["search"]["value"]);
     $this->db->or_like("mursal",$_POST["search"]["value"]);
    $this->db->or_like("mursal_elai",$_POST["search"]["value"]); 
    $this->db->or_like("khulas_matlab",$_POST["search"]["value"]);
    $this->db->or_like("date",$_POST["search"]["value"]); 

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
    function getNawyat_maktob(){
    	$this->db->from("nawyat_maktob");
		return $this->db->get()->result();
    }
    function getSadra(){
      $type="صادره";
      $this->db->where('nawyat',$type);
      $this->db->from("nawyat_maktob");
      return$this->db->get()->result();
    }
    function getSadraById($id){
      $this->db->where('ID_nawyat_maktob',$id);
      $this->db->from('makateb');
      return $this->db->get()->result();
    }

    function getWarda(){
      $type="وارده";
      $this->db->where('nawyat',$type);
      $this->db->from("nawyat_maktob");
      return$this->db->get()->result();
    }
    function getTaqebi(){
      $type="تعقیبی";
      $this->db->where('nawyat',$type);
      $this->db->from("nawyat_maktob");
      return$this->db->get()->result();
    }

    function getSadra_number(){
    	$this->db->from("nawyat_maktob");
		return $this->db->get()->result();
    }
    function getWarda_number(){
      $this->db->from("nawyat_maktob");
    return $this->db->get()->result();
    }
    function getQaid_warda(){
    	$this->db->from("nawyat_maktob");
		return $this->db->get()->result();
    }
    function getID(){
    	$this->db->from("nawyat_maktob");
		return $this->db->get()->result();
    }
     function addNawyat_maktob(){
		$type=$this->input->post('action');
		$data=array(
			'nawyat'=>$this->input->post('nawyat_maktob'),
			);
		return $this->db->insert('nawyat_maktob',$data);
	}
	function deleteNawyat_maktob($id){
		$this->db->where('ID',$id);
		return $this->db->delete('nawyat_maktob');
	}

	function getNawyat_maktobrById($id){
		$this->db->where('ID',$id);
		$this->db->from('nawyat_maktob');
		return $this->db->get()->result();
	}
	function updateNawyat_maktob($id,$data){
		$this->db->where('ID',$id);
		return $this->db->update('nawyat_maktob',$data);
	}

}
?>
