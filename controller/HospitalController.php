<?php

require(ROOT . "model/HospitalModel.php");

function index(){
	render("hospital/index", array(
		"hospitals" => getAllPatients()
		));
}


function create()
{
	render("hospital/create");
}


function createSave()
{
	if(!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "hospital/index");
}


function edit($id)
{
	render("hospital/edit", array(
		"hospital" => getAllPatients()
		));
}


function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "hospital/index");
}


function delete($id)
{
	if (!deleteBirthda($id)) {
		header("Location:" . URL . "hospital/index");
		exit();
	}
	header("Location:" . URL . "hospital/index");
}