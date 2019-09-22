<?php
class pertemuan3View extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('file');
    }

    public function index()
    {
        $data_mhs = read_file("./files/data_mhs.csv");
        // var_dump(explode(";", $data_mhs));
        $data = array(
            'title' => 'MY APP',
            'header' => 'Show Data Mahasiswa',
            'data_mhs' => explode(";", $data_mhs)
        );
        $this->load->view('cobaView', $data);
    }

	public function showKelas($kelas="")
	{
        $data_mhs = read_file("./files/data_mhs.csv");
        $data = array(
            'title' => 'MY APP',
            'header' => 'Show Data Mahasiswa',
            'kelas' => $kelas,
            'data_mhs' => explode(";", $data_mhs)
        );
        $this->load->view('cobaView', $data);
	}
}