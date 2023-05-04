<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = "usuario";
    protected $primaryKey = "idUsuario";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nome", "prontuario", "senha", "cpf", "cargo",
                                 "tempoCampus", "tempoExp", 
                                 "tempoProfissional", "tempoInstuicao", 
                                 "nivelCarreira", "idade"];
    protected $returnType = "object";

    public function verificar_login($p, $s)
    {
        $sql = "SELECT * FROM usuario WHERE prontuario='$p' AND senha='$s'";
    
        $query = $this->db->query($sql);

        if($query->getNumRows() > 0)
            return True;

        return False;
    }
}
?>