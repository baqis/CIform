<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	// biasa digunakan buat model library
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Hello World...<br>";
	}
	// cara manggil
	// localhost/CIview/index.php/mahasiswa
	// localhost/CIview/index.php/mahasiswa/index
	
	public function cetakID() {
		$nim="M3119022";
		$nama="Baqiyatus Shaliha";
		echo "NIM Mahasiswa : $nim<br>";
		echo "Nama Mahasiswa : $nama<br>";
	}
	// localhost/CIview/index.php/mahasiswa/cetakID
	// mahasiswa = nama controller

	public function cetakID2($nim,$nama) {
		// $nim="M3119022";
		// $nama="Baqiyatus Shaliha";
		$tahun=2021;
		echo "NIM Mahasiswa : $nim<br>";
		echo "Nama Mahasiswa : $nama<br>";
		echo "Tahun Ajaran : $tahun<br>";
	}
	// localhost/CIview/index.php/mahasiswa/cetakID2/M3119001/Paijo

	public function cetakIDview()
	{
		$this->load->view('mahasiswa/detailmhs');
	}
	// localhost/CIview/index.php/mahasiswa/cetakIDview

	public function cetakIDview2($nim,$nama)
	{
		// $tahun=2021;
		$data['nim']=$nim; //array asosiatif
		$data['nama']=$nama;
		$data['tahun']=2021;
		$this->load->view('mahasiswa/detailmhs',$data);
	}
	// localhost/CIview/index.php/mahasiswa/cetakIDview2/M3119001/Paijo

//CIview2 

	public function blog()
    {
		$data = array(
		'title' => 'My Title',
		'heading' => 'My Heading',
		'message' => 'My Message');
		
        $this->load->view('blogview', $data);
		// data yg dilempar pake parameter ke 2 $data
    }
	// http://localhost/pemweblan/CIview2/index.php/mahasiswa/blog

	public function blog2()
	{
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		// todo_list akan jdi array
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";

		$this->load->view('blogview2', $data);
	}

	public function blog3()
	{
		$data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
		// todo_list akan jdi array
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";

		$data2['cetak']=$this->load->view('blogview2', $data, TRUE);
		$this->load->view('blogview3', $data2);
	}
	// http://localhost/pemweblan/CIview2/index.php/mahasiswa/blog3

	public function inputForm()
    {
        {
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			// $this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules(
				'username', 'Username', 'callback_username_check',
				'required|min_length[5]|max_length[70]',
				array('required' => 'Maaf Anda belum mengisi %s.'));			
			$this->form_validation->set_rules('password', 'Password', 'required',
									array('required' => 'Anda Harus Mengisi %s.'));
			$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('prodi', 'Prodi', 'required');
			$this->form_validation->set_rules('kelamin', 'Kelamin', 'required');
			$this->form_validation->set_rules('aktif', 'Mahasiswa', 'required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');

			if ($this->form_validation->run() == FALSE)
			{
					$this->load->view('mahasiswa/myform');
			}
			else
			{
					$this->load->view('mahasiswa/formsuccess');
			}
		}
	}

	public function username_check($str)
	{
			if ($str == 'test')
			{
					$this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
					return FALSE;
			}
			else
			{
					return TRUE;
			}
	}
	// http://localhost/pemweblan/CIform/index.php/mahasiswa/inputForm

}