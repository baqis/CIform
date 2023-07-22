<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function index()
	{
		echo "Hello World... untuk admin<br>";
	}
	// localhost/CIview/index.php/admin
	// localhost/CIview/index.php/admin/index
	
	public function cetakID() {
		$nim="M3119001";
		$nama="Paijo";
		echo "NIM Mahasiswa : $nim<br>";
		echo "Nama Mahasiswa : $nama<br>";
	}
	// localhost/CIview/index.php/mahasiswa/cetakID

	public function cetakID2($nim,$nama) {
		// $nim="M3119001";
		// $nama="Paijo";
		$tahun=2021;
		echo "NIM Mahasiswa : $nim<br>";
		echo "Nama Mahasiswa : $nama<br>";
		echo "Tahun Ajaran : $tahun<br>";
	}
	// localhost/CIview/index.php/mahasiswa/cetakID2/M3119001/Paijo

	// public function _remap($method, $params = array())
	// {
	// 		$method = 'process_'.$method;
	// 		if (method_exists($this, $method))
	// 		{
	// 				return call_user_func_array(array($this, $method), $params);
	// 		}
	// 		show_404();
	// }	
	// biasany untuk proses pengembangan

	public function _output($output)
	{
			// echo $output; //kalo pake view
			echo "D3 TI SV UNS<br>";
	}
	// localhost/CIview/index.php/mahasiswa/cetakID

	
}