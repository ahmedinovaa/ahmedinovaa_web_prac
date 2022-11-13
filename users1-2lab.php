<?php


class User {

	public $name;
	public $login;
	public $password;
	
	
//2EX  
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


$user1 = new User("Aruzhan","ahmedinovaaa","123456789");
$user1->Showinfo();

$user2 = new User("Nahzura","aaavonidema","1987654321");
$user2->Showinfo();

$user3 = new User("Sas","sos","888");
$user3->Showinfo();


//1EX
//$user1 = new User();
//$user1->name = "Aruzhan";
//$user1->login = "ahmedinovaaa";
//$user1->password = "123456789";
//$user1->Showinfo();

//$user2 = new User();
//$user2->name = "Nahzura";
//$user2->login = "aaavonidema";
//$user2->password = "1987654321";
//$user2->Showinfo();

//$user3 = new User();
//$user3->name = "Sas";
//$user3->login = "sos";
//$user3->password = "888";
//$user3->Showinfo();
//?>

