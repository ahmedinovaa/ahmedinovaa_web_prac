<?php
abstract class UserAbstract {
	abstract function showInfo();

}
 interface ISuperUser {
 	function  getInfo();

 }

class User extends UserAbstract {

	public $name;
	public $login;
	public $password;
	
	function __construct($name, $login, $password){
 		$this->name = $name;
 		$this->login = $login;
 		$this->password = $password;
 		   
 }
function __destruct(){
  echo "Пользователь <b>$this->login</b> удален <br>";
 } 

function Showinfo() {
  echo "Имя:$this->name<br>";
  echo "<b>Логин:</b>$this->login <b>Пароль:</b>$this->password<br><br>";
		
	}

}

class SuperUser extends User implements ISuperUser {
	public $role;
	function __construct($name, $login, $password, $role) {
		parent::__construct($name, $login, $password);
		$this->role = $role;

	}
	function Showinfo() {
		parent::Showinfo();
		echo "Role: $this->role ";
		
	}
	function getInfo() {
		$arr = array();
		foreach ($this as $key => $value) {
			$arr[$key] = $value;
		}
		return $arr;
	}
}

$superUser = new SuperUser("Aruzhan","ahmedinovaaa","123456789","superuser");
 print_r ($superUser->getInfo());

?>