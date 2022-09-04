<?php

namespace App\Entity;

use App\Db\Database;

class Vaga
{
    public $id; // identificador da vaga
    public $nome; // nome  da vaga
    public $descricap; // descricao da vaga
    public $ativo; // pode ser s/n 
    public $data; // data de publicação da vaga 

    public function cadastrar()
    {
        // definir data
        $this->data = date('Y-m-d-H:i:s');

        //insere vaga no banco
        $obDatabase = new Database('vagas');
        $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data,
        ]);

        return true;
    }
}
