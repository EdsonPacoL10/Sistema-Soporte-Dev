<?php

namespace Config;

use App\Models\CrudModel;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('login');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


//ruta de login inicio 
$routes->get('/', 'LoginController::index');
$routes->get('/index', 'Home::index');
$routes->post('/datoLogin', 'LoginController::login');
$routes->get('/salir', 'LoginController::salir');
//rutas administrador
$routes->get('/administrador', 'AdminController::index');
$routes->get('/listaSolicitud', 'AdminController::lista');
//ruta para poder firtar los datos para la consulta 

//listado de solicitud filtrada desde el dashborar a la tabla envio por pos
$routes->get('/listaajaxItemsEntidad', 'AdminController::getData');
$routes->get('/listadoNotificaciones', 'AdminController::getDataNotificaciones');
//esta ruta es para el administardor
$routes->get('/NuevaSolicitudAdmin', 'SolicitudesController::index');










//ajax creado para la data
$routes->get('/listaajax', 'Home::getData');


// Sector de usuarios donde realizan la solicitud de soporte 
$routes->get('/NuevaSolicitud', 'SolicitudesController::index');
$routes->get('/SolicitudesRealizadas', 'SolicitudesController::getData');
$routes->post('/crear', 'SolicitudesController::crear');
//sector ayuda al usuario 
$routes->get('/AyudaUsuario', 'SolicitudesController::Ayuda');
$routes->get('/AyudaDocumentacion', 'SolicitudesController::AyudaDocumentacion');

$routes->get('/obtenerNombre/(:any)', 'Home::obtenerNombre/$1');
$routes->get('/eliminar/(:any)', 'Home::eliminar/$1');
$routes->get('/crear1', 'Home::crear');
$routes->post('/crear1', 'Home::crear');
$routes->post('/actualizar', 'Home::actualizar');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
