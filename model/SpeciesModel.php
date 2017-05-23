<?php

	function getSpecies($id)
	{
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM species WHERE species_id = :species_id";
		$query = $db->prepare($sql);
		$query->execute(array(
			":species_id" => $id));

		$db = null;

		return $query->fetch();
	}

	function getAllSpecies()
	{
		$db = openDatabaseConnection();

		$sql = "SELECT * FROM species";
		$query = $db->prepare($sql);
		$query->execute();

		$db = null;

		return $query->fetchAll();
	}