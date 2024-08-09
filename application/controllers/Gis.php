<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gis extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_majene');
		$this->load->model('m_r_posyandu');
		$this->load->model('m_puskesmas_exist');
		$this->load->model('m_posyandu_exist');
	}

	public function index()
	{
		$data = array(
		'judul' => 'Home',
		'page' => 'v_home',
	);
		$this->load->view('v_template', $data, false);
	}

	public function viewmap()
	{
		$data = array(
		'judul' => 'View Map',
		'page' => 'v_viewmap',
	);
		$this->load->view('v_template', $data, false);
	}

	public function viewbasemap()
	{
		$data = array(
		'judul' => 'View Base Map',
		'page' => 'v_base_map',
	);
		$this->load->view('v_template', $data, false);
	}

	public function marker()
	{
		$data = array(
		'judul' => 'Marker',
		'page' => 'v_marker',
	);
		$this->load->view('v_template', $data, false);
	}

	public function polyline()
	{
		$data = array(
		'judul' => 'Polyline',
		'page' => 'v_polyline',
	);
		$this->load->view('v_template', $data, false);
	}

	
	public function geojson()
	{
		$data = array(
		'judul' => 'GeoJSON',
		'page' => 'v_geojson',
	);
		$this->load->view('v_template', $data, false);
	}

	public function majene()
	{
		$data = array(
		'judul' => 'Kabupaten Majene',
		'majene' => $this->m_majene->all_data(),
		'page' => 'v_majene',

	);
		$this->load->view('v_template', $data, false);
	}

	public function r_posyandu()
	{
		$data = array(
		'judul' => 'Lokasi Posyandu Prioritas',
		'r_posyandu' => $this->m_r_posyandu->all_data(),
		'page' => 'v_r_posyandu',

	);
		$this->load->view('v_template', $data, false);
	}

	public function puskesmas_exist()
	{
		$data = array(
		'judul' => 'Lokasi Puskesmas Tersedia',
		'puskesmas_exist' => $this->m_puskesmas_exist->all_data(),
		'page' => 'v_puskesmas_exist',

	);
		$this->load->view('v_template', $data, false);
	}

	public function posyandu_exist()
	{
		$data = array(
		'judul' => 'Lokasi Posyandu Tersedia',
		'posyandu_exist' => $this->m_posyandu_exist->all_data(),
		'page' => 'v_posyandu_exist',

	);
		$this->load->view('v_template', $data, false);
	}
}
