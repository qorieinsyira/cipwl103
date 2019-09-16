<?php
class pertemuan3View extends CI_Controller {

	public function showNama($nrp="", $nama="")
	{
        $data = array(
            'title' => 'MY APP',
            'header' => 'Show Data Mahasiswa',
            'nrp' => $nrp,
            'nama' => $nama,
        );
		$this->load->view('cobaView', $data);
		}
}