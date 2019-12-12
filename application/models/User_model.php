<?php

/**
 * Class User_model
 * @property user_model $user_model
 */
class User_model extends CI_Model
{


	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function insert_data($data)
	{
		$this->db->insert("user",$data);

	}

	public function  getDetails()
	{
		return $this->db->query("SELECT * from user");
	}

}
