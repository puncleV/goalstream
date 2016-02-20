<?php
	defined('_JEXEC') or die;
?>
<Table>
<thead>
	<tr>
		<td>Номер в команде</td>
		<td>Фото</td>
		<td>Имя</td>
		<td>Амплуа</td>
	</tr>
</thead>
<tbody>
<?php foreach($teamSquad as $player):?>	
	<tr>
		<td><img src=<?php echo $player['number'] ?>></td>
		<td><a href=<?php echo $player['foto_url'] ?>></td>
		<td><?php echo $player['name'] ?></td>
		<td><?php echo $player['position'] ?></td>
	</tr>
<?php endforeach ?>
</tbody>
</Table>