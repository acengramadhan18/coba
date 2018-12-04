<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function insert(){
		$data = array('npm' => $this->input->post('npm', true), 
						'nama'=>$this->input->post('nama', true),
						'jurusan'=>$this->input->post('jurusan', true),
						'kelas'=>$this->input->post('kelas', true),
						'no_telp'=>$this->input->post('telp', true));
		$masukkan = $this->app_model->prosesinsert('datamahasiswa',$data);
		if($masukkan > 0){
			$this->session->set_flashdata('sukses', 'data berhasil disimpan');
			redirect('welcome/index');
		} else {
				echo "Gagal disimpan";
			}
		}
	}
  /*ini codingan di CI*/
