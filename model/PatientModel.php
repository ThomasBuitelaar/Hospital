<?php

	function getPatient($id)
	{
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM patients WHERE patient_status = :patient_status";
		$query = $db->prepare($sql);
		$query->execute(array(
			":patient_status" => $id));

		$db = null;

		return $query->fetch();
	}

	function getAllPatients()
	{
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM patients";
		$query = $db->prepare($sql);
		$query->execute();

		$db = null;

		return $query->fetchAll();
	}

	function createPatient() 
{
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	
	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($patient_status) == 0 || strlen($patient_status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, patient_status, patient_status) VALUES (:patient_name, :species_id, :patient_status, :patient_status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':patient_status' => $patient_status,
		':patient_status' => $patient_status));

	$db = null;
	
	return true;
}

function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_status = :patient_status ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_status' => $id));

	$db = null;
	
	return true;
}

function editPatient()
{
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;

	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, species_id = :species_id, client_id = :client_id WHERE id = :id";
	$query = $db->perpare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_status' => $patient_status));

	$db = null;

	return true;
}