<div class="container">
	<h1>Toevoegen</h1>
	<form action="<?= URL ?>client/createSave" method="post">

	<label>Firstname: </label><input type="text" name="client_firstname" placeholder="Firstname"> <br>

	<label>Lastname: </label><input type="text" name="client_lastname" placeholder="Lastname"><br>

	<label>Phone number: </label><input type="text" name="client_phonenumber" placeholder="Phonenumber"><br>

	<label>E-Mail: </label><input type="text" name="client_email" placeholder="info@hospital.com"><br>

	<input type="submit" value="Add">
</form>

</div>