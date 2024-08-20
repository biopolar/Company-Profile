<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->database();
		
		$data['about'] = $this->db->get('about')->result_array();
		$data['banner_image'] = $this->db->get('banner_image')->result_array();
		$data['visi_misi'] = $this->db->get('visi_misi')->result_array();
		$data['karyawan'] = $this->db->get('karyawan')->result_array();
		$data['portofolio'] = $this->db->get('portofolio')->result_array();
		$data['service'] = $this->db->get('service')->result_array();
		$data['contact'] = $this->db->get('contact')->result_array();
		$data['partner'] = $this->db->get('partner')->result_array();
		$data['comment'] = $this->db->get('comment')->result_array();

		$this->load->view('template/home_header', $data);
		$this->load->view('template/home_navbar', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/home_footer', $data);
	}

	public function service_detail($slug)
	{
		$data['judul'] = 'Detail Service';

		$data['service'] = $this->db->get_where('service', ['slug' => $slug])->row_array();
		$data['contact'] = $this->db->get_where('contact')->result_array();
		
		$this->load->view('template/home_header', $data);
        $this->load->view('template/service_navbar', $data);
		$this->load->view('home/service_detail', $data);
        $this->load->view('template/home_footer', $data);
	}

	public function portofolio_detail($slug)
	{
		$data['judul'] = 'Detail Portofolio';

		$data['portofolio'] = $this->db->get_where('portofolio', ['slug' => $slug])->row_array();
		$data['contact'] = $this->db->get_where('contact')->result_array();

		$this->load->view('template/home_header', $data);
        $this->load->view('template/portofolio_navbar', $data);
		$this->load->view('home/portofolio_detail', $data);
        $this->load->view('template/home_footer', $data);
	}
}