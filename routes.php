<?php

$controllers = array('pages'=>['home','error','about'],
'drug'=>['index','newDrug','addDrug','search','updateForm','update','deleteConfirm','delete'],
'checkingDetail'=>['index','newCD','addCD','search','updateForm','update','deleteConfirm','delete']);

function call($controller, $action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "pages": $controller = new PagesController(); 
                     break;
        case "drug": require_once("models/drugModel.php");
                     require_once("models/drugTypeModel.php");
                     $controller = new DrugController();
                     break;
        case "checkingDetail":  require_once("models/checkingDetailModel.php");
                                require_once("models/drugModel.php");
                                require_once("models/physicianModel.php");
                                require_once("models/assessmentModel.php");
                     $controller = new CheckingDetailController();
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    } else {
        call('pages','error');
    }
} else {
    call('pages','error');
}

?>