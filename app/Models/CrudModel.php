<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class CrudModel extends Model {


		
		public function listarNombres() {
			$Nombres = $this->db->query("SELECT id, funcionario, entidad, oficina,s.descripcion_problema,updated_at as fecha , imagen01, s.respuesta 
			FROM solicitud s 
			WHERE imagen01 LIKE '%uploads%';");
			return $Nombres->getResultArray();
		}
		public function listarCarpetas() {
			$Nombres = $this->db->query("	select id, nombre ,c.created_at as fecha ,cantidad from carpetas c ;");
			return $Nombres->getResultArray();
		}
		public function insertarDatos($datos) {
			$Nombres = $this->db->table('solicitud');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}
		public function insertarArchivos($datos) {
			$Nombres = $this->db->table('archivos');
			$Nombres->insert($datos);

			return $this->db->insertID(); 
		}


			public function listarNotificacion($dato_a_filtrar) {
				// Utiliza una sentencia preparada para evitar la inyección de SQL
				$sql = "SELECT n.id ,tp.funcionario ,n.titulo ,n.descripcion ,n.destinatario ,n.created_at 
				FROM notificacion n  
				JOIN t_personas tp  ON n.id_usuario  = tp.id where n.destinatario LIKE '%".$dato_a_filtrar."%'  ;	
				";
				// Ejecuta la consulta utilizando CodeIgniter Query Builder
				$query = $this->db->query($sql);
			
				// Devuelve los resultados como un array
				return $query->getResultArray();
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