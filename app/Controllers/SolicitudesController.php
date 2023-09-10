<?php

namespace App\Controllers;

use App\Models\CrudModel;
use App\Models\DatosModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\IncomingRequest;
class SolicitudesController extends BaseController
{

	public function index(){
		$Crud = new DatosModel();
			$datos = $Crud->DatosUsuarios();
			$datosEntidad=$Crud->DatosEntidad();
			$datosCategoria=$Crud->DatosCategoriaEntidad();
			$mensaje = session('mensaje');
	
			$datos = [
						"datos" => $datos,
						"datosEntidad"=>$datosEntidad,
						"datosCategoria"=>$datosCategoria,
						"mensaje" => $mensaje
					];
	
			return view('Usuarios/NuevaSolicitud',$datos);
	
		
	 }
	public function getData()
    {
        $model = new CrudModel(); // Crea una instancia del modelo
        $data = $model->listarNombres(); // Llama al método para obtener datos
	
		foreach ($data as $value) {
			if (is_object($value)) {
				
			$value->id ;
			$value->funcionario;
		
			$value->entidad ;
			$value->oficina;
			$value->descripcion_problema ;
			$value->imagen01 = base_url($value->imagen01);
			$value->respuesta;
		
		}}

		$columnas = [
			
			'id'     	  => true,
			'entidad'     	  => true,
			'nombres'     => true,
			'oficina'    => true,
			'descripcion_problema'    => true,
			'imagen01'=>true,
			'respuesta'    => true,
		
		];

		$this->datatables(json_encode($data,true),$columnas);//json
    }


	public function crear() {
		$request = service('request');
		$json_data = $this->request->getJSON();
		$Crud = new DatosModel();
		$datos = $Crud->DatosUsuarios();
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
			if (isset($json_data->files) && is_array($json_data->files) && count($json_data->files) > 0) {
				// Se ha enviado una imagen, procesarla
				$imagenes = $json_data->files[0]->file;
				$nombresImagenes = $this->procesarImagen($imagenes);
			} else {
				// No se ha enviado una imagen, asignar "Sin imagen"
				$nombresImagenes = "Sin imagen";
			}

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
						// Insertar datos en la base de datos
						$tuModelo->insertarDatos($datos);

						// Devolver una respuesta JSON
						return $this->response->setStatusCode(ResponseInterface::HTTP_CREATED)->setJSON(['message' => 'Datos insertados con éxito']);

        } else {
            // Hubo un problema al recibir los datos JSON
            // Puedes devolver una respuesta de error
            $response = ['status' => 'error', 'message' => 'Error al recibir los datos JSON'];
            return $this->response->setJSON($response);
        }

	}

	private function procesarImagen($imagenes)
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

    public function datatables($datos, $columnas){
		
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
}