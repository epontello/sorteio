<?php
namespace Controllers;

use Core;

class AboutController extends Core\Controller {
    public function __construct() {
    }

    ####### LISTA OS ATENDIMENTOS CADASTRADOS ############# 
	public function index() {
        $this->loadView('inc/about'); 
    }

}