<?php 
class UserModel{
	public static function user_new($email, $password){
		if(!empty($email) && !empty($password)){
		$stmt = $GLOBALS["dbh"]->prepare('INSERT INTO users (email, password) 
										  VALUES (:email, :password)');
		$stmt->bindParam(":email", $email, PDO::PARAM_STR ); 
		$stmt->bindParam(":password", md5($password), PDO::PARAM_STR ); 
		if(!$stmt->execute())
		    die();
		return true;
		}
		else
			return false;
	}

	public static function user_login($email, $password){
		if(!empty($email) && !empty($password)){
		$stmt = $GLOBALS["dbh"]->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
		$stmt->bindParam(":email", $email, PDO::PARAM_STR ); 
		$hash_password = md5($password);
		$stmt->bindParam(":password", $hash_password, PDO::PARAM_STR ); 
		if(!$stmt->execute())
		    die();
		return true;
		}
		else
			return false;
	}
}