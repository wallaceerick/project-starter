![Project Starter](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/logo.png)

## Sobre
*Project Starter* é um boilerplate simples para uma inicialização e desenvolvimento mais rápido de novos projetos, conta com recursos simples em Javascript e estilo pré-definidos de CSS utilizando Sass e Grunt.

## Suporte

![IE](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/icons/ie.png) | ![Chrome](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/icons/chrome.png) | ![Firefox](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/icons/firefox.png) | ![Safari](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/icons/safari.png) | ![Responsive](https://raw.githubusercontent.com/wallaceerick/project-starter/master/assets/images/icons/responsive.png)
--- | --- | --- | --- | --- | ---
IE 9+ ✔ | Latest ✔ | Latest ✔ | Latest ✔ | Latest ✔ | Not Yet ✗

## Módulos

Funcionamento dos recursos em Javascript e CSS.

Módulo | Status
------------ | -------------
Animate | ✓
Loader | ✓
Carousel | ✓
Dropdown | ✓
Mask | ✓
Validation | ✓
Modal | ✓
Tabs | ✓
Accordion | ✗

## Documentação

Rápida explicação sobre como usar e manter os assets do projeto.

## JS

Arquivos externos devem ser nomeados com um underline antes do nome para ficar claro o entendimento na hora de fazer o bundle pelo .Net.
Todas as configurações de JS, devem estar no arquivo '_custom.js', ainda neste arquivo, os seletores dos elementos que terão ações com JS, devem ser declarados e cacheados no início do arquivo.
Todos os seletores devem conter o prefixo 'js' na classe, para separar todas as interações do JS das classes de estilização do CSS.

Exemplo:
```bash
var sliderPreview       = $('.js-preview'),
    sliderFeatures      = $('.js-features')
```

## CSS

Os arquivos de CSS, assim como suas Classes e IDs devem ser escritos em inglês.
Para as classes, separa as palavras por hífen e manter os caracteres em lowercase (.page-content). Já os IDs, devem ser escrito em Capitalize, sem separação de palavras (pageContent), caso as classes e IDs sejam uma única palavra, manter o padrão em lowercase (.content).

* `_application.scss`: Arquivo com todas as chamadas de estilo do site.
* `_mobile.scss`: Estilos da versão mobile do site.

### Mixins
Criados para uso global de uma propriedade através do `@include`, evitando o uso desnecessário de prefixos para browsers.

Exemplo: `_background-size.scss`

```bash
@mixin background-size($value) {
    -webkit-background-size: $value;
    -moz-background-size: $value;
    -o-background-size: $value;
    background-size: $value;
}
```

Chamada:
```bash
selector {
    @include background-size(100%, 100%);
}
```

### Modules
Estrutura do projeto, onde se encontram os arquivos de estilos modularizados, que servem como includes, tais como: Header, Footer, Sidebar e etc.

* `_reset.scss`: Reset dos estilos do projeto.
* `_variables.scss`: Variáveis usas em todos os arquivos do projeto.
* `_helpers.scss`: Atalhos de classes que são usadas no projeto.
* `_fonts.scss`: Chamadas das fonts.
* `_header.scss`: Estilo do header.
* `_footer.scss`: Estilo do footer.
* `_sidebar.scss`: Estilo da Sidebar.

#### Pages
Estilos específicos para cada página do projeto.

* `_global.scss`: Estilos para módulos que são usados em várias sessões do site, como botões.
* `_home.scss`: Página Inicial.

#### Partials
Recursos de estilização para secões que utilizam alguma interação via javascript, como: Slider, Accordion, Tabs e etc.

* `_carousel.scss`: Estilo dos sliders do projeto. 
* `_tabs.scss`: Estilo do conteúdo dentro de abas.
* `_loader.scss`: Estilo do loader animado.

#### Sprites
Gerados dinâmicamente pelo grunt, com as propriedades e classes de cada objeto.

* `_sprite.scss`: Imagens diversas do site, que tem um tamanho bom para estar no arquivo de sprite.


## Changelog
 * *2016-19-05*   v0.0.0.1   Initial Files.