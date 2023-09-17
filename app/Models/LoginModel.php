<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class LoginModel extends Model {

        public function obtenerUsuario($usuario, $password) {
            $query = $this->db->query("SELECT tp.id,tp.usuario ,tp.password  , tp.type , tp.funcionario ,tp.foto ,e.id as id_entidad  ,e.nombre as entidad ,tp.oficina ,tp.cargo ,tp.dependencia  from t_personas tp 
            INNER JOIN entidad e  ON tp.id_entidad  = e.id  WHERE usuario = ? AND password = ?  ;", [$usuario, $password]);
        
                return $query->getResultArray(); // Devuelve los resultados encontrados
            
        }
        
        
	}