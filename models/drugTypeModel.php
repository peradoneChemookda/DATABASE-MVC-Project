<?php 

class DrugType {

    public $id, $dtName;
    public function __construct($id , $dtName){
        $this->id = $id;
        $this->dtName = $dtName;
    }
    public static function getAll(){
        $drugTypeList = [];
        require("connection/connection_connect.php");
        $sql = "select * from DrugType";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $dtID = $my_row['DT_ID'];
            $dtName = $my_row['DT_name'];
            $drugTypeList[] = new DrugType($dtID,$dtName);
        }
        require("connection/connection_close.php");
        return $drugTypeList;
    }

}

?>