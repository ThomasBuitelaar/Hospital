<?php

	require(ROOT . "model/PatientModel.php");

		$species_id = array("","Hond", "Kat");

	function index(){
		$species_id = array("","Hond", "Kat");
		render("patient/index", array(
			"patients" => getAllPatients()
			));
	}

	function create()
	{
		render("patient/create");
	}


	function createSave()
	{
		if(!createPatient()) {
			header("Location:" . URL . "error/index");
			exit();
		}
		header("Location:" . URL . "patient/index");
	}
