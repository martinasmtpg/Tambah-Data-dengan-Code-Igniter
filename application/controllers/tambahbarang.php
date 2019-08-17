<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahbarang extends CI_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->model('m_data');
		
	}
	
	public function index()
	{
		
		$data['data'] = $this->m_data->get_all('barang', '*');
		$this->load->view('data', $data);
		
	}
	
	public function add() {
		if($this->input->post('submit')) {
			
			$nama_barang = $this->input->post('nama_barang');
			$jenis_barang = $this->input->post('jenis_barang');
			$harga_barang = $this->input->post('harga_barang');
			$pembayaran = implode(",", $this->input->post('pembayaran'));
			
			$data = array(
				'nama_barang' => $nama_barang,
				'jenis_barang' => $jenis_barang,
				'harga_barang' => $harga_barang,
				'pembayaran' => $pembayaran
			);
			
			if($this->m_data->insert('barang', $data)) {
				
				redirect(base_url('tambahbarang'));
				
			}
			
		}
		
		$this->load->view('form');
		
	}
}
