<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//required
require_once APPPATH.'config/db_init.php';
require_once APPPATH.'library/FDTP_Model.php';
//end required


class Admin_m extends FDTP_Model
{
	protected $db;
	
	public function __construct()
	{
		global $db;
		$this->db = $db;
		parent::__construct($this->db);
			
	}
	
	public function load_user()
	{
		$query = 'SELECT sample_id,name,age,birthdate
				  FROM sample_tbl 
				  WHERE deleted != 1 
				  OR deleted IS NULL';
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}
	
	public function load_user_details($id)
	{
		$query = 'SELECT sample_id,name,age,birthdate
				FROM sample_tbl
				WHERE sample_id = ?';
		$stmt = $this->conn->prepare($query);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data;
	}
	
	public function insert_user($data)
	{
		return $this->db->insert('sample_tbl',$data);
	}
	
	public function update_user($data,$where)
	{
		return $this->db->update('sample_tbl',$data,$where);
	}
	
	
}