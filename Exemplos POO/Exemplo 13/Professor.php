<?php

class Professor extends Pessoa
{
    private $alunos;
    private $materia;

    public function __construct()
    {
        $this->alunos = array();
    }

    public function getMateria()
    {
        return $this->materia;
    }

    public function setMateria($materia)
    {
        $this->materia = $materia;
    }


    public function getAlunos()
    {
        return $this->alunos;
    }


    public function setAlunos($alunos)
    {
        $this->alunos = $alunos;
    }

    public function mediaNotas()
    {
        //calcula o desempenho médio dos alunos em sua matéria.
        $total = 0;
        foreach ($this->alunos as $nota => $aluno){
            $total += $nota;
        }
        return $total/count($this->alunos);
    }


}