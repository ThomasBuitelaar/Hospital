	<main>
	<h1>Hospital</h1>
	<ul>
		<li><a href="<?= URL ?>patient">Patiënts</a></li>
		<li><a href="<?= URL ?>client">Clients</a></li>
		<li><a href="<?= URL ?>species">Species</a></li>
	</ul>
	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Species</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php foreach($species as $species) { ?>
			<tr>
				<td><?= $species['species_id']; ?></td>
				<td><?= $species['species_description']; ?></td>
				<td class="center"><a href="<?php echo URL . 'species/edit/' . $species['species_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'species/delete/' . $species['species_id']; ?>">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>species/create">Create</a></p>
		<p><a href="<?= URL ?>home/index">Home</a></p>