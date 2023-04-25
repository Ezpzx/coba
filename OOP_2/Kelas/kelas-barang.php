<?php
class DaftarBarang{
    //Atribut
    public $barang=[
        ["nama"=>"Baygon","harga"=>45000],
        ["nama"=>"Nutrisari","harga"=>5000]
    ];
    public $total;

    //Method
    public function tampilkanData(){
        return $this->barang;
    }
    public function jumlah(){
        foreach($this->barang as $b){
            $this->total = $this->total + $b["harga"];
        }
        return $this->total;
    }
}

?>