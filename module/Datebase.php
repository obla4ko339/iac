<?php
include "DBConnect.php";

class Datebase extends DBConnect
{

    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    public $link;






    public function __construct($db_host, $db_user, $db_pass,$db_name)
    {
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    //соединение с БД
    public function connect()
    {

        $this->link = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->link) {
            $seldb = @mysqli_select_db($this->db_name, $this->link);
            if($seldb){
                $this->con = true;
                return true;
            }else{
                return false;
            }
        }
    }




    public function insert($tab,$value){
        $insert = "insert into ".$tab;
        for($i = 0; $i <count($value); $i++){
            if(is_string($value[$i])){
                $value[$i] = '"'.$value[$i].'"';
            }
        }

        $value = implode(",",$value);
        $insert .= " values(".$value.");";
        $ins = mysqli_query($this->link,$insert);
        if($ins){
            echo "ok";
            return true;
        }else{
            return false;
        }
    }

}