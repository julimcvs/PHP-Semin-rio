<?php

class Aluno extends Pessoa
{
    private $materias;

    public function __construct()
    {
        $this->materias = array();
    }

    public function getMaterias()
    {
        return $this->materias;
    }

    public function setMaterias(array $materias)
    {
        $this->materias = $materias;
    }

    public function mediaNotas()
    {
        //calcula o desempenho médio do aluno em todas suas matérias.
        $total = 0;
        foreach ($this->materias as $chave => $v) {
            $total += $chave;
        }
        return $total / count($this->materias);
    }


}