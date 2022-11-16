# clientes_p21

Segue minha solução resolvendo o problema de atualização de clientes através da importação de XML , atualização pela próprio sistema, alterando, removendo ou adicionando novos clientes, enviando emails, criação de um banco de dados e podendo baixar todos os dados em excel. Todo sistema foi feito em PHP, HTML e CSS. Utilização de um banco local segue em anexo o SQL para criar, e em anexo os XML para importação, não foi utilizado nenhum framework.

No Index.php onde esta rodando a tela principal, contém a tabela para visualização dos dados do banco, e os botões para importação do XML, cadastrar novos clientes, ao lado de cada cliente poderá editar os dados e ou excluir, enviar email, e baixar os dados em excel novamente.

No processa.php esta a lógica para importação do XML varrendo o XML e pegando os valores dos atributos, e adicionando no banco de dados, tendo uma validação caso ter dados duplicados, sendo validado pelo CPF, caso estiver alguns dados duplicados ele irá atualizar o dado anterior, clientes novos são adicionados também.

No salvar_incricao.php ele salva ou faz um update de clientes pelo sistema, temos as telas de cadastro de novos clientes, edição, exclusão.

E no enviar email temos , localmente tem que configurar os arquivos do apache para funcionar, mas envia email pela função mail(), pegando os dados do cliente e enviando.

gerar_planilha.php contém a lógica de baixar os dados via excel.

Parar rodar a aplicação deve-se criar o banco, segue o sql em anexo para criar tabela, configurar o conexao.php caso precisar, e rodar no navegador localhost.



