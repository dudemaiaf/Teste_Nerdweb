<?php
/**
 * Created by PhpStorm.
 * User: dpe10952
 * Date: 29/09/21
 * Time: 18:29
 */

namespace Nerdweb;

require_once __DIR__ . "/Database.php";

use Nerdweb\Database;

class Noticias {
    public $id;
    public $data;
    public $url_noticia;
    public $titulo;
    public $conteudo;
    public $ativo;

    public function create (){
        $objDatabase = new Database();
        $objDatabase->insertPrepared("Noticias",
            ['titulo', 'conteudo', 'url_noticia', 'data', 'ativo'],
            [$this->titulo, $this->conteudo, $this->url_noticia, $this->data, $this->ativo]);
    }

    public function getNoticias (){
        return (new Database())->selectPrepared("Noticias",[],[],[],"","")->fetchAll();
    }

    public function update (){
        return (new Database())->updatePrepared("Noticias", ['titulo', 'conteudo', 'url_noticia', 'data', 'ativo'],
            [$this->titulo, $this->conteudo, $this->url_noticia, $this->data, $this->ativo],['titulo'],[$this->titulo]);
    }
}
