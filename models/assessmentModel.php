<?php 

class Assessment {

    public $id;
    public function __construct($id){
        $this->id = $id;
    }
    public static function getAll(){
        $assessmentList = [];
        require("connection/connection_connect.php");
        $sql = "select * from Assessment";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['Ass_ID'];
            $assessmentList[] = new Assessment($id);
        }
        require("connection/connection_close.php");
        return $assessmentList;
    }

}

?>