<?php

namespace Core;

use Models;

class Controller extends Helpers\Helper{

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		include 'views/inc/menu.php';
		require 'views/'.$viewName.'.php'; 
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
	
}

?>