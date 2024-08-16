<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('as_id') == 1) {
           redirect('auth');
        } elseif ($this->session->userdata('as_id') == 2 ) {
            redirect('user');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        $this->load->view('template/admin_header', $data);
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('template/admin_topbar', $data);
        $this->load->view('admin_menu/index', $data);
        $this->load->view('template/admin_footer', $data);
    }

    public function menu_management()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/menu_management', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $data = [
                'nama'      => $this->input->post('nama'),
                'icon'      => $this->input->post('icon'),
                'url'       => $this->input->post('url')
            ];
            // Insert ke table admin menu
            $this->db->insert('admin_menu', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/menu_management');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
        $data['data_menu'] = $this->db->get_where('admin_menu', ['id' => $id])->row_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules untuk edit menu
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        $this->form_validation->set_rules('url', 'URL', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $nama   = $this->input->post('nama' , true);
            $icon   = $this->input->post('icon' , true);
            $url    = $this->input->post('url' , true);
            $this->db->where('id', $this->input->post('id'));

            //Set data mana yang mau di update
            $this->db->set('nama', $nama);
            $this->db->set('icon', $icon);
            $this->db->set('url', $url);

            // Update data ke table admin menu
            $this->db->update('admin_menu');
            $this->session->set_flashdata('pesan',' Di Update !');
            redirect('admin_menu/menu_management');
        }
    }

    // Fungsi Hapus
    public function hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('admin_menu', ['id' => $id]);
        $this->session->set_flashdata('pesan',' Di Hapus !');
        redirect('admin_menu/menu_management');
    }
    
    public function about()
    {
        $data['judul'] = 'About';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['about'] = $this->db->get_where('about')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('hb', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/about', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            // Load library upload
            $this->load->library('upload');

            $config['upload_path']  = './front-end/assets/img/about';
            $config['allowed_types']= 'png|jpg|jpeg|gif';
            $config['max_size']     = 2040;
            
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal di tambahkan !');
                redirect('admin_menu/about');
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
            }

            $data = [
                'hb'                => $this->input->post('hb'),
                'motto'             => $this->input->post('motto'),
                'detail_bio'        => $this->input->post('detail_bio'),
                'image'             => $image // jangan lupa tambahkan ini jika ingin menyimpan nama file image
            ];

            // Insert ke table admin menu
            $this->db->insert('about', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/about');
        }
    }

    public function edit_about($id)
    {
        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['about'] = $this->db->get_where('about',['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('hb', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('motto', 'Motto', 'required|trim');
        $this->form_validation->set_rules('detail_bio', 'Detail Bio', 'required|trim');
        
        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_about', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $header     = $this->input->post('hb', true);
            $motto      = $this->input->post('motto', true);
            $detail     = $this->input->post('detail_bio', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path']  = './front-end/assets/img/about';
                $config['allowed_types']= 'png|jpg|jpeg';
                $config['max_size']     = 2048;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $gambar_lama = $data['about']['image'];
                    unlink(FCPATH . './front-end/assets/img/about' . $gambar_lama);
                }   

                // Upload gambar baru
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {
                // echo $this->upload->display_errors();
            }

            // Set data update ke database
            $this->db->set('hb' ,$header);
            $this->db->set('motto' ,$motto);
            $this->db->set('detail_bio' ,$detail);
            $this->db->set('id' ,$this->input->post('id'));
            
            // Update data ke table nya
            $this->db->update('about');
            $this->session->set_flashdata('pesan',' Di Update !');
            redirect('admin_menu/about');
        }
    }

    public function hapus_about($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('about', ['id' => $id]);
        $this->session->set_flashdata('pesan',' Di Hapus !');
        redirect('admin_menu/about');
    }

    public function banner_image()
    {
        $data['judul'] = 'Banner Image';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['banner_image'] = $this->db->get_where('banner_image')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
        
        // Set Rules
        $this->form_validation->set_rules('text', 'Text', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/banner_image', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $config['upload_path']  = './front-end/assets/img/banner';
            $config['allowed_types']= 'png|jpg|jpeg|gif';
            $config['max_size']     = 2040;

            $this->load->library('upload', $config);

            // Jika gagal mengupload image 
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal di tambahkan');
                redirect('admin_menu/banner_image');
            
            // Jika berhasil meng upload image nya
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
                $text   = $this->input->post('text', TRUE);
            }

            $data = [
                'text'    => $text,
                'image'   => $image
            ];
            // Insert ke table admin menu
            $this->db->insert('banner_image', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/banner_image');
        }
    }

    public function edit_banner($id)
    {
        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['banner_image'] = $this->db->get_where('banner_image',['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('text', 'Text', 'required|trim');
        
        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_banner', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $text     = $this->input->post('text', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path']  = './front-end/assets/img/banner';
                $config['allowed_types']= 'png|jpg|jpeg';
                $config['max_size']     = 2048;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $gambar_lama = $data['banner_image']['image'];
                    unlink(FCPATH . './front-end/assets/img/banner' . $gambar_lama);
                }   

                // Upload gambar baru
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {
                // echo $this->upload->display_errors();
            }

            // Set data update ke database
            $this->db->set('text' ,$text);
            $this->db->set('id' ,$this->input->post('id'));
            
            // Update data ke table nya
            $this->db->update('banner_image');
            $this->session->set_flashdata('pesan',' Di Update !');
            redirect('admin_menu/banner_image');
        }
    }

    public function hapus_banner($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('banner_image', ['id' => $id]);
        $this->session->set_flashdata('pesan', 'Di Hapus !');
        redirect('admin_menu/banner_image');
    }


    public function visi_misi()
    {
        $data['judul'] = 'Visi dan Misi Perusahaan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['visi_misi'] = $this->db->get_where('visi_misi')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('header', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('visi_misi', 'visi_misi', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/visi_misi', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $data = [
                'header'        => $this->input->post('header'),
                'visi_misi'     => $this->input->post('visi_misi')
            ];
            // Insert ke table admin menu
            $this->db->insert('visi_misi', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/visi_misi');
        }
    }

    public function edit_visi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 
        $data['visi_misi'] = $this->db->get_where('visi_misi', ['id' => $id])->row_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules untuk edit menu
        $this->form_validation->set_rules('header', 'Header Bio', 'required|trim');
        $this->form_validation->set_rules('visi_misi', 'visi_misi', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_visi', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $header     = $this->input->post('header' , true);
            $visi_misi  = $this->input->post('visi_misi' , true);

            //Set data mana yang mau di update
            $this->db->set('header', $header);
            $this->db->set('visi_misi', $visi_misi);

            // Update data ke table admin menu
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('visi_misi');
            $this->session->set_flashdata('pesan',' Di Update !');
            redirect('admin_menu/visi_misi');
        }
    }

    public function hapus_visi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('visi_misi', ['id' => $id]);
        $this->session->set_flashdata('pesan',' Di Hapus');
        redirect('admin_menu/visi_misi');
    }

    public function portofolio()
    {
        $data['judul'] = 'Portofolio';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['portofolio'] = $this->db->get_where('portofolio')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('client', 'client', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/portofolio', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {

            // Load library upload
            $this->load->library('upload');

            $config['upload_path']  = './front-end/assets/img/portofolio';
            $config['allowed_types']= 'png|jpg|jpeg|gif';
            $config['max_size']     = 2040;
            
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Portofolio Gagal di tambahkan ! </div>');
                redirect('admin_menu/portofolio');
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
            }

            $data = [
                'judul'         => $this->input->post('judul'),
                'deskripsi'     => $this->input->post('deskripsi'),
                'tipe'          => $this->input->post('tipe'),
                'slug'          => $this->input->post('slug'),
                'client'        => $this->input->post('client'),
                'created_at'    => time(),
                'image'         => $image // jangan lupa tambahkan ini jika ingin menyimpan nama file image
            ];

            // Insert ke table admin menu
            $this->db->insert('portofolio', $data);
            $this->session->set_flashdata('pesan','<div class="alert alert-primary" role="alert">Data Portofolio berhasil di tambahkan ! </div>');
            redirect('admin_menu/portofolio');
        }
    }

    public function edit_portofolio($id)
    {
        $data['judul'] = 'Service';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['portofolio'] = $this->db->get_where('portofolio', ['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('client', 'Client', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_portofolio', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $judul = $this->input->post('judul', true);
            $deskripsi = $this->input->post('deskripsi', true);
            $tipe = $this->input->post('tipe', true);
            $slug = $this->input->post('slug', true);
            $client = $this->input->post('client', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path'] = './front-end/assets/img/portofolio';
                $config['allowed_types'] = 'png|jpg|jpeg';
                $config['max_size'] = 2048;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['portofolio']['image'];
                    if (file_exists(FCPATH . './front-end/assets/img/portofolio/' . $gambar_lama)) {
                        unlink(FCPATH . './front-end/assets/img/portofolio/' . $gambar_lama);
                    }
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            // Set data update ke database
            $this->db->set('judul', $judul);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('slug', $slug);
            $this->db->set('tipe', $tipe);
            $this->db->set('client', $client);
            
            // Update data ke table nya
            $this->db->where('id', $id); // Pastikan update berdasarkan id yang benar
            $this->db->update('portofolio');
            $this->session->set_flashdata('pesan', ' Di Update !');
            redirect('admin_menu/portofolio');
        }
    }

    public function hapus_portofolio($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('portofolio', ['id' => $id]);
        $this->session->set_flashdata('pesan',' Di Hapus !');
        redirect('admin_menu/portofolio');
    }

    public function karyawan()
    {
        $data['judul'] = 'Data Karyawan perusahaan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['karyawan'] = $this->db->get_where('karyawan')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('linkedin', 'LinkedIn', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/karyawan', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $config['upload_path']  = './front-end/assets/img/karyawan';
            $config['allowed_types']= 'png|jpg|jpeg';
            $config['max_size']     = 2040;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal Di tambahkan !');
                redirect('admin_menu/karyawan');
            } else {
                $image  = $this->upload->data();
                $image  = $image['file_name'];
                $nama   = $this->input->post('nama', true);
                $fb     = $this->input->post('facebook', true);
                $ig     = $this->input->post('instagram', true);
                $lkd    = $this->input->post('linkedin', true);
                $jbt    = $this->input->post('jabatan', true);
                $pesan  = $this->input->post('pesan', true);
            }

            $data = [
                'nama'      => $nama,
                'image'     => $image,
                'facebook'  => $fb,
                'instagram' => $ig,
                'linkedin'  => $lkd,
                'jabatan'   => $jbt,
                'pesan'     => $pesan
            ];
            // Insert ke table admin menu
            $this->db->insert('karyawan', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/karyawan');
        }
    }

    public function edit_karyawan($id)
    {
        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['karyawan'] = $this->db->get_where('karyawan',['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('facebook', 'Facebook', 'required|trim');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('linkedin', 'LinkedIn', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
        
        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_karyawan', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $nama   = $this->input->post('nama', true);
            $fb     = $this->input->post('facebook', true);
            $ig     = $this->input->post('instagram', true);
            $lkd    = $this->input->post('linkedin', true);
            $jbt    = $this->input->post('jabatan', true);
            $pesan  = $this->input->post('pesan', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path']  = './front-end/assets/img/karyawan';
                $config['allowed_types']= 'png|jpg|jpeg';
                $config['max_size']     = 2048;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $gambar_lama = $data['service']['image'];
                    unlink(FCPATH . './front-end/assets/img/karyawan' . $gambar_lama);
                }   

                // Upload gambar baru
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {
                // echo $this->upload->display_errors();
            }

            // Set data update ke database
            $this->db->set('nama' ,$nama);
            $this->db->set('facebook' ,$fb);
            $this->db->set('instagram' ,$ig);
            $this->db->set('linkedin' ,$lkd);
            $this->db->set('jabatan' ,$jbt);
            $this->db->set('pesan' ,$pesan);
            $this->db->set('id' ,$this->input->post('id'));
            
            // Update data ke table nya
            $this->db->update('Karyawan');
            $this->session->set_flashdata('pesan',' Di Update ! ');
            redirect('admin_menu/Karyawan');
        }
    }

    public function detail_karyawan($id)
    {
        $data['judul'] = 'Detail Karyawan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['karyawan'] = $this->db->get_where('karyawan', ['id' => $id])->row_array();
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        $this->load->view('template/admin_header', $data);
        $this->load->view('template/admin_sidebar', $data);
        $this->load->view('template/admin_topbar', $data);
        $this->load->view('admin_menu/detail_karyawan', $data);
        $this->load->view('template/admin_footer', $data);    
    }

    public function hapus_karyawan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('karyawan', ['id' => $id]);
        $this->session->set_flashdata('pesan',' Di Hapus !');
        redirect('admin_menu/karyawan');
    }

    public function service()
    {

        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['service'] = $this->db->get_where('service')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_service', 'Isi_service', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/service', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $config['upload_path']  = './front-end/assets/img/service';
            $config['allowed_types']= 'png|jpg|jpeg';
            $config['max_size']     = 2040;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal di tambahkan');
                redirect('admin_menu/service');
            } else {
                $image          = $this->upload->data();
                $image          = $image['file_name'];
                $judul          = $this->input->post('judul', true);
                $slug           = $this->input->post('slug', true);
                $service        = $this->input->post('isi_service', true);
                $created_by     = $this->input->post('created_by', true);

            }

            $data = [
                'judul'         => $judul,
                'image'         => $image,
                'slug'          => $slug,
                'isi_service'   => $service,
                'created_by'    => $created_by,
                'created_at'    => time()
            ];
            // Insert ke table admin menu
            $this->db->insert('service', $data);
            $this->session->set_flashdata('pesan', ' Di tambahkan');
            redirect('admin_menu/service');
        }
    }

    public function edit_service($id)
    {
        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['service'] = $this->db->get_where('service',['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('slug', 'Slug', 'required|trim');
        $this->form_validation->set_rules('isi_service', 'Isi_service', 'required|trim');
        $this->form_validation->set_rules('created_by', 'Created By', 'required|trim');

        
        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_service', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $judul = $this->input->post('judul', true);
            $slug = $this->input->post('slug', true);
            $service = $this->input->post('isi_service', true);
            $created_by = $this->input->post('created_by', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path']  = './front-end/assets/img/service';
                $config['allowed_types']= 'png|jpg|jpeg';
                $config['max_size']     = 2048;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $gambar_lama = $data['service']['image'];
                    unlink(FCPATH . './front-end/assets/img/service' . $gambar_lama);
                }   

                // Upload gambar baru
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {
                // echo $this->upload->display_errors();
            }

            // Set data update ke database
            $this->db->set('judul' ,$judul);
            $this->db->set('slug' ,$slug);
            $this->db->set('isi_service' ,$service);
            $this->db->set('created_by' ,$created_by);
            $this->db->where('id', $id);

            // Update data ke table nya
            $this->db->update('service');
            $this->session->set_flashdata('pesan',' Di update');
            redirect('admin_menu/service');
        }
    }

    public function hapus_service($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('service', ['id' => $id]);
        $this->session->set_flashdata('pesan', ' Di hapus!');
        redirect('admin_menu/service');
    }

    public function contact()
    {

        $data['judul'] = 'Contact Perusahaan';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['contact'] = $this->db->get_where('contact')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp', 'Nomor Telephone', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('wa', 'No Whatsapp', 'required|trim');
        $this->form_validation->set_rules('maps', 'Maps', 'required|trim');

        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/contact', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            
            $config['upload_path']  = './front-end/assets/img/contact';
            $config['allowed_types']= 'png|jpg|jpeg';
            $config['max_size']     = 2040;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal Di tambahkan !');
                redirect('admin_menu/contact');
            } else {
                $image      = $this->upload->data();
                $image      = $image['file_name'];
                $alamat     = $this->input->post('alamat', true);
                $telp       = $this->input->post('telp', true);
                $email      = $this->input->post('email', true);
                $ig         = $this->input->post('instagram', true);
                $wa         = $this->input->post('wa', true);
                $maps       = $this->input->post('maps', true);
            }

            $data = [
                'image' => $image ,
                'alamat' => $alamat ,
                'telp' => $telp ,
                'email' => $email ,
                'instagram' => $ig ,
                'wa' => $wa ,
                'maps' => $maps ,
            ];
            // Insert ke table admin menu
            $this->db->insert('contact', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/contact');
        }
    }

    public function edit_contact($id)
    {
        $data['judul'] = 'Service';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['contact'] = $this->db->get_where('contact',['id' => $id])->row_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();
 
        // Set Rules
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('telp', 'Nomor Telephone', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
        $this->form_validation->set_rules('wa', 'No Whatsapp', 'required|trim');
        $this->form_validation->set_rules('maps', 'Maps', 'required|trim');

        
        if ($this->form_validation->run() == false ) {
        
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/edit_contact', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            $alamat     = $this->input->post('alamat', true);
            $telp       = $this->input->post('telp', true);
            $email      = $this->input->post('email', true);
            $instagram  = $this->input->post('instagram', true);
            $wa         = $this->input->post('wa', true);
            $maps       = $this->input->post('maps', true);

            // Cek jika ada gambar yang akan diganti
            $upload = $_FILES['image']['name'];

            if ($upload) {
                $config['upload_path']  = './front-end/assets/img/contact';
                $config['allowed_types']= 'png|jpg|jpeg';
                $config['max_size']     = 2048;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $gambar_lama = $data['contact']['image'];
                    unlink(FCPATH . './front-end/assets/img/contact' . $gambar_lama);
                }   

                // Upload gambar baru
                $gambar_baru = $this->upload->data('file_name');
                $this->db->set('image', $gambar_baru);
            } else {
                // echo $this->upload->display_errors();
            }

            // Set data update ke database
            $this->db->set('alamat' ,$alamat);
            $this->db->set('telp' ,$telp);
            $this->db->set('email' ,$email);
            $this->db->set('instagram' ,$instagram);
            $this->db->set('wa' ,$wa);
            $this->db->set('maps' ,$maps);
            $this->db->where('id', $id);

            // Update data ke table nya
            $this->db->where('id', $id); // Pastikan update berdasarkan id yang benar   
            $this->session->set_flashdata('pesan',' Di update');
            redirect('admin_menu/contact');
        }
    }

    public function hapus_contact($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Hapus data yang ada dalam admin_menu
        $this->db->delete('contact ', ['id' => $id]);
        $this->session->set_flashdata('pesan', ' Di hapus!');
        redirect('admin_menu/contact ');
    }

    public function partner()
    {
        $data['judul'] = 'About';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Query tabelnya (ambil tablenya)
        $data['partner'] = $this->db->get_where('partner')->result_array();  
        $data['admin_menu'] = $this->db->get_where('admin_menu')->result_array();

        // Set Rules
        $this->form_validation->set_rules('url', 'Link', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/admin_header', $data);
            $this->load->view('template/admin_sidebar', $data);
            $this->load->view('template/admin_topbar', $data);
            $this->load->view('admin_menu/partner', $data);
            $this->load->view('template/admin_footer', $data);    
        } else {
            // Load library upload
            $this->load->library('upload');

            $config['upload_path']  = './front-end/assets/img/partner';
            $config['allowed_types']= 'png|jpg|jpeg|gif';
            $config['max_size']     = 2040;
            
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', ' Gagal di tambahkan !');
                redirect('admin_menu/partner');
            } else {
                $image = $this->upload->data();
                $image = $image['file_name'];
            }

            $data = [
                'url'                => $this->input->post('url'),
                'image'             => $image // jangan lupa tambahkan ini jika ingin menyimpan nama file image
            ];

            // Insert ke table admin menu
            $this->db->insert('partner', $data);
            $this->session->set_flashdata('pesan',' Di tambahkan !');
            redirect('admin_menu/partner');
        }
    }
    
    public function edit_partner()
    {

    }

    public function hapus_partner()
    {

    }
}