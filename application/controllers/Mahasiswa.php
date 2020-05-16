<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	/*
	* Untuk model sudah di autoload di application > config > autoload.php (lihat bagian models)
	* Buat breakpoint untuk dump isi variabel dengan var_dump($data); exit; dimana koding mau dihentikan dan variabel dicek
	* Redirect('') artinya kembali ke default_controller
	*/

	public function index()
	{
		// datanya disimpan dalam indeks array dengan key data. Boleh juga dengan $data['data']
		$data = [
			'data' => $this->mahasiswam->all()
		];

		$this->load->view('header');

		// Variabel dikembalikan ke view index
		$this->load->view('index', $data); 
		$this->load->view('footer');
	}

	public function hapus($id) 
	{
		// Ketika url diakses, langsung dihapus dan dikembalikan ke halaman utama
		// $id didapat dari route (perhatikan ada simbol (:any) di url dan $1 di sebelah kanan sama dengan) file routes.php
		$this->mahasiswam->hapus($id);
		
		return redirect('');
	}

	public function detail($id)
	{
		$data = [
			'data' => $this->mahasiswam->detail($id)
		];

		$this->load->view('header');
		$this->load->view('detail', $data);
		$this->load->view('footer');
	}

	public function daftar()
	{
		$this->load->view('header');
		$this->load->view('daftar');
		$this->load->view('footer');
	}

	public function daftar_form()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'asal_sekolah' => $this->input->post('sekolah'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'program_studi' => $this->input->post('prodi')
		];

		$this->mahasiswam->insert($data);

		return redirect('');
	}

	public function edit($id)
	{
		$data = [
			'data' => $this->mahasiswam->detail($id)
		];

		$this->load->view('header');
		$this->load->view('edit', $data);
		$this->load->view('footer');
	}

	public function update($id)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'gender' => $this->input->post('gender'),
			'asal_sekolah' => $this->input->post('sekolah'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'program_studi' => $this->input->post('prodi')
		];

		$this->mahasiswam->update($id, $data);

		return redirect('');
	}
}
