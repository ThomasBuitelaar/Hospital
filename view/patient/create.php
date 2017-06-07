<div class="container">
	<h1>Toevoegen</h1>
	<form action="<?= URL ?>patient/createSave" method="post">

	<label>Name: </label><input type="text" name="patient_name" placeholder="Patient name"> <br>

	<lable>Species

	<label>Phone number: </label><input type="text" name="client_phonenumber" placeholder="Phonenumber"><br>

	<label>E-Mail: </label><input type="text" name="client_email" placeholder="info@hospital.com"><br>

	<input type="submit" value="Add">
</form> 

</div>