<?php


namespace App\Models;


class Produto{
    private $descricao;
    private $preco;
    protected $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }

    public function getProdutos(){
        //return  array('Sofá', 'Cadeira', 'Cama', 'cobertor');

        $query = "select id, descricao, preco from tb_produtos";
        return $this->db->query($query)->fetchAll();
    }

}