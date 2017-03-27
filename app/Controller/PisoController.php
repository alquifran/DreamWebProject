<?php
namespace Talentum\TiendaPisos\Controller;
use Talentum\TiendaPisos\View\View;
use Talentum\TiendaPisos\Model\Piso as Piso;
class PisoController
{
	public function index()
	{
		$view = new View('templates/piso');
		$pisos = Piso::all();
		$view->render('index.php', ['pisos' => $pisos, 'pageTitle'=>"Listado de pisos"]);
	}
	public function show($id)
	{
		$view = new View('templates/piso');
		$piso = Piso::find($id);
		$view->render('show.php', ['piso' => $piso]);
	}

	public function delete($id)
	{
		$view = new View('templates/piso');
		Piso::delete($id);
		header('Location:../');
	}

	public function add(){
		if(empty($_POST)){
			$view = new View('templates/piso');
			$view->render('add.php', []);
		}
		else{
			
			Piso::add(null, $_POST['direccion'], $_POST['precio'], $_POST['descripcion']);
			$_POST = "";
			header('Location:../');
		}
	}

	public function update($id){
		if(empty($_POST)){
			$view = new View('templates/piso');
			$piso = Piso::find($id);
			$view->render('update.php', ['piso' => $piso]);
		}
		else{
			Piso::update($id, $_POST['direccion'], $_POST['precio'], $_POST['descripcion']);
			$_POST = "";
			header('Location:../');
		}
	}
}