<h1>GetDataWithoutJoin</h1>

 <table class="table">
	<thead class="thead-dark">
	<tr >
		<th scope="col">buyer_id</th>
		<th scope="col">name</th>
		<th scope="col">sum</th>
		<th scope="col" style="width:850px">requests_info</th>
		<th scope="col">time</th>

	</tr>
	</thead>
	<tbody>
	<?php
	if ($requests->num_rows() > 0)
	{
		foreach ($requests->result() as $row): ?>
		<tr>
			<th scope="row"><?php echo $row->buyer_id; ?></th>
			<td><?php echo $row->name; ?></td>
			<td><?php echo $row->sum; ?></td>
			<td ><?php echo $row->info; ?></td>
			<td><?php echo $row->date; ?></td>
		</tr>
	<?php endforeach ?>
	<?php
	}
	else
	{
	?>
		<tr>
		  <td colspan="3">No Data Found</td>
	    </tr>
	<?php
	}
	?>

	</tbody>
 </table>
