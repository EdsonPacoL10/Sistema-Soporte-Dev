<?php

namespace App\Controllers;
use App\Models\CrudModel;
class LoginController extends BaseController
{

public function login(){
	
   // Cargar cada vista individualmente
	return view('login/login');
}
}