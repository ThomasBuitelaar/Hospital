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
				<td class="center"><a href="<?php echo URL . 'patient/edit/' . $patient['patient_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'patient/delete/' . $patient['patient_id']; ?>">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>patient/create">Create</a></p>
		<p><a href="index.html">Home</a></p>