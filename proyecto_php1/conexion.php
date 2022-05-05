<?php
require_once "define.php";

class conexion extends mysqli{
    private $con;

    
    public function __construct() 
    {
        $this->con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        //$this->con->set_charset(DB_CHARSET);
        $this->con->connect_errno ? die('ERROR EN LA CONEXION'.mysqli_connect_errno()) : $m="CONECTADO";
        //echo $m;
    } 
    
    public function cerrar(){
        mysqli_close($this->con);
    }
    public function consulta($sql){
        $res=mysqli_query($this->con,$sql);
        return $res;
    }
    public function regresar($sql,$id){
        $res=mysqli_query($this->con,$sql);
        $info = $res->fetch_all(MYSQLI_ASSOC);
        $tot=null;
        foreach($info as $row){
            $tot=$row[$id];
        }
        return $tot;
    }
    public function registrar($sql){
        if (mysqli_multi_query($this->con,$sql)) {
            return true;
            } else {
            return false;
                }
    }
    
}
?>