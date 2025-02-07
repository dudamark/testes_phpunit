# testes_phpunit
Estudos de implementação de testes usando o PHPUnit

# Explicação
Foram criadas duas classes com métodos de teste que recebem dados específicos a partir de data providers. Utilizei alguns métodos do ciclo de vida dos testes, como o setUp(), que inicializa dados antes de executar o teste em si. Também fiz várias otimizações nos códigos de teste, de modo a torná-los mais simples e legíveis.

Durante o processo, implementei dois padrões que são, basicamente, dois nomes para a mesma abordagem: arrange, act & assert e given, when, then. Estudei tais padrões e, a partir deles, conheci o conceito de classes de equivalência e análise dos valores de limite/fronteira. Esses conceitos foram fundamentais para decidir o que era necessário testar no nosso projeto, facilitando a criação dos data providers.

# Requisitos
• PHP 8.2
• Composer
• PHPUnit versão 10

# Ambiente
Para configurar o ambiente de desenvolvimento, utilize os seguintes comandos:

Execute o comando para atualizar o autoload do Composer: 
# composer dumpautoload

Após isso, instale o PHPUnit com o seguinte comando:
# composer require --dev phpunit/phpunit ^10

#Executar os testes
Para executar os testes, use o seguinte comando:
# vendor/bin/phpunit --testdox --colors=always | tee logs/phpunit.log
sse comando irá rodar os testes, exibindo o resultado de forma legível e colorida, além de salvar o log dos testes no arquivo logs/phpunit.log.
