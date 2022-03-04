<?php 

class CheckingDetailController{
    public function index(){
        $checkingDetail_list = CheckingDetail::getAll();
        require_once('views/checkingDetail/index_checkingDetail.php');
    }

    public function newCD(){
        $drug_List = Drug::getAll();
        $physician_List = Physician::getAll();
        $assessment_List = Assessment::getAll();
        require_once('views/checkingDetail/newCheckingDetail.php');
    }

    public function addCD(){
        $checkingDetailID = $_GET['checkingDetailID'];
        $date = $_GET['date'];
        $comment = $_GET['comment'];
        $drug = $_GET['drug'];
        $dose = $_GET['dose'];
        $physician = $_GET['physician'];
        $assessment = $_GET['assessment'];
        CheckingDetail::add($checkingDetailID,$date,$comment,$drug,$dose,$physician,$assessment);
        CheckingDetailController::index();
    }
    
    public function search(){
        $key = $_GET['key'];
        $checkingDetail_list = CheckingDetail::search($key);
        require_once('views/checkingDetail/index_checkingDetail.php');
    }
    
    public function updateForm(){
        $id = $_GET['checkingDetailID'];
        $checkingDetail=CheckingDetail::get($id);
        $drug_List = Drug::getAll();
        $physician_List = Physician::getAll();
        $assessment_List = Assessment::getAll();
        require_once('views/checkingDetail/updateForm.php');
    }
    
    public function update(){
        $checkingDetailID = $_GET['checkingDetailID'];
        $date = $_GET['date'];
        $comment = $_GET['comment'];
        $drug = $_GET['drug'];
        $dose = $_GET['dose'];
        $physician = $_GET['physician'];
        $assessment = $_GET['assessment'];
        CheckingDetail::update($checkingDetailID,$date,$comment,$drug,$dose,$physician,$assessment);
        CheckingDetailController::index();
    }

    public function deleteConfirm(){
        $id = $_GET['checkingDetailID'];
        $checkingDetail = CheckingDetail::get($id);
        require_once('views/checkingDetail/deleteForm.php');
    }

    public function delete(){
        $id = $_GET['checkingDetailID'];
        CheckingDetail::delete($id);
        CheckingDetailController::index();
    }
}

?>