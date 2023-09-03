<?php

namespace App\Controllers;
use App\Models\CrudModel;
class AdminController extends BaseController
{

public function index(){
	
   // Cargar cada vista individualmente
	return view('Administrador/Administrador_view');
}
public function lista(){
    $Crud = new CrudModel();
		$datos = $Crud->listarNombres();
		$mensaje = session('mensaje');

		$datos = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('Administrador/ListaSolicitudes',$datos);
	
 }
}