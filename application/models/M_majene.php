<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_majene extends CI_Model
{
	public function all_data()
	{
		$this->db->select('*');
		$this->db->from('kab_majene');
		return $this->db->get()->result();
	}
}
