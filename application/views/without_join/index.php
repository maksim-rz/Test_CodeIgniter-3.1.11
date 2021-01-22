<h1>GetDataWithoutJoin</h1>
<?php var_dump($array_result) ; ?>

 <table class="table">
	<thead class="thead-dark">
	<tr >
		<th scope="col">request_id</th>
		<th scope="col">buyers</th>
		<th scope="col">name</th>
		<th scope="col">sum</th>
		<th scope="col" style="width:850px">requests_info</th>
		<th scope="col">time</th>

	</tr>
	</thead>
	<tbody>
	<?php
		foreach ($array_result as $key => $value): ?>
		<tr>
			<th scope="row"><?php echo $value['request_id']; ?></th>
			<td><?php echo $value['buyer_id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['sum']; ?></td>
			<td ><?php echo $value['info']; ?></td>
			<td><?php echo $value['date']; ?></td>
		</tr>
	<?php endforeach ?>


	</tbody>
 </table>
