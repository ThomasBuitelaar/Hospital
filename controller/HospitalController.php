<?php

require(ROOT . "model/HospitalModel.php");

function index(){
	render("hospital/index", array(
		"clients" => getAllClients()
		));
}


function create()
{
	render("hospital/create");
}


function createSave()
{
	if(!createclient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "hospital/index");
}


function edit($id)
{
	render("hospital/edit", array(
		"hospital" => getAllClients()
		));
}


function editSave()
{
	if (!editclient()) {
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