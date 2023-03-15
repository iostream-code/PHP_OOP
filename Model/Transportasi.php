<?php
class Transportasi
{
    //Properties
    public $jenis;
    public $bahanBakar;
    public $jumlahPenumpang;
    protected $merk;

    //Method
    function set_jenis($jenis)
    {
        $this->jenis = $jenis;
    }

    function get_jenis()
    {
        return $this->jenis;
    }

    function set_merk($merk)
    {
        $this->merk = $merk;
    }

    function get_merk()
    {
        return $this->merk;
    }
}

$mobil1 = new Transportasi();
$sepedaMotor1 = new Transportasi();

$mobil1->set_jenis("Transportasi Darat");
$sepedaMotor1->set_jenis("Transportasi Darat");

$mobil1->set_merk("Sedan");
$sepedaMotor1->set_merk("Ducati");

echo $mobil1->get_merk() . " adalah\t";
echo $mobil1->get_jenis();
echo "<br>";
echo $sepedaMotor1->get_merk() . " adalah\t";
echo $sepedaMotor1->get_jenis();
