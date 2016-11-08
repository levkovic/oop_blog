	<?php foreach ($articles as $article): ?>
		<li>
			<a href="index.php?c=article&id=<?=$article['id_article']?>" target="_blank">
				<?=$article['title']?>
			</a>

			<p><?=$article['content']?></p>
			<hr/>
		</li>
	<?php endforeach ?>
