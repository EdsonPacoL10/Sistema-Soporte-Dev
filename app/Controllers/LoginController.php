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
      
      $datosUsuario = $Usuario->obtenerUsuario($usuario, $password);
      
      if (count($datosUsuario)) {
          $datos = [
            "id" => $datosUsuario[0]['id'],
              "usuario" => $datosUsuario[0]['usuario'],
              "password" => $datosUsuario[0]['password'],
              "type" => $datosUsuario[0]['type'],
              "funcionario" => $datosUsuario[0]['funcionario'],
              "foto" => $datosUsuario[0]['foto'],
              "id_entidad" => $datosUsuario[0]['id_entidad'],
              "entidad" => $datosUsuario[0]['entidad'],
              "oficina" => $datosUsuario[0]['oficina'],
              "cargo" => $datosUsuario[0]['cargo'],
              "dependencia" => $datosUsuario[0]['dependencia']
          ];

      
          $session = session();
          $session->set($datos);
      
          if ($datosUsuario[0]['type'] === 'administrador') {
              // Si el tipo de usuario es 'invitado', redirigir a la ruta de administrador
              return redirect()->to(base_url('/administrador'))->with('mensaje', '1');
          } else {
              // Para otros tipos de usuario, redirigir a la ruta de NuevaSolicitud
              return redirect()->to(base_url('/NuevaSolicitud'))->with('mensaje', '1');
          }
      } else {
          return redirect()->to(base_url('/'))->with('mensaje', '0');
      }
        
      
      
      
   }
   public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
   
}