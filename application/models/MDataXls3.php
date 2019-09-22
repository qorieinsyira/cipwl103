<?php
class MDataXls3 extends CI_Model {

	public function showKelas($kodeMK="", $kelas="")
	{
        $data = array(
            'title' => 'MY APP',
            'header' => 'Show Data Mahasiswa',
            'kodeMK' => $kodeMK,
            'kelas' => $kelas,
        );
        $this->load->view('cobaView', $data);
        $this->load->helper('file');
		}
}