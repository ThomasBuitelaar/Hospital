<main>
	<header>
		<h1>Hospital</h1>
	</header>
	
		<ul>
			<li><a href="<?= URL ?>patient">Patiënts</a></li>
			<li><a href="<?= URL ?>client">Clients</a></li>
			<li><a href="<?= URL ?>species">Species</a></li>
		</ul>

	<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php  foreach($clients as $client) { ?>
			<tr>
				<td><?= $client['client_firstname']; ?></td>
				<td><?= $client['client_lastname']; ?></td>
				<td><?= $client['client_phonenumber']; ?></td>
				<td><?= $client['client_email']; ?></td>
				<td class="center"><a href="<?php echo URL . 'client/edit/' . $client['client_id']; ?>">edit</a></td>
				<td class="center"><a href="<?php echo URL . 'client/delete/' . $client['client_id']; ?>">delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>client/create">Create</a></p>
		<p><a href="<?= URL ?>home/index">Home</a></p>
