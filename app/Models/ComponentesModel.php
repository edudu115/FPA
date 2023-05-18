<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model{
    protected $table = "componentes";
    protected $primaryKey = "idComponentes";
    protected $useAutoIncrement = false;
    protected $allowedFields = ["idComponentes", "nomeMateria",
                                "cursos_idCurso", "periodo", "horasSemanais", "usuario_atribuidoPara"];
    protected $returnType = "object";

    public function joinComponente()
    {
        $query = $this->db->query("SELECT componentes.idComponentes, componentes.nomeMateria, componentes.periodo, componentes.cursos_idCurso, componentes.horasSemanais, horario.diaSemana, horario.horaInicio, horario.horaFim
                                   FROM (componentes 
                                   INNER JOIN horario ON componentes.idComponentes = horario.componente_idComponentes)");
        return $query->getResult('object');
    }

    public function atribuidoComponentes()
    {
        $query = $this->db->query("dsd");
    }
}


?>