<?php
class Transportasi
{
    //Properties
    public $jenis;
    public $bahanBakar;
    public $jumlahPenumpang;

    //Method
    function set_jenis($jenis){
        $this->jenis = $jenis;
    }

    function get_jenis(){
        return $this->jenis;
    }
}

$mobil1 = new Transportasi();
$sepedaMotor1 = new Transportasi();

$mobil1->set_jenis("Transportasi Darat");
$sepedaMotor1->set_jenis("Transportasi Darat");

echo $mobil1->get_jenis();
echo "<br>";
echo $sepedaMototor1->get_jenis();

