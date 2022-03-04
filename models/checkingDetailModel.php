<?php

class CheckingDetail{
    public $id;
    public $date;
    public $comment;
    public $cdDrugID;
    public $cdDose;
    public $cdPhyID;
    public $cdAssID;
    public $cdDrugName;
    public $cdPhyName;

    public function __construct($id,$date,$comment,$cdDrugID,$cdDose,$cdPhyID,$cdAssID,$cdDrugName,$cdPhyName)
    {
        $this->id = $id;
        $this->date = $date;
        $this->comment = $comment;
        $this->cdDrugID = $cdDrugID;
        $this->cdDose = $cdDose;
        $this->cdPhyID = $cdPhyID;
        $this->cdAssID = $cdAssID;
        $this->cdDrugName = $cdDrugName;
        $this->cdPhyName = $cdPhyName;
    }

    public static function get($id){
        require("connection/connection_connect.php");
        $sql = "SELECT * FROM CheckingDetail, physician , Assessment , Drug WHERE CD_ID = $id AND CheckingDetail.CD_drug = Drug.Drug_ID AND CheckingDetail.CD_phy = physician.phy_Id AND CheckingDetail.CD_Ass = Assessment.Ass_ID";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row['CD_ID'];
            $date = $my_row['CD_date'];
            $comment = $my_row['CD_comment'];
            $cdDrugID = $my_row['CD_drug'];
            $cdDose = $my_row['CD_dose'];
            $cdPhyID = $my_row['CD_phy'];
            $cdAssID = $my_row['CD_Ass'];
            $cdDrugName = $my_row['Drug_name'];
            $cdPhyName = $my_row['phy_Fname'] . " " . $my_row['phy_Lname'];
        require("connection/connection_close.php");

        return new CheckingDetail($id,$date,$comment,$cdDrugID,$cdDose,$cdPhyID,$cdAssID,$cdDrugName,$cdPhyName);
    }

    public static function getAll(){
        $checkingDetailList=[];
        require("connection/connection_connect.php");
        $sql = "SELECT * FROM CheckingDetail, physician , Assessment , Drug WHERE CheckingDetail.CD_drug = Drug.Drug_ID AND CheckingDetail.CD_phy = physician.phy_Id AND CheckingDetail.CD_Ass = Assessment.Ass_ID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc()){
            $id = $my_row['CD_ID'];
            $date = $my_row['CD_date'];
            $comment = $my_row['CD_comment'];
            $cdDrugID = $my_row['CD_drug'];
            $cdDose = $my_row['CD_dose'];
            $cdPhyID = $my_row['CD_phy'];
            $cdAssID = $my_row['CD_Ass'];
            $cdDrugName = $my_row['Drug_name'];
            $cdPhyName = $my_row['phy_Fname'] . " " . $my_row['phy_Lname'];
            $checkingDetailList[] = new CheckingDetail($id,$date,$comment,$cdDrugID,$cdDose,$cdPhyID,$cdAssID,$cdDrugName,$cdPhyName);
        }
        require("connection/connection_close.php");

        return $checkingDetailList;
    }

    public static function search($key){
        $checkingDetailList=[];
        require("connection/connection_connect.php");
        $sql = "SELECT * FROM CheckingDetail, physician , Assessment , Drug where ((CD_ID like '%$key%') OR (CD_date like '%$key%') OR (CD_comment like '%$key%') OR (Drug_name like '%$key%') OR (phy_Fname like '%$key%') OR (phy_Lname like '%$key%') OR (CD_Ass like '%$key%')) AND CheckingDetail.CD_drug = Drug.Drug_ID AND CheckingDetail.CD_phy = physician.phy_Id AND CheckingDetail.CD_Ass = Assessment.Ass_ID";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc()){
            $id = $my_row['CD_ID'];
            $date = $my_row['CD_date'];
            $comment = $my_row['CD_comment'];
            $cdDrugID = $my_row['CD_drug'];
            $cdDose = $my_row['CD_dose'];
            $cdPhyID = $my_row['CD_phy'];
            $cdAssID = $my_row['CD_Ass'];
            $cdDrugName = $my_row['Drug_name'];
            $cdPhyName = $my_row['phy_Fname'] . " " . $my_row['phy_Lname'];
            $checkingDetailList[] = new CheckingDetail($id,$date,$comment,$cdDrugID,$cdDose,$cdPhyID,$cdAssID,$cdDrugName,$cdPhyName);
        }
        require("connection/connection_close.php");

        return $checkingDetailList;
    }

    public static function add($checkingDetailID,$date,$comment,$drug,$dose,$physician,$assessment){
        require("connection/connection_connect.php");
        $sql = "insert into CheckingDetail (CD_ID,CD_date,CD_comment,CD_drug,CD_dose,CD_phy,CD_Ass) values ('$checkingDetailID','$date','$comment','$drug','$dose','$physician','$assessment')";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "add success $result rows";
    }
    
    public static function update($checkingDetailID,$date,$comment,$drug,$dose,$physician,$assessment){
        require("connection/connection_connect.php");
        $sql = "UPDATE CheckingDetail SET CD_date = '$date',CD_comment = '$comment' , CD_drug = '$drug' , CD_dose = '$dose' , CD_phy = '$physician' , CD_Ass = '$assessment' WHERE CD_ID = '$checkingDetailID' ";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "update success $result rows";
    }
    
    public static function delete($id){
        require_once("connection/connection_connect.php");
        $sql = "Delete from CheckingDetail Where CD_ID = '$id' ";
        $result = $conn->query($sql);
        require("connection/connection_close.php");
        return "delete success $result row";
    }
}

?>