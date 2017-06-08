<div class="container">
	<h1>Toevoegen</h1>
	<form action="<?= URL ?>patient/createSave" method="post">

	<label>Name: </label><input type="text" name="patient_name" placeholder="Patient name">
	<br>

	<lable>Species: </lable>
		<select name="species_id">
			<option value="1">Hond</option>
			<option value="2">Kat</option>
		</select>
			<br>


	<label>Client: </label>
		<select name="client_id">
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
			<br>

	<label>Patient Status: </label><textarea type="comment" rows="5" cols="40" name="patient_status"></textarea><br>

	<input type="submit" value="Add">
</form> 

</div>