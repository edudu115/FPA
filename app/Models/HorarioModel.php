<?php

namespace App\Models;

use CodeIgniter\Model;

class HorarioModel extends Model{
    protected $table = "horario";
    protected $primaryKey = "idHorario";
    protected $useAutoIncrement = true;
    protected $allowedFields =  ["diaSemana",
                                "horaInicio",
                                "horaFim"];
    protected $returnType = "object";

    public function deleteHorario ($id)
    {
        $this->db->callFunction('apaga_componente', $id);
    }
}
?>