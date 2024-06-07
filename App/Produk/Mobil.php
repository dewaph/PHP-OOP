<?php 

class Mobil extends Produk implements InfoProduk {

    public function __construct( $merk = "merk", $tipe = "tipe", $asal = "asal", $harga = 0, $cc = 0 ) {
        parent::__construct( $merk, $tipe, $asal, $harga );

        $this->cc = $cc;
    }

    public function getInfo() {
        $str = "{$this->merk} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk() {
        $str = "Mobil : " . $this->getInfo() . " ~ {$this->cc} CC.";
        return $str;
    }
}