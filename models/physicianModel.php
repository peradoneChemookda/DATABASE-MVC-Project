<?php 

class Physician {

    public $id, $phyName;
    public function __construct($id , $phyName){
        $this->id = $id;
        $this->phyName = $phyName;
    }
    public static function getAll(){
        $physicianList = [];
        require("connection/connection_connect.php");
        $sql = "select * from physician";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['phy_Id'];
            $phyName = $my_row['phy_Fname'] . " " .$my_row['phy_Lname'];
            $physicianList[] = new Physician($id,$phyName);
        }
        require("connection/connection_close.php");
        return $physicianList;
    }

}

?>