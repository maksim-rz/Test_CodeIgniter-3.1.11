<h1>GetDataWithJoin</h1>

 <table class="table">
	<thead class="thead-dark">
	<tr align="center">
		<th scope="col">buyer_id</th>
		<th scope="col">name</th>
		<th scope="col">sum</th>
		<th scope="col" style="width:850px">requests_info</th>
		<th scope="col">time</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($requests as $value): ?>
		<tr align="center">
			<th scope="row"><?php echo $value['buyer_id']; ?></th>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['sum']; ?></td>
			<td><?php echo $value['info']; ?></td>
			<td><?php echo $value['date']; ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
 </table>
