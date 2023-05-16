<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model{
    protected $table = "componentes";
    protected $primaryKey = "idComponentes";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nomeMateria", "horario_idHorario",
                                "cursos_idCurso", "periodo", "horasSemanais"];
    protected $returnType = "object";

    public function joinComponente()
    {
        $query = $this->db->query("SELECT componentes.idComponentes, componentes.nomeMateria, componentes.periodo, componentes.horasSemanais, cursos.nomeCurso, horario.diaSemana, horario.horaInicio, horario.horaFim
                                   FROM ((componentes 
                                   INNER JOIN horario ON componentes.horario_idHorario = horario.idHorario)
                                   INNER JOIN cursos ON componentes.cursos_idCurso = cursos.idCurso)");
        return $query->getResult('object');
    }
}


?>