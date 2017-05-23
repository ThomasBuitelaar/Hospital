<?php

	function getPatient($id)
	{
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM patients WHERE patient_id = :patient_id";
		$query = $db->prepare($sql);
		$query->execute(array(
			":patient_id" => $id));

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