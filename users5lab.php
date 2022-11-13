<?php
interface ISuperUser{
    function getInfo();
}
abstract class AUser{
    abstract function showInfo();
}


class User  extends AUser{

	public $name;
	public $login;
	public $password;
    public static $countUser = 0;
	
	function __construct($name, $login, $password){
 		 		$this->name = $name;
 		$this->login = $login;
 		$this->password = $password;
        ++self::$countUser;
 }
function __destruct(){
  //echo "Пользователь <b>$this->login</b> удален <br>";
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

class SuperUser extends User implements ISuperUser{
    public static $countSUser = 0;
    public $role;
    function __construct($n,$l,$p,$r){
        parent::__construct($n,$l,$p);
            $this->role=$r;
        ++self::$countSUser;
        --self::$countUser;
    }
    function getInfo(){
        //return (array)$this; 
    }
   }


echo "Всего обычных пользователей:".User:: $countUser;
echo "<br/> Всего супер пользователей:".SuperUser::$countSUser;

?>