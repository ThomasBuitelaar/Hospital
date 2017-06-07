<?php 

	require(ROOT . "model/SpeciesModel.php");

	function index(){
		render("species/index", array(
			"species" => getAllSpecies()
			));
	}

	function create()
	{
		render("species/create");
	}


	function createSave()
	{
		if(!createSpecies()) {
			header("Location:" . URL . "error/index");
			exit();
		}
		header("Location:" . URL . "species/index");
	}
