<?php

	require(ROOT . "model/PatientModel.php");

		$species_id = array("","Hond", "Kat");

	function index(){
		$species_id = array("","Hond", "Kat");
		render("patient/index", array(
			"patients" => getAllPatients()
			));
	}
