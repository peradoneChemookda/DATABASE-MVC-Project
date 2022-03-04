<?php 

class DrugController{
    public function index(){
        $drug_list = Drug::getAll();
        require_once('views/drug/index_drug.php');
    }

    public function newDrug(){
        $drugTypeList = DrugType::getAll();
        require_once('views/drug/newDrug.php');
    }

    public function addDrug(){
        $drugID = $_GET['drugID'];
        $drugName = $_GET['drugName'];
        $dtID = $_GET['dtID'];
        $drugDescript = $_GET['drugDescript'];
        Drug::add($drugID,$drugName,$dtID,$drugDescript);
        DrugController::index();
    }
    
    public function search(){
        $key = $_GET['key'];
        $drug_list = Drug::search($key);
        require_once('views/drug/index_drug.php');
    }
    
    public function updateForm(){
        $id = $_GET['drugID'];
        $drug=Drug::get($id);
        $drugTypeList = DrugType::getAll();
        require_once('views/drug/updateForm.php');
    }
    
    public function update(){
        $id = $_GET['drugID'];
        $dName = $_GET['dName'];
        $dtID = $_GET['dtID'];
        $dDescript = $_GET['dDescript'];
        Drug::update($id,$dName,$dtID,$dDescript);
        DrugController::index();
    }

    public function deleteConfirm(){
        $id = $_GET['drugID'];
        $drug = Drug::get($id);
        require_once('views/drug/deleteConfirm.php');
    }

    public function delete(){
        $id = $_GET['drugID'];
        Drug::delete($id);
        DrugController::index();
    }
}

?>