<?php

class Controller {

    function base(){
        include '../Views/base.php';
    }
    function addform(){
        include '../Views/addForm.php';
    }

}

$controller = new Controller;

if (isset($_GET['page']) && $_GET['page'] == 'addTask') {
    $controller->addform();
}
else{
    $controller->base();
}