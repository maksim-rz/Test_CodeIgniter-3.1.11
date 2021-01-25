<h1>GetDataWithoutJoin</h1>
<?php /*var_dump($requests);
*/?>

 <table class="table">
	<thead class="thead-dark">
	<tr>
		<th scope="col">request_id</th>
		<th scope="col">buyers_id</th>
		<th scope="col">name</th>
		<th scope="col">sum</th>
		<th scope="col" style="width:800px">requests_info</th>
		<th scope="col">time</th>
	</tr>
	</thead>
	<tbody>
	<?php
/*		foreach ($requests as $request): */?><!--
		<tr>
			<th scope="row"><?php /*echo $request['request_id']; */?></th>
			<td><?php /*echo $request['buyer_id']; */?></td>
			<td><?php /*echo isset($request['buyer']['name']) ? $request['buyer']['name'] : ''; */?></td>
			<td><?php /*echo $request['sum']; */?></td>
			<td><?php /*echo isset($request['request']['info']) ? $request['request']['info'] : ''; */?></td>
			<td><?php /*echo $request['date']; */?></td>
		</tr>
	--><?php /*endforeach */?>

	<?php
	foreach ($requests as $request): ?>
		<tr>
			<th scope="row"><?php echo $request['request_id']; ?></th>
			<td><?php echo $request['buyer_id']; ?></td>
			<td><?php echo isset($request['name']) ? $request['name'] : ''; ?></td>
			<td><?php echo $request['sum']; ?></td>
			<td><?php echo isset($request['info']) ? $request['info'] : ''; ?></td>
			<td><?php echo $request['date']; ?></td>
		</tr>
	<?php endforeach ?>
	</tbody>
 </table>

<table class="table">
	<thead class="thead-dark">
	<tr>
		<th scope="col">request_id</th>
		<th scope="col">buyers_id</th>
		<th scope="col">name</th>
		<th scope="col">sum</th>
		<th scope="col" style="width:800px">requests_info</th>
		<th scope="col">time</th>
	</tr>
	</thead>
	<tbody>
	<?php
			foreach ($requests2 as $request): ?>
		<tr>
			<th scope="row"><?php echo $request['request_id']; ?></th>
			<td><?php echo $request['buyer_id']; ?></td>
			<td><?php echo isset($request['buyer']['name']) ? $request['buyer']['name'] : ''; ?></td>
			<td><?php echo $request['sum']; ?></td>
			<td><?php echo isset($request['request']['info']) ? $request['request']['info'] : ''; ?></td>
			<td><?php echo $request['date']; ?></td>
		</tr>
	<?php endforeach ?>

	<?php
/*	foreach ($requests as $request): */?><!--
		<tr>
			<th scope="row"><?php /*echo $request['request_id']; */?></th>
			<td><?php /*echo $request['buyer_id']; */?></td>
			<td><?php /*echo isset($request['name']) ? $request['name'] : ''; */?></td>
			<td><?php /*echo $request['sum']; */?></td>
			<td><?php /*echo isset($request['info']) ? $request['info'] : ''; */?></td>
			<td><?php /*echo $request['date']; */?></td>
		</tr>
	--><?php /*endforeach */?>
	</tbody>
</table>
