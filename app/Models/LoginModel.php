<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class LoginModel extends Model {

        public function obtenerUsuario($usuario, $password) {
            $query = $this->db->query("SELECT usuario , password, type FROM t_personas WHERE usuario = ? AND password = ?", [$usuario, $password]);
        
                return $query->getResultArray(); // Devuelve los resultados encontrados
            
        }
        
        
	}