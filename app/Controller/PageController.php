<?php
namespace DreamWeb\GestorTareas\Controller;
use DreamWeb\GestorTareas\View\View;
use DreamWeb\GestorTareas\Model\Client as Client;
class PageController
{
	public function index()
	{
		session_start();
		if(isset($_SESSION['usuario'])){
			$logged = isset($_SESSION['usuario']);
		}
		else{
			$logged = false;
		}

		if(isset($_POST['usuario'])){
			$logged = Client::isClient($_POST['usuario']);
		}
		//Aquí iría el login		
		//header('Location:client/');
		if($logged){

			if(isset($_POST['usuario'])){
				$_SESSION['usuario'] = $_POST['usuario'];
			}
			else{
				$_SESSION['usuario'] = $_SESSION['usuario'];
			}
			header('location:client/profile');

		}

		$view = new View('templates/page');
		$view->render('login.php', ['pageTitle'=>"Login"]);
		
		die();

	}
}