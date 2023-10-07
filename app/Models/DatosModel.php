<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class DatosModel extends Model {

		public function DatosUsuarios() {
			$Nombres = $this->db->query("select id,nombre,apellido,cargo,estado,privilegios from users u ");
			return $Nombres->getResult();
		}
        public function DatosEntidad() {
			$Nombres = $this->db->query("select id ,nombre from entidad e  ");
			return $Nombres->getResult();
		}

		public function insertarDatosNotificacion($datos) {
			$Nombres = $this->db->table('notificacion');
			$Nombres->insert($datos);
			return $this->db->insertID(); 
		}
		public function insertarNombreCarpeta($datos) {
			$Nombres = $this->db->table('carpetas');
			$Nombres->insert($datos);
			return $this->db->insertID(); 
		}


		public function insertarDatosUrl($datos) {
			$Nombres = $this->db->table('urlvideoayudausuario');
			$Nombres->insert($datos);
			return $this->db->insertID(); 
		}

		public function listaUrl() {
			// Utiliza una sentencia preparada para evitar la inyección de SQL
			$sql = "select id,url from urlvideoayudausuario u ";
			// Ejecuta la consulta utilizando CodeIgniter Query Builder
			$query = $this->db->query($sql);
		
			// Devuelve los resultados como un array
			return $query->getResult();
		}
        public function DatosCategoriaEntidad() {
			$Nombres = $this->db->query("SELECT c2.id as idClasificacion ,c.id as idCategoria,c.nombre as nomCat,c2.nombre as nomclas
			FROM categoria c  
			JOIN clasificacion c2  ON c2.id  = c.id_clasificacion ;
			  ");
			return $Nombres->getResult();
		}
		public function Entidades() {
			$Nombres = $this->db->query("select id , nombre  from entidad e 
			  ");
			return $Nombres->getResult();
		}
		public function SolicitudesPorEntidad($entidad) {
			// Utiliza una sentencia preparada para evitar la inyección de SQL
			$sql = "SELECT id, funcionario, id_entidad, oficina, s.descripcion_problema, updated_at as fecha, imagen01, s.respuesta
					FROM solicitud s
					WHERE id_entidad = ? AND imagen01 LIKE '%uploads%';";
		
			// Ejecuta la consulta utilizando CodeIgniter Query Builder
			$query = $this->db->query($sql, [$entidad]);
		
			// Devuelve los resultados como un array
			return $query->getResultArray();
		}

		//armado de la consulta para mostrar los archivos nesario solo para la entidad que necesita

		public function Armado($entidad){
			$sql = "SELECT id,nombre 
			FROM entidad e  
			WHERE id = ?;";
		
			// Ejecuta la consulta utilizando CodeIgniter Query Builder
			$query = $this->db->query($sql, [$entidad]);
		
			// Devuelve los resultados como un array
			return $query->getResult();
		}
			//armado nombre de la carpeta

			public function ArmadoCarpeta($carpeta){
				$sql = "select id,nombre from carpetas c WHERE nombre = ?;";
			
				// Ejecuta la consulta utilizando CodeIgniter Query Builder
				$query = $this->db->query($sql, [$carpeta]);
			
				// Devuelve los resultados como un array
				return $query->getResult();
			}
		//armado de la consulta para mostrar los documentos que se tiene dentro de la carpeta 
		public function ArmadoArchivos($archivos){
					// Utiliza una sentencia preparada para evitar la inyección de SQL
					$sql = "select a.id ,c.nombre as carpeta ,a.nombre ,a.tipo ,a.tamaño, a.descripcion ,a.created_at 
					FROM archivos a 
					INNER JOIN carpetas c  ON a.carpeta  = c.id where a.carpeta =?;";
		
			// Ejecuta la consulta utilizando CodeIgniter Query Builder
			$query = $this->db->query($sql, [$archivos]);
		
			// Devuelve los resultados como un array
			return $query->getResultArray();
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