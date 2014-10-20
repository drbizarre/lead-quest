<?php

class Packages_model extends CI_Model {

	function getAll() {
		$this->db->order_by('received_packages.received_date','desc');
		$this->db->select('*');
		$this->db->from('received_packages');
		$this->db->join('app_users', 'app_users.id = received_packages.user_id');
		$query = $this->db->get();
		return $query->result();  
	}
	function getPackageById($package = NULL) {
		$this->db->where("received_packages.id_package",$package);
		$this->db->select('*');
		$this->db->from('received_packages');
		$this->db->join('app_users', 'app_users.id = received_packages.user_id');
		$query = $this->db->get();
		return $query->row();  
	}	
	function getPackageByClientId($client = NULL) {
		$this->db->where("received_packages.user_id",$client);
		$this->db->order_by('received_packages.received_date','desc');
		$this->db->select('*');
		$this->db->from('received_packages');
		$this->db->join('app_users', 'app_users.id = received_packages.user_id');
		$query = $this->db->get();
		return $query->result();  
	}	
	function getImagesOfPackageById($package = NULL) {
		$this->db->where("received_packages.id_package",$package);
		$this->db->select('*');
		$this->db->from('package_images');
		$this->db->join('received_packages', 'received_packages.id_package = package_images.package_id');
		$query = $this->db->get();
		return $query->result();  
	}	
	function getLatestsUserWithProfile() {
		$this->db->limit(5);
		$this->db->where("app_users.id != 23");
		$this->db->order_by('app_users.server_created','desc');
		$this->db->select('*');
		$this->db->from('app_users');
		$this->db->join('app_profile', 'app_users.id = app_profile.user_id');
		$query = $this->db->get();
		return $query->result(); 
	}
	function getAllUserWithProfile() {
		$this->db->where("app_users.id != 23");
		$this->db->order_by('app_users.server_created','desc');
		$this->db->select('*');
		$this->db->from('app_users');
		$this->db->join('app_profile', 'app_users.id = app_profile.user_id');
		$query = $this->db->get();
		return $query->result(); 
	}
	function save($array) {
		$this->db->insert('received_packages', $array);
	}
	function update($id,$array) {
		$this->db->where('id_package', $id);
		$this->db->update('received_packages', $array);
	}	


	
}