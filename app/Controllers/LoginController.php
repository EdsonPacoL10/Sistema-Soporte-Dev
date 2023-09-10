<?php

namespace App\Controllers;

use App\Models\LoginModel;


class LoginController extends BaseController
{
   public function index()
   {
      $session = session();
      $session->remove('usuario');
      $session->remove('password');
      $session->remove('type');
      $mensaje = session('mensaje');
      return view('login/login', ["mensaje" => $mensaje]);
   }

   public function inicio()
   {
      return view('inicio');
   }

   public function login()
   {
      $usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
      
		$Usuario = new LoginModel();

		$datosUsuario = $Usuario->obtenerUsuario($usuario,$password);
      print_r($datosUsuario);
     
      if (count($datosUsuario)) {

			$datos = [
            "usuario" => $datosUsuario[0]['usuario'],
            "password" => $datosUsuario[0]['password'],
            "type" => $datosUsuario[0]['type']
         ];

			$session = session();
			$session->set($datos);

			return redirect()->to(base_url('/NuevaSolicitud'))->with('mensaje','1');
		} else {
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}
   }
   public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
   
}