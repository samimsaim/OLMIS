<?php
class Dosya_archiveModel extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function getDosya_archive(){
    	$this->db->from("dosya_archive");
		return $this->db->get()->result();
    }
    function getDosya_name(){
      $this->db->from("dosya_archive");
    return $this->db->get()->result();
    }
    function getDosya_id(){
      $this->db->from("dosya_archive");
    return $this->db->get()->result();
    }
     function addDosya(){
		$type=$this->input->post('action');
		$data=array(
      'dosya_id'=>$this->input->post('dosya_id'),
			'dosya_name'=>$this->input->post('dosya_name'),
			);
		return $this->db->insert('dosya_archive',$data);
	}
	function deleteDosya_archive($id){
		$this->db->where('dosya_id',$id);
		return $this->db->delete('dosya_archive');
	}
	function getDosya_archiveById($id){
		$this->db->where('dosya_id',$id);
		$this->db->from('dosya_archive');
		return $this->db->get()->result();
	}
	function updateDosya_archive($id,$data){
		$this->db->where('dosya_id',$id);
		return $this->db->update('dosya_archive',$data);
	}

}
?>
