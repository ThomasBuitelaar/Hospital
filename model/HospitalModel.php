<?php

function getPatient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllPatients();
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patient";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editPatient()
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['species'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;

	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE patient SET name = :name, species = :species, status = :status, WHERE id = :id";
	$query = $db->perpare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		":status" -> $status,
		':id' => $id));

	$db = null;

	return true;
}

function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patient WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createPatient() 
{
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	
	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patient(name, species, status) VALUES (:name, :species, :status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status));

	$db = null;
	
	return true;
}