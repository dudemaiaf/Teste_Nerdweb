<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3">Cadastro Noticia</h2>

    <form method="post">

        <div class="form-group">
            <label>Título</label>
<!--            <input type="text" class="form-control" name="titulo" value="--><?//=$newNoticia->titulo?><!--">-->
            <input type="text" class="form-control" name="titulo">
        </div>

<!--        <div class="form-group">--><?//=$newNoticia->url_noticia?>
        <div class="form-group">
            <label>Conteudo</label>
<!--            <textarea class="form-control" name="descricao" rows="5">--><?//=$newNoticia->conteudo?><!--</textarea>-->
            <textarea class="form-control" name="conteudo" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label>Data</label>
<!--            <textarea class="form-control" name="data" rows="1">--><?//=$newNoticia->data?><!--</textarea>-->
            <textarea class="form-control" name="data" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label>URL</label>
<!--            <textarea class="form-control" name="url" rows="1">--><?//=$newNoticia->url_noticia?><!--</textarea>-->
            <textarea class="form-control" name="url" rows="1"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-control">
<!--                        <input type="radio" name="ativo" value="n" --><?//=$newNoticia->ativo == 'n' ? 'checked' : ''?><!-->
                        <input type="radio" name="ativo" value="n"> Inativo
                    </label>
                </div>
            </div>

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</main>