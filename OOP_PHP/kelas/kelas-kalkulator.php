<?php
class HitungKalkulator{
    //ATTRIBUTE
    public $n1;
    public $n2;
    public $hasil;
    public $ket;


    //METHOD
    public function hitungTambah(){
        $this->hasil=$this->n1 + $this->n2;
        return $this->hasil;
    }

    public function cekBilangan(){
        if($this->hasil%2==0){
            $this->ket="Bilangan Genap";
        }
        else{
            $this->ket="Bilangan Ganjil";
        }
        return $this->ket;
    }
}
?>