<?php

class Orang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function nyasar()
	{

		$data['heading'] = 'Ini adalah halaman 404';
		$data['message'] = 'Kamu kesasar, kembali kehalaman utama';

		$this->load->view('errors/html/error_404', $data);
	}

	public function tes()
	{
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
			->row();

		$this->load->view('tampilansaya', $data);
	}
}
