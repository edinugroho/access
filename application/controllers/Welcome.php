<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderM');
	}
	public function index()
	{
		$data['title'] = "Access Tel-U";
		$this->load->view('header', $data);
		$this->load->view('index');
	}
	public function merchandise()
	{
		$data['title'] = "Merchandise Access Tel-U";
		$this->load->view('header', $data);
		$this->load->view('merchandise');
	}
	public function isiDataPembeliAction()
	{
		$this->form_validation->set_rules('nama', 'Name', 'trim|required');
		$this->form_validation->set_rules('size', 'Ukuran', 'trim|required');
		$this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('idLine', 'ID Line', 'trim|required');
		$this->form_validation->set_rules('Hp', 'No. Telephone', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$nama = $this->input->post('nama');
			$size = $this->input->post('size');
			$jenisKelamin = $this->input->post('jenisKelamin');
			$idLine = $this->input->post('idLine');
			$Hp = $this->input->post('Hp');
			$data = [
				'nama' => $nama,
				'size' => $size,
				'jenisKelamin' => $jenisKelamin,
				'idLine' => $idLine,
				'Hp' => $Hp
			];
			$q = $this->OrderM->addOrder($data);
			if ($q) {
				$data['title'] = "Order Merchandise Access Tel-U";
				$this->session->set_flashdata('successOrder', "Swal.fire('Order Berhasil','Silahkan Melakukan Pembayaran','success');");
				$this->load->view('header', $data);
				$this->load->view('isiDataOrder');
			}
		} else {
			$data['title'] = "Order Merchandise Access Tel-U";
			$this->load->view('header', $data);
			$this->load->view('isiDataOrder');
		}
	}
	public function isiDataPembeli()
	{
		$data['title'] = "Order Merchandise Access Tel-U";
		$this->load->view('header', $data);
		$this->load->view('isiDataOrder');
	}
}
