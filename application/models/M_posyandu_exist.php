<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_posyandu_exist extends CI_Model
{
	public function all_data()
	{
		$this->db->select('*');
		$this->db->from('posyanduexsist');
		return $this->db->get()->result();
	}
}
?>
