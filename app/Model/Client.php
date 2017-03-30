<?php
namespace DreamWeb\GestorTareas\Model;
use DreamWeb\Bootstrap\Database as Db;
use DreamWeb\GestorTareas\Model\Usuario as Usuario;
use PDO;

class Client extends Usuario
{
	protected $telefon;
    protected $packType;
    protected $time;

	public function __construct($name,$email,$password ="",$telefon = "",$packType = "",$time = 0){
    $this->telefon=$telefon;
    $this->packType=$packType;
    $this->time=$time;
    parent::__construct($name,$email,$password);


    }

	public static function listusers(){
		$list = [];
		$db = Db::getInstance();
		$req = $db->query('SELECT * FROM user');
		foreach($req->fetchAll() as $client){
			$list[] = new Client($client['nameUser'], $client['emailUser']);
		}

		return $list;

	}
	public static function isClient($name){
		$array = Client::listUsers();
		foreach($array as $client){
			if($name == $client->getName()){
				return true;
			}
		}
		return false;
	}
    
}	
