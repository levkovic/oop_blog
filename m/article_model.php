<?php
class ArticleModel{
	public static function get_articles(){
	    $sth = $GLOBALS["dbh"]->prepare('SELECT * FROM articles');
	    $sth->execute();

	    $articles = array();
	    while($result = $sth->fetch(PDO::FETCH_ASSOC)){
	        $articles[] = $result;
	    }
	    return $articles;
	}

	public static function get_article($id){
		$stmt = $GLOBALS["dbh"]->prepare('SELECT * FROM articles WHERE id_article = :id');
		$stmt->bindParam(":id", $id, PDO::PARAM_INT ); 
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public static function articles_new($title, $content){
		if(!empty($title) && !empty($content)){
		$stmt = $GLOBALS["dbh"]->prepare('INSERT INTO articles (title, content) 
										  VALUES (:title, :content)');
		$stmt->bindParam(":title", $title, PDO::PARAM_STR ); 
		$stmt->bindParam(":content", $content, PDO::PARAM_STR ); 
		if(!$stmt->execute())
		    die();
		return true;
		}
		else
			return false;
	}

	public static function article_update($title, $content, $id){
		if(!empty($title) && !empty($content)){
		$stmt = $GLOBALS["dbh"]->prepare("UPDATE articles SET title = :title, content = :content WHERE id_article = '$id'");
		$stmt->bindParam(":title", $title, PDO::PARAM_STR ); 
		$stmt->bindParam(":content", $content, PDO::PARAM_STR );
	    if(!$stmt->execute())
	        die();
		return true;
		}
		else
			return false;
	}

	public static function delete_article($id){
	    $stmt = $GLOBALS["dbh"]->prepare('DELETE FROM articles WHERE id_article = :id');
	    $stmt->bindParam(":id", $id, PDO::PARAM_INT );
	    if(!$stmt->execute())
	        die();
	}
}

