<?php
/**
 * Created by PhpStorm.
 * User: dpe10952
 * Date: 29/09/21
 * Time: 19:04
 */

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
        break;

      case 'error':
        $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        break;
    }
  }

  $resultados = '';
  foreach($noticias as $noticia){
    $resultados .= '<tr>
                      <td>'.$noticia->id.'</td>
                      <td>'.$noticia->titulo.'</td>
                      <td>'.$noticia->url_noticia.'</td>
                      <td>'.($noticia->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                      <td>'.date('d/m/Y à\s H:i:s',strtotime($noticia->data)).'</td>
                      <td>
                        <a href="editar.php?id='.$noticia->id.'">
                          <button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$noticia->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                    </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma noticia encontrada
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Nova vaga</button>
    </a>
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Url_noticia</th>
            <th>Status</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>