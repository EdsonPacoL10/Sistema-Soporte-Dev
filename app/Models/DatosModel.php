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

        public function DatosCategoriaEntidad() {
			$Nombres = $this->db->query("SELECT c2.id as idClasificacion ,c.id as idCategoria,c.nombre as nomCat,c2.nombre as nomclas
			FROM categoria c  
			JOIN clasificacion c2  ON c2.id  = c.id_clasificacion ;
			  ");
			return $Nombres->getResult();
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