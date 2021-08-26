# Time Read :: Plugin para Meduza Static Site Generator

Calcula o tempo de leitura de páginas.


## Instalação
O método de instalação recomendado é utilizando o [Composer](https://getcomposer.org):

```sh
composer require meduza-static-site-generator/meduza-plugin-time-read
```

## Configuração
A configuração do plugin é bastante simples:

```yaml
## Configuração do plugin time-read

plugins:
  TimeRead:
    # Caminho relativo/absoluto para o inicializador do plugin.
    source: "./vendor/meduza-static-site-generator/meduza-plugin-time-read/TimeRead.php"
    # Quantidade de palavras lidas por minuto.
    # Use valores de 175 ~ 300 ppm
    # https://blogue.rbe.mec.pt/quantas-palavras-por-minuto-le-um-2282282
    wordsPerMinute: 200
```

Fornecemos um arquivo de configuração *time-read.yml* com todas as opções documentadas na raiz do projeto. Inclua as configurações ou importe com ```import``` no seu arquivo de configurações.

## Uso
**Time Read** fornece o tempo de leitura, em minutos, para ser usado nos templates do tema escolhido (desde que o tema tenha suporte a isso).

Basicamente, o plugin acrescenta ao *frontmatter* de cada página uma chave ```timeRead``` que contém um número inteiro equivalente ao número de minutos de leitura estimados para o conteúdo da página.

## Como o cálculo funciona
Atualmente, o plugin conta o número de palavras da seção *markdown* de cada página e divide pelo valor configurado em ```wordsPerMinute```, arredondando para o inteiro superior.

## Como contribuir
Para contribuir com o projeto, faça o seguinte:

- Crie um *fork*;
- Clone o *fork* e crie um novo *branch* para a sua contribuição;
- Envie suas alterações para o *fork*;
- Crie um *pull request*.

Será interessante você criar um *issue* no repositório oficial para a sua alteração e referenciá-la no nome do seu *branch* e nos *commits*. Também referencie seu *pull request* nas *issue*. Isso agilizará a análise da sua contribuição.

## Licença

**Time Read** é licenciado sob a [MIT Licence](https://github.com/meduza-static-site-generator/meduza-plugin-time-read/blob/main/LICENSE)