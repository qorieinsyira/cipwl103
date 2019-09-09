<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CobaCoba extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
		echo "HELLO WORLD";
    }
    
    // public function latihan1){
    //     echo "Latihan1";
    // }
    
    // public function latihan2($param1="", $param2="", $param3="", $param4=""){
    //     echo "Latihan2 -> $param1 | $param2 | $param3 | $param4";
    // }
    public function nilai_akhir($tugas=0, $uts=0, $uas=0){

        $NA = $tugas*0.3 + $uts*0.3 + $uas*0.4;

            if ($NA >= 80) {
                $nilaiHuruf = "A";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA >= 75 && $NA < 80) {
                $nilaiHuruf = "B+";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA >= 70 && $NA < 75) {
                $nilaiHuruf = "B";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA >= 65 && $NA < 70) {
                $nilaiHuruf = "C+";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA >= 60 && $NA < 65) {
                $nilaiHuruf = "C";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA >= 56 && $NA < 60) {
                $nilaiHuruf = "D";
                echo "$NA | Nilai Anda $nilaiHuruf";
            } else if ($NA <56) {
                $nilaiHuruf = "E";
                echo "$NA | Nilai Anda $nilaiHuruf";
            }           

            if ($uts == 0 || $uas == 0) {
                $nilaiHuruf = "E";
                echo $nilaiHuruf;
            }
    }
}
