<?php 

class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "firman";
    var $db = "firman1tid";
    var $con;

    function __construct(){
        $this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con,"select * from user");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($nama, $usia, $email){
        mysqli_query($this->con,"INSERT INTO user(nama, usia, email) VALUES ('$nama','$usia','$email')");
    }
    function hapus($id){
        mysqli_query($this->con,"DELETE FROM user WHERE id='$id'");
    }
    function edit($id){
        $data = mysqli_query($this-> con,"select * from user where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
}