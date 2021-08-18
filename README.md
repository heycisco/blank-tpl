# Структура для ускоренного старта нового проекта

## Запуск Gulp

Установить все необходимые модули:

```sh
npm i
```

Запустить gulp

```sh
gulp
```


## Особености

Исходники находятся в: **_src**

Скомпилированное в: **build**

Функционал для wordpress темы в: **_src/php**

Файлы, начинающиеся с двойного подчеркивания или z__ не копируются в build.

При сборке для wordpress в css исправляются url и в js "$" заменяется на "jQuery".

При компиляции финальной компиляции проекта в **gulpfile.js** нужно раскомментировать функции:
 сжатие изображений, минифмкация кода, группировка медизапросов, добавление вендорных префиксов, замена img на picture с дублированием картинок в webp.

## Стуктура файлов

```
PROJECT FOLDER
|   gulpfile.js
|   package.json
|   
\---_src
    |   category.html
    |   favicon.ico
    |   index.html
    |   single-post.html
    |   
    +---css
    |   |   style.scss
    |   |   __styles.scss
    |   |   
    |   +---components
    |   |       __footer.scss
    |   |       __header.scss
    |   |       __menu.scss
    |   |       
    |   +---defs
    |   |       __defs.scss
    |   |       __nullstyle.scss
    |   |       __vars.scss
    |   |       
    |   \---parts
    |           __article.scss
    |           __category.scss
    |           __homepage.scss
    |           
    +---fonts
    |       OpenSans-Regular.eot
    |       OpenSans-Regular.ttf
    |       OpenSans-Regular.woff
    |       
    +---html
    |   |   __category.html
    |   |   __homepage.html
    |   |   __single-post.html
    |   |   
    |   +---article
    |   |       __article-content.html
    |   |       __article-footer.html
    |   |       __article-header.html
    |   |       __article-in-category.html
    |   |       
    |   +---components
    |   |       __menu.html
    |   |       
    |   +---inline-svg
    |   \---static
    |           z__grid.html
    |           __branding.html
    |           __copyright.html
    |           __footer.html
    |           __header-meta.html
    |           __header.html
    |           
    +---img
    |   +---branding
    |   |       logo.png
    |   |       
    |   \---placeholders
    |           200x130.jpg
    |           200x130.png
    |           320x210.jpg
    |           320x210.png
    |           480x320.jpg
    |           480x320.png
    |           48x48.jpg
    |           48x48.png
    |           88x145.jpg
    |           88x145.png
    |           
    +---js
    |   |   jquery-1.12.4.js
    |   |   script.js
    |   |   __const.js
    |   |   __functions.js
    |   |   
    |   \---components
    |           __menu.js
    |           
    \---resources
```

#### Связаться со мной если возникли вопросы
[Telegram](https://telegram.me/starchenkov)

[E-mail](mailto:mail@starchenkov.pro)
