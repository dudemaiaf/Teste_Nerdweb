<?php
require_once __DIR__ . "/Nerdweb/Noticias.php";

use Nerdweb\Noticias;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

$obNoticia = Noticias::getNoticias($_GET['id']);


if(isset($_POST['titulo'], $_POST['conteudo'], $_POST['url'], $_POST['data'], $_POST['ativo'])){

    $obNoticia->titulo    = $_POST['titulo'];
    $obNoticia->conteudo = $_POST['conteudo'];
    $obNoticia->url_noticia = $_POST['url'];
    $obNoticia->data = $_POST['data'];
    $obNoticia->ativo     = $_POST['ativo'];
    $obNoticia->update();

    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';