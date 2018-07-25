<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi_C extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    	$this->load->library('pagination');
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->view('Registrasi_V');
	}

	public function submit()
	{
		$data = $this->bindData();
        $this->Pengajuan_M->insert($data);

		redirect('Pengajuan_C/view');
	}

	private function bindData()
	{
		$data['account_id'] = $this->input->post('account_id');
        $data['name'] = $this->input->post('name');
        $data['phone'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');

		return $data;
	}
}