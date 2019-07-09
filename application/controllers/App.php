<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('record');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('app/home');
	}

	public function next()
	{
		setlocale (LC_TIME, 'id_ID');
		$data['jenisalat'] = $this->input->post('jenisAlat',TRUE);
		$data['dari'] = $this->input->post('xmode',TRUE);		
		$data['tglreg'] = $this->input->post('tglReg',TRUE);
		$this->load->view('layout/header');
		switch ($data['jenisalat']) {
			case 'KPP Sendiri':
				$this->load->view('app/sendiri',$data);
				break;
			case 'KPP Lain':
				$this->load->view('app/lain',$data);
				break;
			case 'KPKNL':
				$this->load->view('app/kpknl',$data);
				break;
			case 'PPAT':
				$this->load->view('app/ppat',$data);
				break;
			default:
				break;
		}
		
	}
	public function submit($slug=NULL)
	{

		$this->load->view('layout/header');
		switch ($slug) {
			case 'kpp_sendiri':
				$data['export'] = array(
					'jenis_alat' => $this->input->post('jenisalat',TRUE),
					'dari' => $this->input->post('dari',TRUE),		
					'tgl_reg' => $this->input->post('tglreg',TRUE),
					'nama_wp' => $this->input->post('namawp',TRUE),
					'untuk' => $this->input->post('untuk',TRUE),
					'ket_lain' => (($this->input->post('ketlain',TRUE) !== NULL) ? $this->input->post('ketlain',TRUE) : ''),
					'no_surat' => $this->input->post('nosurat',TRUE),
					'no_agenda' => $this->input->post('noagenda',TRUE),
					'no_ak' => $this->input->post('noak',TRUE),
					'nilai' => $this->input->post('nilai',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE)
				);
				$this->record->catat($slug,$data['export']);
				break;
			case 'kpp_lain':
				$data['export'] = array(
					'jenis_alat' => $this->input->post('jenisalat',TRUE),
					'tgl_reg' => $this->input->post('tglreg',TRUE),
					'nama_wp' => $this->input->post('namawp',TRUE),
					'kpp_pengirim' => $this->input->post('pengirim',TRUE),
					'no_surat' => $this->input->post('nosurat',TRUE),
					'no_agenda' => $this->input->post('noagenda',TRUE),
					'no_ak' => $this->input->post('noak',TRUE),
					'nilai' => $this->input->post('nilai',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE)
				);
				$this->record->catat($slug,$data['export']);
				break;
			case 'kpknl':
				$data['export'] = array(
					'jenis_alat' => $this->input->post('jenisalat',TRUE),
					'tgl_reg' => $this->input->post('tglreg',TRUE),
					'nama_wp' => $this->input->post('namawp',TRUE),
					'no_surat' => $this->input->post('nosurat',TRUE),
					'no_agenda' => $this->input->post('noagenda',TRUE),
					'no_ak' => $this->input->post('noak',TRUE),
					'nilai' => $this->input->post('nilai',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE)
				);
				$this->record->catat($slug,$data['export']);
				break;
			case 'ppat':
				$data['export'] = array(
					'jenis_alat' => $this->input->post('jenisalat',TRUE),
					'tgl_reg' => $this->input->post('tglreg',TRUE),
					'bulan' => $this->input->post('bulan',TRUE),
					'no_surat' => $this->input->post('nosurat',TRUE),
					'no_agenda' => $this->input->post('noagenda',TRUE),
					'no_ak' => $this->input->post('noak',TRUE),
					'keterangan' => $this->input->post('keterangan',TRUE)
				);
				$this->record->catat($slug,$data['export']);
				break;
			default:
				redirect(site_url(''));
				break;
		}
		redirect(site_url(''));
	}
}
