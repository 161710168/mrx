<?php
class orang {
public $nama ;
public $tempat ;
public $kelas ;
public $status ;

	public function __construct ($nama,$tempat,$kelas,$status)		{
		
		$this->nama = $nama ;
		$this->tempat = $tempat ;
		$this->kelas = $kelas ;
		$this->status = $status ;
		

	}
	public function get_nama ()
	{
		return $this->nama ;
	}
	public function get_tempat ()
	{
		return $this->tempat ;
	}
	public function get_kelas ()
	{
		return $this->kelas ;
	}
	public function get_status ()
	{
		return $this->status ;
	}
	
}
?>