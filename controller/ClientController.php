<?php

require(ROOT . "model/clientModel.php");

function index(){
	render("client/index", array(
		"clients" => getAllClients()
		));
}


function create()
{
	render("client/create");
}


function createSave()
{
	if(!createclient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}


function edit($id)
{
	render("client/edit", array(
		"client" => getAllClients()
		));
}


function editSave()
{
	if (!editclient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}


function delete($id)
{
	if (!deleteBirthda($id)) {
		header("Location:" . URL . "client/index");
		exit();
	}
	header("Location:" . URL . "client/index");
}