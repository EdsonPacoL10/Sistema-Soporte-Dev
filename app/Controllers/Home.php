<?php namespace App\Controllers;


	use App\Models\CrudModel;
	use CodeIgniter\HTTP\ResponseInterface;
	use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{

	public function getData()
    {
        $model = new CrudModel(); // Crea una instancia del modelo
        $data = $model->listarNombres(); // Llama al método para obtener datos
	
		foreach ($data as $value) {
			if (is_object($value)) {
				
			$value->id = '<div class="d-flex align-items-center">
				<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">	
					<div class="symbol-label fs-3 bg-light-dark text-dark">F</div>
				</div>
				<div class="d-flex flex-column">
					<div class="badge badge-light-warning fw-bold fs-7">'.$value->id.'</div>
				</div>
			</div>';
			$value->funcionario = '<div class="d-flex align-items-center">
									<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">	
										<div class="symbol-label fs-3 bg-light-dark text-dark">F</div>
									</div>
									<div class="d-flex flex-column">
										<div class="badge badge-light-warning fw-bold fs-7">'.$value->funcionario.'</div>
									</div>
								</div>';
			$value->entidad = '<div class="badge badge-light-primary fw-bold fs-7">'.$value->entidad.'</div>';
			$value->oficina = '<div class="badge badge-light-danger fw-bold fs-7">'.$value->oficina.'</div>';
			$value->descripcion_problema = '<div class="badge badge-light-danger fw-bold fs-7">'.$value->descripcion_problema.'</div>';
			$value->respuesta = '<div class="badge badge-light-primary fw-bold fs-7">'.$value->respuesta.'</div>';
			$value->Actions = '<div class="text-end">
			<button href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Acción
			<span class="svg-icon svg-icon-5 m-0">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
			</svg>
			</span>
			</button>
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
			<div class="menu-item px-3">
				<a class="menu-link px-3" data-bs-toggle="modal" href="#editar_venta_modal" data-id="" data-nombre="" data-url="acevm" id="editar">Editar</a>
			</div>
			
			<div class="menu-item px-3">
			<a href="javascript:;" class="menu-link px-3" id="eliminar" data-kt-users-table-filter="delete_row" data-id="" data-nombre="">Eliminar</a>
			</div>
			</div>
			</div>';
		}}

		$columnas = [
			
			'id'     	  => true,
			'entidad'     	  => true,
			'nombres'     => true,
			'oficina'    => true,
			'descripcion_problema'    => true,
			'respuesta'    => true,
			
			'Actions'     => true,
		];

		$this->datatables(json_encode($data,true),$columnas);//json


    //     $formattedData = ['data' => $data];

    // // Devuelve los datos en formato JSON
    // return $this->response->setJSON($formattedData);
    }


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

	//Datatables tools 
	public function datatables($datos, $columnas){
		//echo base_url();
		require_once(FCPATH.'recursos/datatables/server.php');
		
		$columnsDefault = $columnas;

		if ( isset( $_REQUEST['columnsDef'] ) && is_array( $_REQUEST['columnsDef'] ) ) {
			$columnsDefault = [];
			foreach ( $_REQUEST['columnsDef'] as $field ) {
				$columnsDefault[ $field ] = true;
			}
		}

		// get all raw data
		$alldata = json_decode($datos, true );
		//var_dump ($alldata);
		$data = [];
		// internal use; filter selected columns only from raw data
		foreach ( $alldata as $d ) {
			$data[] = filterArray( $d, $columnsDefault );
			//echo $d;
		}

		//var_dump($data);

		// count data
		$totalRecords = $totalDisplay = count( $data );

		// filter by general search keyword
		if ( isset( $_REQUEST['search'] ) ) {
			$data         = filterKeyword( $data, $_REQUEST['search'] );
			$totalDisplay = count( $data );
		}



		if ( isset( $_REQUEST['columns'] ) && is_array( $_REQUEST['columns'] ) ) {
			foreach ( $_REQUEST['columns'] as $column ) {
				if ( isset( $column['search'] ) ) {
					$data         = filterKeyword( $data, $column['search'], $column['data'] );
					$totalDisplay = count( $data );
				}
			}
		}



		// sort
		if ( isset( $_REQUEST['order'][0]['column'] ) && $_REQUEST['order'][0]['dir'] ) {
			$column = $_REQUEST['order'][0]['column'];
			$dir    = $_REQUEST['order'][0]['dir'];
			usort( $data, function ( $a, $b ) use ( $column, $dir ) {
				$a = array_slice( $a, $column, 1 );
				$b = array_slice( $b, $column, 1 );
				$a = array_pop( $a );
				$b = array_pop( $b );

				if ( $dir === 'asc' ) {
					return $a > $b ? true : false;
				}

				return $a < $b ? true : false;
			} );
		}

		// pagination length
		if ( isset( $_REQUEST['length'] ) ) {
			$data = array_splice( $data, $_REQUEST['start'], $_REQUEST['length'] );
		}

		// return array values only without the keys
		if ( isset( $_REQUEST['array_values'] ) && $_REQUEST['array_values'] ) {
			$tmp  = $data;
			$data = [];
			foreach ( $tmp as $d ) {
				$data[] = array_values( $d );
			}
		}

		$result = [
		    'recordsTotal'    => $totalRecords,
		    'recordsFiltered' => $totalDisplay,
		    'data'            => $data,
		];

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

		echo json_encode( $result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	}


	//--------------------------------------------------------------------

}
