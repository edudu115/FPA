<?php

namespace App\Models;

use CodeIgniter\Model;

class HorarioModel extends Model
{
    protected $table = "horario";
    protected $primaryKey = "idHorario";
    protected $useAutoIncrement = true;
    protected $allowedFields =  [
        "componente_idComponentes",
        "diaSemana",
        "horaInicio",
        "horaFim"
    ];
    protected $returnType = "object";

    public function deleteHorario($id)
    {
        $teste = "DELETE FROM horario WHERE componente_idComponentes = '" . $id . "';";
        $this->db->query($teste);
        //===
        $teste = "DELETE FROM componentes WHERE idComponentes = '" . $id . "';";
        $this->db->query($teste);
    }

    public function horarioComponente($idComponente)
    {
        $query = $this->db->query("SELECT * FROM horario WHERE componente_idComponentes = '" . $idComponente . "';");
        return $query->getResult('object');
    }
}
