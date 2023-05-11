<?php

namespace App\Models;

use CodeIgniter\Model;

class AtribuidoModel extends Model{
    protected $table = "atribuido";
    protected $primaryKey = "idAtribuido";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["componentes_idComponentes", "usuario_idUsuario"];
    protected $returnType = "object";

    public function joinAtribuido()
    {
        $query = $this->db->query("SELECT atribuido.idAtribuido, componentes.nomeMateria, usuario.nome
                                   FROM ((atribuido 
                                   INNER JOIN componentes ON atribuido.componentes_idComponentes = componentes.idComponentes)
                                   INNER JOIN usuario ON atribuido.usuario_idUsuario = usuario.idUsuario)");
        return $query->getResult('object');
    }
}

?>