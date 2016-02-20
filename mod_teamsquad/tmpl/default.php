<?php
	defined('_JEXEC') or die;
?>
<Table>
<thead>
	<tr>
		<td>Номер</td>
		<td>Фото</td>
		<td>Имя</td>
		<td>Амплуа</td>
	</tr>
</thead>
<tbody>
<?php 
foreach($teamSquad['persons'] as $player):?>
	<tr>
		<td><?php echo $player['number'] ?></td>
		<td><img src=<?php echo $player['foto_url'] ?> style="width:50px; height:50px"></td>
		<td><?php echo $player['name'] ?></td>
		<td><?php echo $player['position'] ?></td>
	</tr>
<?php endforeach ?>
</tbody>
</Table>