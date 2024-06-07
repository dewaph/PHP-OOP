<?php 

Abstract class Produk {
    protected $merk, 
           $tipe,
           $asal,
           $harga,
           $cc;

    public function __construct( $merk = "merk", $tipe = "tipe", $asal = "asal", $harga = 0 ) {
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->asal = $asal;
        $this->harga = $harga;
    }

    public function setmerk( $merk ) {
        $this->merk = $merk;
    }

    public function getmerk() {
        return $this->merk;
    }

    public function settipe( $tipe ) {
        $this->tipe = $tipe;
    }

    public function gettipe() {
        return $this->tipe;
    }

    public function setasal( $asal ) {
        $this->asal = $asal;
    }

    public function getasal() {
        return $this->asal;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getLabel() {
        return "$this->tipe | $this->asal";
    }

    abstract public function getInfo();

}