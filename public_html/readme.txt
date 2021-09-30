# Instrucoes
Utilizar o o materialize para criar as paginas,preferencialmente soh editar os arquivos proprios pra customizacao do materialize 
por exemplo editando os arquivos 'app-assets/js/custom/custom-scritps.js' e 'app-assets/css/custom/custom.css'

# Tarefas

1) Implementar a funcao \Nerdweb\Database->updatePrepared() -- 28/09

2) Criar um CRUD para Noticias no namespace Nerdweb, os campos necessarios pra uma noticia sao [id, data, url_noticia, titulo, conteudo] -- 29/09

3) Utilizar o materialize para listagem de noticias uma pagina com uma tabela e com os seguintes campos [id, titulo, data, url_noticia] - 30/09

4) Criar uma pagina interna pra exibir as noticias

5) criar uma pagina de insercao de noticias com os campos [data, url_noticia, titulo, conteudo]

# Bonus
1) Implementar os blocos ( head, header, footer, conteudo ) como templates utilizando a classe \Nerdweb\Template extendendo a classe se necessario

2) Alterar a classe \Nerdweb\Database para utilizar sqlite porem mantendo compatibilidade com codigos existentes 
( dica: eh necessario somente alterar o parametro args no construtor e a funcao connect() )

