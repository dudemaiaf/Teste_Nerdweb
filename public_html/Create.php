<?php
/**
 * Created by PhpStorm.
 * User: dpe10952
 * Date: 29/09/21
 * Time: 02:14
 */

require_once __DIR__ . "/Nerdweb/Noticias.php";

use Nerdweb\Noticias;


if (isset($_POST['titulo'], $_POST['conteudo'], $_POST['url'], $_POST['data'], $_POST['ativo'])){
    $newNoticia = new Noticias;
    $newNoticia->titulo = $_POST['titulo'];
    $newNoticia->conteudo = $_POST['conteudo'];
    $newNoticia->url_noticia = $_POST['url'];
    $newNoticia->data = $_POST['data'];
    $newNoticia->ativo = $_POST['ativo'];

    $newNoticia->create();
}


include __DIR__."/Includes/header.php";
include __DIR__."/Includes/formulario.php";
include __DIR__."/Includes/footer.php";

