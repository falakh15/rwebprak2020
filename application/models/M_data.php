<?php 

class M_data extends CI_Model{
	public function data_wrgmasuk(){
		$query = $this->db->query("SELECT *FROM tb_wrgmasuk");
		return $query->result();
	}
	public function data_wrgkeluar(){
		$query = $this->db->query("SELECT *FROM tb_wrgkeluar");
		return $query->result();
	}


public function simpan_datamsk()
		{
			$data = [
				'id' => "",
				'nama' => $this->input->post('nama',true),
				'jk' => $this->input->post('jk',true),
				'kota_asal' => $this->input->post('kota',true),
				'alamat_asal' => $this->input->post('alamat',true),
				'alamat_tujuan' => $this->input->post('tujuan',true),
				'no_hp' => $this->input->post('hp',true)
			];
			$this->db->insert('tb_wrgmasuk',$data);
			redirect('Home');
		}	
		
public function simpan_datakeluar()
		{
			$data = [
				'id' => "",
				'nama' => $this->input->post('nama',true),
				'jk' => $this->input->post('jk',true),
				'kota_tujuan' => $this->input->post('kota',true),
				'alamat_asal' => $this->input->post('alamat',true),
				'alamat_tujuan' => $this->input->post('tujuan',true),
				'no_hp' => $this->input->post('hp',true)
			];
			$this->db->insert('tb_wrgkeluar',$data);
			redirect('Home');
		}	
		
public function hapusdata($id)
{
	$this->db->where('id', $id);
	$this->db->delete('tb_wrgmasuk');
	$this->db->where('id', $id);
		$this->db->delete('tb_wrgkeluar');
}



}

?>
