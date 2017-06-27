<?php

function getClient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":client_id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editClient()
{
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$client_phonenumber = isset($_POST['client_phonenumber']) ? $_POST['client_phonenumber'] : null;
	$client_email = isset($_POST['client_email']) ? $_POST['client_email'] : null;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;

	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0 || strlen($client_phonenumber) == 0 || strlen($client_email) == 0) {
		return false;
	}

	$db = openDatabaseConnection();

		$sql = "UPDATE clients SET 		
								client_firstname = :client_firstname,
								client_lastname = :client_lastname,
								client_phonenumber = :client_phonenumber,
								client_email = :client_email 
								WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname' => $client_firstname,
		':client_lastname' => $client_lastname,
		':client_phonenumber' => $client_phonenumber,
		':client_email' => $client_email,
		':client_id' => $client_id));

	$db = null;

	return true;
}

function deleteClient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :client_id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_id' => $id));

	$db = null;
	
	return true;
}

function createClient() 
{
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$client_phonenumber = isset($_POST['client_phonenumber']) ? $_POST['client_phonenumber'] : null;
	$client_email = isset($_POST['client_email']) ? $_POST['client_email'] : null;
	
	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0 || strlen($client_phonenumber) == 0 || strlen($client_email) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname, client_phonenumber, client_email) VALUES (:client_firstname, :client_lastname, :client_phonenumber, :client_email)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname' => $client_firstname,
		':client_lastname' => $client_lastname,
		':client_phonenumber' => $client_phonenumber,
		':client_email' => $client_email));

	$db = null;
	
	return true;
}