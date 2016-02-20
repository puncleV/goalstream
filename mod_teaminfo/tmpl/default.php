<?php
	defined('_JEXEC') or die;
?>
<div>
	<div>
	<img src=<?php echo $teamInfo['logo'] ?>>
	</div>
	<div>
	<p>Клуб: <a href=<?php echo "goalstream.com/" . $teamInfo['href'] ?>><?php echo $teamInfo['title'] ?></a></p>
	<p>Рейтинг: <?php echo $teamInfo['rate'] ?></p>
	<p>Город: <?php echo $teamInfo['city'] ?></p>
	</div>
</div>