<?php 

class HomeController implements InterfaceController {
    public function render(){
        include './view/home.php';
    }
}