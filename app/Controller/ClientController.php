<?php
namespace DreamWeb\GestorTareas\Controller;
use DreamWeb\GestorTareas\View\View;
use DreamWeb\GestorTareas\Model\Client as Client;
class ClientController
{
	public function index(){
		$view = new View('templates/clients');
		$clients = Client::listUsers();
		$view->render('listausers.php', ['clients' => $clients, 'pageTitle'=>"Listado de clientes"]);
	}

	public function profile(){
		session_start();

		if(isset($_POST['cerrar'])){
			session_destroy();
			header('location:..');
			die();
		}

		if(!isset($_SESSION['usuario'])){
			header('location:..');
			die();
		}

		$view = new View('templates/clients');
		$view->render('profile.php', ['pageTitle'=>"Perfil"]);
	}

	// public function index()
	// {

	// 	$view = new View('templates/piso');
	// 	$pisos = Piso::all();
	// 	$view->render('index.php', ['pisos' => $pisos, 'pageTitle'=>"Listado de pisos"]);
	// }

	// public function show($id)
	// {
	// 	$view = new View('templates/piso');
	// 	$piso = Piso::find($id);
	// 	$view->render('show.php', ['piso' => $piso]);
	// }

	// public function delete($id)
	// {
	// 	$view = new View('templates/piso');
	// 	Piso::delete($id);
	// 	header('Location:../');
	// }

	// public function add(){
	// 	if(empty($_POST)){
	// 		$view = new View('templates/piso');
	// 		$view->render('add.php', []);
	// 	}
	// 	else{
			
	// 		Piso::add(null, $_POST['direccion'], $_POST['precio'], $_POST['descripcion']);
	// 		$_POST = "";
	// 		header('Location:../');
	// 	}
	// }

	// public function update($id){
	// 	if(empty($_POST)){
	// 		$view = new View('templates/piso');
	// 		$piso = Piso::find($id);
	// 		$view->render('update.php', ['piso' => $piso]);
	// 	}
	// 	else{
	// 		Piso::update($id, $_POST['direccion'], $_POST['precio'], $_POST['descripcion']);
	// 		$_POST = "";
	// 		header('Location:../');
	// 	}
	// }
	
}