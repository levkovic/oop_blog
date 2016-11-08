<form action="index.php?c=new" method="post">
  Title:<br>
  <input type="text" name="title" value="<?=$article['title']?>">
  <br>
  Content:<br>
  <textarea name="content"><?=$article['content']?></textarea>
  <br><br>
  <input type="submit" value="Submit">
</form>
