<?php
 

require_once 'kucing.php' ;

$orang = new orang ('Yuda','Bandung','XI RPL 2','Single') ;
//$orang->set_penjumlah(21,3);
echo "===================================".'<br>';
echo "<i> Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ."============================="."<br>";


$orang = new orang ('aris','Bandung','XI RPL 2','Single') ;
//$orang->set_penjumlah(21,3);
echo " Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ."============================="."<br>";

$orang = new orang ('syahrul','Bandung','XI RPL 2','Single') ;
//$orang->set_penjumlah(21,3);
echo " Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ."============================="."<br>";

$orang = new orang ('angga','Bandung','XI RPL 2','Single') ;
//$orang->set_penjumlah(21,3);
echo " Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ."============================="."<br>";

$orang = new orang ('ardiansyah','Bandung','XI RPL 2','Single') ;
//$orang->set_penjumlah(21,3);
echo " Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_nama()."<br>" ;
echo " Tempat&nbsp&nbsp&nbsp= ".$orang->get_tempat()."<br>" ;
echo " Kelas &nbsp&nbsp&nbsp&nbsp&nbsp= ".$orang->get_kelas()."<br>" ;
echo " Status &nbsp&nbsp&nbsp&nbsp= ".$orang->get_status()."<br>" ."=============================".'</i>'."<br>";

?>