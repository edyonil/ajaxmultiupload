AjaxMultiUpload
===============

Pra galera da lista [codeigniter-br]

É bem simples galera: (utilizei o welcome controller e a view welcome_message)

No Controller welcome, tem a função save, que pega qualquer tipo de dado enviado por um formulário, trata tudo, faz o upload dos arquivos (automaticamente) e retorna um JSON com os valores para serem acessados depois via JS.

Claro, isso é um exemplo de tratamento de dados, pode se retornar um TRUE ou FALSE caso haja algum erro, e assim por diante.

No main.js tem a função que pega qualquer formulário que se utilize da classe 'ajaxForm' e converte ele para um formulário em ajax. Tudo automático também, pega todos os dados dele, trata, envia pra action e retorna depois os valores

Qualquer dúvida, todos tem meu contato no grupo!

Espero ter ajudado, sei que fazer upload por ajax é sempre tenso usando plugins e afins pela internet. Fiz isso porque também estive nessa jornada e resolvi resumir.

Desculpem o código sem comentários, talvez até mal identado. Mas esse código está evoluindo em meu outro repositório de um admin, o 'manager'.

OBS: Só fazer o download e rodar para testar (estou usando .htaccess portanto, apache! Ou, habilita o index.php nas URL`s no config.php)

Valeu!