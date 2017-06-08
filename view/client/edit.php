<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>client/editSave" method="post">

	<label>Firstname: </label><input type="text" name="client_firstname" value="<?= $client['client_firstname']; ?>"><br>

	<label>Lastname: </label><input type="text" name="client_lastname" value="<?= $client['client_lastname']; ?>"><br>

	<label>Phone number: </label><input type="text" name="client_phonenumber" placeholder="Phonenumber"><br>

	<label>E-Mail: </label><input type="text" name="client_email" placeholder="info@hospital.com"><br>

<input type="hidden" name="client_id">
	<input type="submit" value="Add">
</form>

</div>