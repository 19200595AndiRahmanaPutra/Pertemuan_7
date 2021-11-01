<?php
class ModelSepatu extends CI_Model
{
	public $merk, $harga;

	public function getHarga($merk=null)
	{
		$this->merk=$merk;
		if ($this->merk == "Nike") {
			$this->harga=3750000;
		}
		elseif($this->merk == "Adidas") {
			$this->harga=3000000;
		}
		elseif($this->merk == "Kickers") {
			$this->harga=2500000;
		}
		elseif($this->merk == "Eiger") {
			$this->harga=2000000;
		}
		elseif($this->merk == "Bucherri") {
			$this->harga=400000;
		}
	return $this->harga;
	}
}