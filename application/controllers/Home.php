<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

	public function index()
	{  
		$data['about'] = $this->db->get_where('about')->result_array();
		$data['banner_image'] = $this->db->get_where('banner_image')->result_array();
		$data['visi_misi'] = $this->db->get_where('visi_misi')->result_array();
		$data['karyawan'] = $this->db->get_where('karyawan')->result_array();
		$data['portofolio'] = $this->db->get_where('portofolio')->result_array();
		$data['service'] = $this->db->get_where('service')->result_array();
		$data['contact'] = $this->db->get_where('contact')->result_array();
		$data['partner'] = $this->db->get_where('partner')->result_array();

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