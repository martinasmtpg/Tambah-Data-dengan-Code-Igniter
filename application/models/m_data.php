<?php
class m_data extends CI_Model {
	
	function get_all($table, $select) {
		$this->db->select($select);
		return $this->db->get($table)->result();
	}
	
	function insert($table, $data = array()) {
		return $this->db->insert($table, $data);
	}
	
}