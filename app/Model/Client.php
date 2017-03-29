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
	// public static function all() {
	// 	$list = [];
	// 	$db = Db::getInstance();
	// 	$req = $db->query('SELECT * FROM pisos');
	// 	foreach($req->fetchAll() as $piso) {
	// 		$list[] = new Piso($piso['id'],$piso['direccion'], $piso['precio'], $piso['descripcion']);
	// 	}
	// 	return $list;
	// }

	public static function isClient($name){
		$array = Client::listUsers();
		foreach($array as $client){
			if($name == $client->getName()){
				return true;
			}
		}
		return false;
	}
	// public static function find($id) {
	// 	$db = Db::getInstance();
	// 	$id = intval($id);
	// 	$req = $db->prepare('SELECT * FROM pisos WHERE id = :id');
	// 	$req->execute(array('id' => $id));
	// 	$piso = $req->fetch();
	// 	return new Piso($piso['id'],$piso['direccion'],
	// 		$piso['precio'], $piso['descripcion']);
	// }

	// public static function delete($id) {
	// 	$db = Db::getInstance();
	// 	$id = intval($id);
	// 	$req = $db->prepare('DELETE FROM pisos WHERE id = :id');
	// 	$req->execute(array('id' => $id));
	// }
	// //Añade este objeto libro a la base de datos.
	// public static function add($id, $direccion, $precio, $descripcion){
	// 	$db = Db::getInstance();
	// 	$req = $db->prepare('INSERT INTO pisos 
	// 		(id, direccion, precio, descripcion)
	// 		VALUES (:id, :direccion, :precio, :descripcion)');
	// 	$req->execute(array('id' => $id, 'direccion' => $direccion,
	// 		'precio' => $precio, 'descripcion' => $descripcion));
	// }

	// public static function update($id, $direccion, $precio, $descripcion){
	// 	$db = Db::getInstance();
	// 	$req = $db->prepare('UPDATE pisos 
	// 		SET direccion = :direccion, precio = :precio,
	// 		 descripcion = :descripcion WHERE id = :id');
	// 	$req->execute(array('id' => $id, 'direccion' => $direccion,
	// 		'precio' => $precio, 'descripcion' => $descripcion));
	// }

	// public function getId(){
	// 	return $this->id;
	// }

	// public function getDireccion(){
	// 	return $this->direccion;
	// }

	// public function setDireccion($direccion){
	// 	$this->direccion = $direccion;
	// }

	// public function getPrecio(){
	// 	return $this->precio;
	// }

	// public function setPrecio($precio){
	// 	$this->precio = $precio;
	// }

	// public function getDescripcion(){
	// 	return $this->descripcion;
	// }

	// public function setDescripcion($descripcion){
	// 	$this->descripcion = $descripcion;
	// }
}