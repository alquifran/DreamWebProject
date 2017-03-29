<?php
namespace DreamWeb\GestorTareas\Controller;
use DreamWeb\GestorTareas\View\View;
use DreamWeb\GestorTareas\Model\Client as Client;
class ClientController
{
	public function index(){
		$view = new View('templates/clients');
		$clients = Client::listusers();
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

	
	
}
