<h1>Áreas</h1>

<table>
    <tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Keywords</th>
	</tr>

	<?php foreach ($areas as $area): ?>
	<tr>
		<td><?php echo $area['Area']['id']; ?></td>
		<td><?php echo $this->Html->link($area['Area']['nome'],
			array('controller' => 'areas',
				'action' => 'view', $area['Area']['id'])); ?>
		</td>
		<td><?php echo $post['Area']['keywords']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>