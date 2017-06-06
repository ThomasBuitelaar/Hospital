<main>
	<h1>Hospital</h1>
	<ul>
		<li><a href="<?= URL ?>patient">Patiënts</a></li>
		<li><a href="<?= URL ?>client">Clients</a></li>
		<li><a href="<?= URL ?>species">Species</a></li>
	</ul>

	<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($patients as $patient) { ?>
			<tr>
				<td><?= $patient['patient_name']; ?></td>
				<td><?= $patient['species_id']; ?></td>
				<td><?= $patient['patient_status']; ?></td>
				<td><?= $patient['client_id']; ?></td>
				<td class="center"><a href="#">edit</a></td>
				<td class="center"><a href="#">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="#">Create</a></p>
		<p><a href="index.html">Home</a></p>