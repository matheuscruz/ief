<?php

class AreasController extends AppController {
	var $helpers = array('Html', 'Form');
	var $name = 'Areas';
	
	function index() {
		$this->set('areas',	$this->Area->find('all'));
    }

    function view($id) {
		$this->Area->id = $id;
		$this->set('area', $this->Area->read());
    }
}

?>