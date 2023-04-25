<?php
class DatabaseSiswa{
    //Attribute
    public $host="127.0.0.1";
    public $dbname="db_siswa";
    public $user="root";
    public $password="";

    public $db;

    //Method

    //Konstruktor :  Method yang otomatis dipanggil ketika objek dibentuk
    public function __construct()
    {
        $this->db=new PDO(
            "mysql:host={$this->host};dbname={$this->dbname}",
            $this->user,
            $this->password
        );
    }

    //Method Select
    public function selectSiswa()
    {
        $query=$this->db->prepare("SELECT * FROM tb_siswa");
        $query->execute();

        $data=$query->fetchAll();
        return $data;   
    }

    //Method Insert
    public function insertSiswa($nis,$nama,$alamat)
    {
        $query=$this->db->prepare("INSERT INTO tb_siswa(nis,nama,alamat) VALUES(:nis,:nama,:alamat)");
        $query->bindParam(":nis",$nis);
        $query->bindParam(":nama",$nama);
        $query->bindParam(":alamat",$alamat);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }

    }
    public function deleteSiswa($a)
    {
        $query=$this->db->prepare("DELETE FROM tb_siswa WHERE id=:id");
        $query->bindParam(":id",$a);

        if($query->execute()){
            return True;
        }
        else{
            return False;
        }
    }
    public function selectSiswaId($id)
    {
        $query=$this->db->prepare("SELECT * FROM tb_siswa WHERE id=:id");
        $query->bindParam(":id",$id);
        $query->execute();
        $data=$query->fetchAll();
        return $data;
    }
    public function update($id,$nis,$nama,$alamat){
        $query=$this->db->prepare("UPDATE tb_siswa SET nis=:nis,nama=:nama,alamat=:alamat WHERE id=:id");
        $query->bindParam(":id",$id);
        $query->bindParam(":nis",$nis);
        $query->bindParam(":nama",$nama);
        $query->bindParam(":alamat",$alamat);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }
    }
}
?>