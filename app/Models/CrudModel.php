<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class CrudModel extends Model {


		
		public function listarNombres() {
			$Nombres = $this->db->query("SELECT id, funcionario, entidad, oficina, s.descripcion_problema, imagen01, s.respuesta 
			FROM solicitud s 
			WHERE imagen01 LIKE '%uploads%' ");
			return $Nombres->getResultArray();
		}
		public function insertarDatos($datos) {
			$Nombres = $this->db->table('solicitud');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}

		public function obtenerNombre($data) {
			$Nombres =  $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->get()->getResultArray();
		}

		public function actualizar($data, $idNombre) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->set($data);
			$Nombres->where('id_nombre', $idNombre);
			return $Nombres->update();
		}

		public function eliminar($data) {
			$Nombres = $this->db->table('t_personas');
			$Nombres->where($data);
			return $Nombres->delete();
		}
	}