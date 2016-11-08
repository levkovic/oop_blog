<form action="index.php?c=editing&id=<?=$article['id_article']?>" method="post">
  Title:<br>
  <input type="text" name="title" value="<?=$article['title']?>">
  <br>
  Content:<br>
  <textarea name="content"><?=$article['content']?></textarea>
  <br><br>
  <input type="submit" value="Submit">
  <input type="submit" value="Delete" name="delete">
</form>

