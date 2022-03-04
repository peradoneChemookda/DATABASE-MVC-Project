<?php

class Drug{
    public $id;
    public $dName;
    public $dDescript;
    public $dtID;
    public $dtName;

    public function __construct($id,$dName,$dDescript,$dtID,$dtName)
    {
        $this->id = $id;
        $this->dName = $dName;
        $this->dDescript = $dDescript;
        $this->dtID = $dtID;
        $this->dtName = $dtName;
    }

    public static function get($id){
        require("connection/connection_connect.php");
        $sql = "select * from Drug , DrugType where Drug_ID = '$id' and Drug.Drug_type = DrugType.DT_ID";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['Drug_ID'];
        $dName = $my_row['Drug_name'];
        $dDescript = $my_row['Drug_descript'];
        $dtID = $my_row['DT_ID'];
        $dtName = $my_row['DT_name'];
        require("connection/connection_close.php");

        return new Drug($id,$dName,$dDescript,$dtID,$dtName);
    }

    public static function getAll(){
        $drugList=[];
        require("connection/connection_connect.php");
        $sql = "select * from Drug,DrugType WHERE Drug.Drug_type = DrugType.DT_ID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $id = $my_row['Drug_ID'];
            $dName = $my_row['Drug_name'];
            $dDescript = $my_row['Drug_descript'];
            $dtID = $my_row['DT_ID'];
            $dtName = $my_row['DT_name'];
            $drugList[] = new Drug($id,$dName,$dDescript,$dtID,$dtName);
        }
        require("connection/connection_close.php");

        return $drugList;
    }

    public static function search($key){
        $drugList=[];
        require("connection/connection_connect.php");
        $sql = "select * from Drug,DrugType where (Drug_ID like '%$key%' or Drug_name like '%$key%' or Drug_type like '%$key%') and  Drug.Drug_type = DrugType.DT_ID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['Drug_ID'];
            $dName = $my_row['Drug_name'];
            $dDescript = $my_row['Drug_descript'];
            $dtID = $my_row['DT_ID'];
            $dtName = $my_row['DT_name'];
            $drugList[] = new Drug($id,$dName,$dDescript,$dtID,$dtName);
        }
        require("connection/connection_close.php");

        return $drugList;
    }

    public static function add($drugID,$drugName,$dtID,$drugDescript){
        require("connection/connection_connect.php");
        $sql = "insert into Drug (Drug_ID,Drug_name,Drug_type,Drug_descript) values ('$drugID','$drugName','$dtID','$drugDescript')";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "add success $result rows";
    }
    
    public static function update($id,$dName,$dtID,$dDescript){
        require("connection/connection_connect.php");
        $sql = "UPDATE Drug SET Drug_name = '$dName',Drug_type = '$dtID',Drug_descript = '$dDescript' WHERE Drug_ID = '$id' ";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "update success $result rows";
    }
    
    public static function delete($id){
        require_once("connection/connection_connect.php");
        $sql = "Delete from Drug Where Drug_ID = '$id' ";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "delete success $result row";
    }
}

?>