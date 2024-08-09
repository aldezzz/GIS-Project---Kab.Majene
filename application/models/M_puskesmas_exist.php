<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_puskesmas_exist extends CI_Model
{
	public function all_data()
	{
		$this->db->select('*');
		$this->db->from('puskesmasexsist');
		return $this->db->get()->result();
	}
}
