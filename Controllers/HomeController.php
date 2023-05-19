<?php
namespace Controllers;

use Core, Models;


class HomeController extends Core\Controller {
	public function __construct() {

    }

	public function index() {   
        unset($_SESSION['partic']);
        $this->loadView('home');
    }

    ################################################################################
	public function sistsort() {
        $senha = new Models\Home();
        if(!empty($_POST['partic'])){
            $_SESSION['partic']  = $_POST['partic'];
            $this->loadView('numsorte'); 
        }
        else{
            $this->loadView('sistsort'); 
        }
    }
    ################################################################################

    ################################################################################
	public function sorteio() {
            $senha = new Models\Home();
            $numsort = $senha->sortNumeros();
            echo $numsort;
    }
    ################################################################################
}