<?php
class ShuabatModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function getshuabat(){
    	$this->db->from("shuabat");
		return $this->db->get()->result();
    }
    function getshuba_id(){
      $this->db->from("shuabat");
    return $this->db->get()->result();
    }
    function getshuba_name(){
      $this->db->from("shuabat");
    return $this->db->get()->result();
    }

     function addShuba(){
		$type=$this->input->post('action');
		$data=array(
      'shuba_id'=>$this->input->post('shuba_id'),
			'shuba_name'=>$this->input->post('shuba_name'),
			);
		return $this->db->insert('shuabat',$data);
	}
	function deleteShuabat($id){
		$this->db->where('shuba_id',$id);
		return $this->db->delete('shuabat');
	}
	function getshuabatById($id){
		$this->db->where('shuba_id',$id);
		$this->db->from('shuabat');
		return $this->db->get()->result();
	}
	function updateShuabat($id,$data){
		$this->db->where('shuba_id',$id);
		return $this->db->update('shuabat',$data);
	}

}
?>
