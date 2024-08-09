<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_r_posyandu extends CI_Model
{
	public function all_data()
	{
		$this->db->select('*');
		$this->db->from('posyandu');
		return $this->db->get()->result();
	}
}
