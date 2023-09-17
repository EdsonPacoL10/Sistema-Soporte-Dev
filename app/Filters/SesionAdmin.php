<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SesionAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {

       

        // Obtener el tipo de usuario desde la sesión (puedes personalizar esto según tu lógica)
        $userType = session('type');

        // Verificar si el usuario es un invitado
        if ($userType !== 'administrador') {
            // Si el tipo de usuario no es 'invitado', denegar el acceso
            return redirect()->to(base_url('/')); // Puedes redirigir a la página de inicio o a una página de acceso denegado
        }
       
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}