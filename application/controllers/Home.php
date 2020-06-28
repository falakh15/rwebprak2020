<?php 

class Home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_data');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = array(
			'data_wrgmasuk' => $this->M_data->data_wrgmasuk(),
			'data_wrgkeluar' => $this->M_data->data_wrgkeluar(),
		);
		$this->load->view('footer');
		$this->load->view('v_home', $data);
	}

	
	public function inputmasuk() 
	{

		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('kota','kota','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('tujuan','tujuan','required');
		$this->form_validation->set_rules('hp','hp','required');
		if ($this->form_validation->run()== FALSE) {	
 		$this->load->view('footer');
 		$this->load->view('v_inputmasuk');}
 	
 		else{
		$this->M_data->simpan_datamsk();
		$this->session->set_flashdata('flash','ditambahkan');
		redirect('Home'); }

	}

	

		public function inputkeluar() 
	{
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('jk','jk','required');
		$this->form_validation->set_rules('kota','kota','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('tujuan','tujuan','required');
		$this->form_validation->set_rules('hp','hp','required');
		if ($this->form_validation->run()== FALSE) {	
 		$this->load->view('footer');
 		$this->load->view('v_inputkeluar');}
 	
 		else{
		$this->M_data->simpan_datakeluar();
		$this->session->set_flashdata('flash','ditambahkan');
		redirect('Home'); }

	}



public function simpan_data() 
	{
		$this->m_data->simpan_data();
		
		$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('v_home',$data);
	}

public function hapus($id)
{
		$this->M_data->hapusdata($id);
		$this->session->set_flashdata('flash','dihapus!');
		redirect('Home');
}


}

?>
