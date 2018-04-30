<?php

class User_m extends CI_Model{
	function gets(){}
	function get(){}
	/**
	* $data param data array=>column, value
	*/
	public function add($data){
		$this->db->insert("users", $data);
	}
	function edit(){}
	function del(){}
}