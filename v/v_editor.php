<li>
<a href="index.php?c=new">New article</a>
</li>
<?php foreach ($articles as $article): ?>
	<li>
		<a href="index.php?c=editing&id=<?=$article['id_article']?>">
			<?=$article['title']?>
		</a>
		<p><?=$article['content']?></p>
	</li>
<?php endforeach ?>

