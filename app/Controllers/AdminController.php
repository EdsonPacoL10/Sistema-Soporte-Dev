<?php

namespace App\Controllers;

use App\Models\CrudModel;
use App\Models\DatosModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\IncomingRequest;

class AdminController extends BaseController
{

	public function index()
	{

		$Crud1 = new DatosModel();
		$Crud = new CrudModel();


		$datos = $Crud->listarNombres();
		$datos1 = $Crud1->Entidades();
		$datos = [
			"datos" => $datos,
			"datos1" => $datos1,
			"notificaciones" => ""
		];

		return view('Administrador/Administrador_view', $datos);
	}
	public function drives()
	{

		$Crud1 = new DatosModel();
		$Crud = new CrudModel();


		$datos = $Crud->listarNombres();
		$datos1 = $Crud1->Entidades();
		$datos = [
			"datos" => $datos,
			"datos1" => $datos1,
			"notificaciones" => ""
		];

		return view('Administrador/DrivesSoporte', $datos);
	}


	/***************************************************************************************************************
	 * proceso listar los archivos de las carpetas seleccionas 
	 ***************************************************************************************************************/

	public function listaArchivos()
	{
		$dato_a_filtrar = $this->request->getPost('nombre');
		$Crud1 = new DatosModel();
		$Crud = new CrudModel();
		$ListadoFiltrado = $Crud1->ArmadoCarpeta($dato_a_filtrar);

		$datos = $Crud->listarNombres();
		$datos1 = $Crud1->Entidades();
		$datos = [
			"datos" => $datos,
			"datos1" => $datos1,
			"ListadoFiltrado" => $ListadoFiltrado,

		];

		return view('Administrador/ArchivosCarpeta', $datos);

	}




	public function lista()
	{
		$dato = $this->request->getGet('nombre');
		$Crud = new CrudModel();
		$Crud1 = new DatosModel();
		$ListadoFiltrado = $Crud1->Armado($dato);
		$datos = $Crud->listarNombres();
		$mensaje = session('mensaje');

		$datos = [
			"datos" => $datos,
			"ListadoFiltrado" => $ListadoFiltrado,
			"mensaje" => $mensaje
		];

		return view('Administrador/ListaSolicitudes', $datos);

	}



	/***************************************************************************************************************
	 * proceso de muestra de datos de las notificaciones que el administrador realizara al usuario 
	 ***************************************************************************************************************/
	public function getDataNotificaciones()
	{

		$dato_a_filtrar = $this->request->getGet('dato_a_filtrar');
		print($dato_a_filtrar);
		$model = new CrudModel();
		$data = $model->listarNotificacion($dato_a_filtrar); // Llama al método para obtener datos
		foreach ($data as $value) {
			if (is_object($value)) {

				$value->id;
				$value->funcionario;
				$value->titulo;
				$value->descripcion;
				$value->destinatario;
				$value->created_at;

			}
		}

		$columnas = [

			'id' => true,
			'funcionario' => true,
			'titulo' => true,
			'descripcion' => true,
			'destinatario' => true,
			'created_at' => true,


		];

		$this->datatables(json_encode($data, true), $columnas); //json
	}




	/***************************************************************************************************************
	 * proceso de listado de carpetas
	 ***************************************************************************************************************/
	public function getDataCarpetas()
	{

		$model = new CrudModel();
		$data = $model->listarCarpetas(); // Llama al método para obtener datos
		foreach ($data as $value) {
			if (is_object($value)) {

				$value->id;
				$value->nombre;
				$value->fecha;
				$value->cantidad;


			}
		}

		$columnas = [

			'id' => true,
			'nombre' => true,
			'fecha' => true,
			'cantidad' => true,



		];

		$this->datatables(json_encode($data, true), $columnas); //json
	}




	/***************************************************************************************************************
	 * proceso de recepcion de datos por json para realizar la insersion al modal de los datos de la notificacion  
	 ***************************************************************************************************************/


	public function crearNotificaciones()
	{
		$request = service('request');
		$json_data = $this->request->getJSON();
		$Crud = new DatosModel();
		if ($json_data) {
			$id_usuario = $json_data->otherData->id_usuario;
			$titulo = $json_data->otherData->titulo;
			$descripcion = $json_data->otherData->descripcion;
			$prioridad = $json_data->otherData->prioridad;
			$destinatario = $json_data->otherData->destinatario;

			// Preparar datos para insertar en la base de datos
			$datos = [
				'id_usuario' => $id_usuario,
				'titulo' => $titulo,
				'descripcion' => $descripcion,
				'prioridad' => $prioridad,
				'destinatario' => $destinatario,

			];
			// Insertar datos en la base de datos
			$Crud->insertarDatosNotificacion($datos);

			// Devolver una respuesta JSON
			return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON(['message' => 'Datos insertados con éxito']);

		} else {

			$response = ['status' => 'error', 'message' => 'Error al recibir los datos JSON'];
			return $this->response->setJSON($response);
		}

	}

	/***************************************************************************************************************
	 * proceso de muestra de datos de las archivos dentro de la carpeta 
	 ***************************************************************************************************************/
	public function getDataArchivo()
	{
		$dato_a_filtrar = $this->request->getGet('dato_a_filtrar');
		$model = new DatosModel();
		$data = $model->ArmadoArchivos($dato_a_filtrar); // Llama al método para obtener datos

		foreach ($data as $value) {
			if (is_object($value)) {

				$value->id;
				$value->carpeta;
				$value->nombre;
				$value->tipo;
				$value->tamano;
				$value->descripcion;
				$value->created_at;

			}
		}


		$columnas = [

			'id' => true,
			'carpeta' => true,
			'nombre' => true,
			'tipo' => true,
			'tamano' => true,
			'descripcion' => true,
			'created_at' => true,


		];

		$this->datatables(json_encode($data, true), $columnas); //json
	}



	//envio de datos al modelo para la vista selectiva


	public function getData()
	{
		$dato_a_filtrar = $this->request->getGet('dato_a_filtrar');
		$model = new DatosModel();
		$data = $model->SolicitudesPorEntidad($dato_a_filtrar); // Llama al método para obtener datos

		foreach ($data as $value) {
			if (is_object($value)) {

				$value->id;
				$value->funcionario;
				$value->entidad;
				$value->oficina;
				$value->fecha;
				$value->descripcion_problema;
				$value->respuesta;
				$value->imagen01 = base_url($value->imagen01);


			}
		}

		$columnas = [

			'id' => true,
			'funcionario' => true,
			'entidad' => true,
			'oficina' => true,
			'fecha' => true,
			'descripcion_problema' => true,
			'respuesta' => true,
			'imagen01' => true,

		];

		$this->datatables(json_encode($data, true), $columnas); //json
	}


	// public function crear() {
	// 	$request = service('request');
	// 	$json_data = $this->request->getJSON();
	// 	$Crud = new DatosModel();
	// 	$datos = $Crud->DatosUsuarios();
	//     if ($json_data) {
	//         // Los datos JSON se han recibido correctamente
	//         // Ahora puedes acceder a los datos en $json_data

	//         // Ejemplo: Acceder al campo 'nombre' enviado desde la vista
	//         $codigo = $json_data->otherData->codigo;
	// 		$funcionario = $json_data->otherData->funcionario;
	// 		$entidad = $json_data->otherData->entidad;
	// 		$oficina = $json_data->otherData->oficina;
	// 		$dependencia = $json_data->otherData->dependencia;
	// 		$categoria = $json_data->otherData->categoria;
	// 		$hardware = $json_data->otherData->hardware;
	// 		$telefonia = $json_data->otherData->telefonia;
	// 		$software = $json_data->otherData->software;
	// 		$otros = $json_data->otherData->otros;
	// 		$prioridad = $json_data->otherData->prioridad;
	// 		$descripcion = $json_data->otherData->descripcion;

	// 		$id_categoria = "";

	// 			if (!empty($hardware)) {
	// 				$id_categoria = $hardware;
	// 			} elseif (!empty($telefonia)) {
	// 				$id_categoria = $telefonia;
	// 			} elseif (!empty($software)) {
	// 				$id_categoria = $software;
	// 			} elseif (!empty($otros)) {
	// 				$id_categoria = $otros;
	// 			}

	// 		// Procesar la imagen (guardarla en la carpeta "uploads" y obtener su nombre)
	// 		if (isset($json_data->files) && is_array($json_data->files) && count($json_data->files) > 0) {
	// 			// Se ha enviado una imagen, procesarla
	// 			$imagenes = $json_data->files[0]->file;
	// 			$nombresImagenes = $this->procesarImagen($imagenes);
	// 		} else {
	// 			// No se ha enviado una imagen, asignar "Sin imagen"
	// 			$nombresImagenes = "Sin imagen";
	// 		}

	// 			// Crear un nuevo modelo
	// 			$tuModelo = new CrudModel();

	// 					// Preparar datos para insertar en la base de datos
	// 					$datos = [
	// 						'id_funcionario' => $codigo,
	// 						'funcionario' => $funcionario,
	// 						'id_entidad' => "1",
	// 						'entidad' => $entidad,
	// 						'id_oficina' => "1",
	// 						'oficina' => $oficina,
	// 						'dependencia' => $dependencia,
	// 						'id_clasificacion' => $categoria,
	// 						'id_categoria' => $id_categoria,
	// 						'descripcion_problema' => $descripcion,
	// 						'id_prioridad' => $prioridad,
	// 						'id_estado' =>"activo",
	// 						'respuesta' =>"Sin respuesta",
	// 						'imagen01'=> $nombresImagenes
	// 					];
	// 					// Insertar datos en la base de datos
	// 					$tuModelo->insertarDatos($datos);

	// 					// Devolver una respuesta JSON
	// 					return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON(['message' => 'Datos insertados con éxito']);

	//     } else {
	//         // Hubo un problema al recibir los datos JSON
	//         // Puedes devolver una respuesta de error
	//         $response = ['status' => 'error', 'message' => 'Error al recibir los datos JSON'];
	//         return $this->response->setJSON($response);
	//     }

	// }

	// private function procesarImagen($imagenes)
	// {

	// 	$folderPath="uploads/";
	// 	$image_parts=explode(";base64,",$imagenes);
	// 	$image_type_aux=explode("image/",$image_parts[0]);
	// 	$image_type=$image_type_aux[1];
	// 	$image_base64 = base64_decode($image_parts[1]);
	// 	$file=$folderPath.mt_rand(100000000, 9999999999).'.png';
	// 	file_put_contents($file,$image_base64);

	// return($file);

	// }

	/***************************************************************************************************************
	 * prueba 
	 ***************************************************************************************************************/

	public function insertarDrives()
	{
		$tuModelo = new CrudModel();

        // Obtener datos del formulario
        $id_carpeta = $this->request->getPost('id_carpeta');
        $nombreCarpeta = $this->request->getPost('nombreCarpeta');
        $nombreArchivo = $this->request->getPost('nombreArchivo');
        $descripcion_archivo = $this->request->getPost('descripcion_archivo');
        $archivo = $this->request->getFile('archivo');

        // Validar y mover el archivo
        if ($archivo->isValid() && !$archivo->hasMoved()) {
            $newName = $archivo->getRandomName();
            $archivo->move(ROOTPATH . 'public/files02', $newName);

            // Preparar los datos para insertar en la base de datos
            $datos = [
                'carpeta' => $id_carpeta,
                'nombre' => $nombreArchivo,
                'tipo' => $archivo->getClientMimeType(),
                'tamaño' => $archivo->getSize(),
                'descripcion' => $descripcion_archivo,
                'ubicacion' => $newName,
            ];

            // Insertar datos en la base de datos
            $tuModelo->insertarArchivos($datos);

            // Preparar la respuesta
            $respuesta= [
                'status' => 'success',
                'message' => 'El archivo se subió correctamente.',
            ];
        } else {
            // En caso de error en la subida
            $respuesta = [
                'status' => 'error',
                'message' => 'No se ha seleccionado ningún archivo o hubo un problema durante la subida.',
            ];
        }

        // Devolver la respuesta en formato JSON
        return $this->response->setJSON($respuesta);
    
	}





	//sector de ayuda al usuario 
	public function Ayuda()
	{
		$Crud = new DatosModel();
		$datos = $Crud->DatosUsuarios();




		$datos = [
			"datos" => $datos
		];

		return view('Usuarios/AyudaUsuario', $datos);

	}
	public function AyudaDocumentacion()
	{
		$Crud = new DatosModel();
		$datos = $Crud->DatosUsuarios();




		$datos = [
			"datos" => $datos
		];

		return view('Usuarios/DocumentacionAyuda', $datos);

	}

	//manejo de datablas con el server
	public function datatables($datos, $columnas)
	{

		require_once(FCPATH . 'recursos/datatables/server.php');

		$columnsDefault = $columnas;

		if (isset($_REQUEST['columnsDef']) && is_array($_REQUEST['columnsDef'])) {
			$columnsDefault = [];
			foreach ($_REQUEST['columnsDef'] as $field) {
				$columnsDefault[$field] = true;
			}
		}

		// get all raw data
		$alldata = json_decode($datos, true);
		//var_dump ($alldata);
		$data = [];
		// internal use; filter selected columns only from raw data
		foreach ($alldata as $d) {
			$data[] = filterArray($d, $columnsDefault);
			//echo $d;
		}
		//var_dump($data);
		// count data
		$totalRecords = $totalDisplay = count($data);
		// filter by general search keyword
		if (isset($_REQUEST['search'])) {
			$data = filterKeyword($data, $_REQUEST['search']);
			$totalDisplay = count($data);
		}
		if (isset($_REQUEST['columns']) && is_array($_REQUEST['columns'])) {
			foreach ($_REQUEST['columns'] as $column) {
				if (isset($column['search'])) {
					$data = filterKeyword($data, $column['search'], $column['data']);
					$totalDisplay = count($data);
				}
			}
		}
		// sort
		if (isset($_REQUEST['order'][0]['column']) && $_REQUEST['order'][0]['dir']) {
			$column = $_REQUEST['order'][0]['column'];
			$dir = $_REQUEST['order'][0]['dir'];
			usort($data, function ($a, $b) use ($column, $dir) {
				$a = array_slice($a, $column, 1);
				$b = array_slice($b, $column, 1);
				$a = array_pop($a);
				$b = array_pop($b);
				if ($dir === 'asc') {
					return $a > $b ? true : false;
				}
				return $a < $b ? true : false;
			});
		}
		// pagination length
		if (isset($_REQUEST['length'])) {
			$data = array_splice($data, $_REQUEST['start'], $_REQUEST['length']);
		}
		// return array values only without the keys
		if (isset($_REQUEST['array_values']) && $_REQUEST['array_values']) {
			$tmp = $data;
			$data = [];
			foreach ($tmp as $d) {
				$data[] = array_values($d);
			}
		}
		$result = [
			'recordsTotal' => $totalRecords,
			'recordsFiltered' => $totalDisplay,
			'data' => $data,
		];

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
		echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	}



	/***************************************************************************************************************
	 * proceso de recepcion de datos por json para realizar la insersion al modal de los datos de la notificacion  
	 ***************************************************************************************************************/

	public function crearCarpeta()
	{
		$request = service('request');
		$json_data = $this->request->getJSON();
		$Crud = new DatosModel();
		if ($json_data) {
			$nombre_archivo = $json_data->otherData->nombre_archivo;
			$descripcion_archivo = $json_data->otherData->descripcion_archivo;

			// Preparar datos para insertar en la base de datos
			$datos = [
				'nombre' => $nombre_archivo,
				'descripcion' => $descripcion_archivo,

			];
			// Insertar datos en la base de datos
			$Crud->insertarNombreCarpeta($datos);

			// Devolver una respuesta JSON
			return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON(['message' => 'Datos insertados con éxito']);

		} else {

			$response = ['status' => 'error', 'message' => 'Error al recibir los datos JSON'];
			return $this->response->setJSON($response);
		}

	}


}