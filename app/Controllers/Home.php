<?php namespace App\Controllers;


	use App\Models\CrudModel;
	use CodeIgniter\HTTP\ResponseInterface;
	use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
	public function index()
	{
		$Crud = new CrudModel();
		$datos = $Crud->listarNombres();

		$mensaje = session('mensaje');

		$data = [
					"datos" => $datos,
					"mensaje" => $mensaje
				];

		return view('Administrador/administrador', $data);
	}

	

	public function crear() {
		$request = service('request');
		$json_data = $this->request->getJSON();

        if ($json_data) {
            // Los datos JSON se han recibido correctamente
            // Ahora puedes acceder a los datos en $json_data

            // Ejemplo: Acceder al campo 'nombre' enviado desde la vista
            $codigo = $json_data->otherData->codigo;
			$funcionario = $json_data->otherData->funcionario;
			$entidad = $json_data->otherData->entidad;
			$oficina = $json_data->otherData->oficina;
			$dependencia = $json_data->otherData->dependencia;
			$hardware = $json_data->otherData->hardware;
			$telefonia = $json_data->otherData->telefonia;
			$software = $json_data->otherData->software;
			$otros = $json_data->otherData->otros;
			$prioridad = $json_data->otherData->prioridad;
			$descripcion = $json_data->otherData->descripcion;

			// Procesar la imagen (guardarla en la carpeta "uploads" y obtener su nombre)
			$imagenes = $json_data->files[0]->file;
			$nombresImagenes = $this->procesarImagen($imagenes);
			
				// Crear un nuevo modelo
				$tuModelo = new CrudModel();

						// Preparar datos para insertar en la base de datos
						$datos = [
							'id_funcionario' => $codigo,
							'funcionario' => $funcionario,
							'id_entidad' => "1",
							'entidad' => $entidad,
							'id_oficina' => "1",
							'oficina' => $oficina,
							'dependencia' => $dependencia,
							'id_clasificacion' => "hardware",
							'id_categoria' => $hardware,
							//'telefonia' => $telefonia,
							//'software' => $software,
							//'otros' => $otros,
							'descripcion_problema' => $descripcion,
							'id_prioridad' => $prioridad,
							'id_estado' =>"activo",
							'respuesta' =>"Sin respuesta",
							'imagen01'=> $nombresImagenes
						];
						// foreach ($nombreimagen as $index => $nombreImagen) {
						// 	$datos["imagen01" . ($index + 1)] = $nombreImagen;
						// }

						// Insertar datos en la base de datos
						$tuModelo->insertarDatos($datos);

						// Devolver una respuesta JSON
						return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON(['message' => 'Datos insertados con éxito']);



            // Realiza las acciones que necesites con los datos

            // Puedes devolver una respuesta, como un mensaje de éxito
           // $response = ['status' => 'success', 'message' => 'Datos JSON recibidos correctamente'];
            //return $this->response->setJSON($response);
        } else {
            // Hubo un problema al recibir los datos JSON
            // Puedes devolver una respuesta de error
            $response = ['status' => 'error', 'message' => 'Error al recibir los datos JSON'];
            return $this->response->setJSON($response);
        }



		// $datos = [
		// 			"nombre" => $_POST['nombre'],
		// 			"paterno" => $_POST['paterno'],
		// 			"materno" => $_POST['materno']
		// 		];
		// $Crud = new CrudModel();
		// $respuesta = $Crud->insertar($datos);

		// if ($respuesta > 0) {
		// 	return redirect()->to(base_url().'/')->with('mensaje','1');
		// } else {
		// 	return redirect()->to(base_url().'/')->with('mensaje','0');
		// }

	}

	public function procesarImagen($imagenes)
    {
		$folderPath="uploads/";
		$image_parts=explode(";base64,",$imagenes);
		$image_type_aux=explode("image/",$image_parts[0]);
		$image_type=$image_type_aux[1];
		$image_base64 = base64_decode($image_parts[1]);
		$file=$folderPath.mt_rand(100000000, 9999999999).'.png';
		file_put_contents($file,$image_base64);

	return($file);
		
	
	
    }
	
	public function actualizar(){
		$datos = [
					"nombre" => $_POST['nombre'],
					"paterno" => $_POST['paterno'],
					"materno" => $_POST['materno']
				];
		$idNombre = $_POST['idNombre'];

		$Crud = new CrudModel();

		$respuesta = $Crud->actualizar($datos, $idNombre);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','2');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','3');
		}
	}

	public function obtenerNombre($idNombre) {
		$data = ["id_nombre" => $idNombre];
		$Crud = new CrudModel();
		$respuesta = $Crud->obtenerNombre($data);

		$datos = ["datos" => $respuesta];

		return view('actualizar', $datos);
	}

	public function eliminar($idNombre){
		$Crud = new CrudModel();
		$data = ["id_nombre" => $idNombre];

		$respuesta = $Crud->eliminar($data);

		if ($respuesta) {
			return redirect()->to(base_url().'/')->with('mensaje','4');
		} else {
			return redirect()->to(base_url().'/')->with('mensaje','5');
		}
	}

	//--------------------------------------------------------------------

}
