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


```cmd
ROOT
|
|   .gitignore <!--- and here -->
|   gulpfile.js // Тут настройки компилятора
|   package.json [comment]: <> (This is a comment, it will not be included)
|   README.md [//]: <> (This is also a comment.)
|   wp-replace.json [//]: # (This may be the most platform independent comment)
|   
+---dist
|   |   404.html
|   |   category.html <тест тест>
|   |   favicon.ico *test more*
|   |   index.html **one more**
|   |   page.html 
|   |   search.html
|   |   single-post.html
|   |   
|   +---css
|   |       style.css
|   |       
|   +---fonts
|   |       OpenSans-Regular.eot
|   |       OpenSans-Regular.ttf
|   |       OpenSans-Regular.woff
|   |       
|   +---img
|   |   +---branding
|   |   |       logo.png
|   |   |       
|   |   \---placeholders
|   |           *.jpg
|   |           *.png
|   |           
|   \---js
|           jquery-1.12.4.js
|           script.js
|           
\---_src
    |   404.html
    |   category.html
    |   favicon.ico
    |   index.html
    |   page.html
    |   search.html
    |   single-post.html
    |   
    +---css
    |   |   style.scss
    |   |   __footer.scss
    |   |   __global-effects.scss
    |   |   __header.scss
    |   |   __main-content.scss
    |   |   __styles.scss
    |   |   
    |   +---components
    |   |       __comments.scss
    |   |       __menu-main.scss
    |   |       __post-category-nav.scss
    |   |       __search.scss
    |   |       __searchform.scss
    |   |       
    |   +---defs
    |   |       __defs.scss
    |   |       __nullstyle.scss
    |   |       __vars.scss
    |   |       
    |   \---parts
    |           __404.scss
    |           __article.scss
    |           __category.scss
    |           __home.scss
    |           __page.scss
    |           __search.scss
    |           
    +---fonts
    |       OpenSans-Regular.eot
    |       OpenSans-Regular.ttf
    |       OpenSans-Regular.woff
    |       
    +---html
    |   |   __404.html
    |   |   __category.html
    |   |   __homepage.html
    |   |   __page.html
    |   |   __search.html
    |   |   __single-post.html
    |   |   
    |   +---components
    |   |       __article-in-category.html
    |   |       __comments.html
    |   |       __menu-first.html
    |   |       __menu-second.html
    |   |       __searchform.html
    |   |       
    |   +---js
    |   \---static
    |           z__grid.html
    |           __branding.html
    |           __copyright.html
    |           __footer.html
    |           __header-meta.html
    |           __header.html
    |           __sidebar.html
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
    \---php
        |   404.php
        |   archive.php
        |   attachment.php
        |   author.php
        |   category.php
        |   comments.php
        |   entry-footer.php
        |   entry-meta.php
        |   entry.php
        |   footer.php
        |   functions.php
        |   header.php
        |   index.php
        |   main.css
        |   nav-below-single.php
        |   nav-below.php
        |   page-full-width.php
        |   page-home.php
        |   page.php
        |   screenshot.jpg
        |   search.php
        |   searchform.php
        |   sidebar.php
        |   single.php
        |   style.css
        |   tag.php
        |   
        +---img
        |       no-img.png
        |       test-img.jpg
        |       
        +---inc
        |       branding.php
        |       copyright.php
        |       grid-dev.php
        |       menu-footer.php
        |       menu-main.php
        |       meta.php
        |       post-prev.php
        |       post-single.php
        |       
        +---js
        |       videos.js
        |       wp.js
        |       
        \---languages
                ru_RU.mo
                ru_RU.po
                starchenkov-dev.pot
```

#### Связаться со мной если возникли вопросы
[Telegram](https://telegram.me/starchenkov)

[E-mail](mailto:mail@starchenkov.pro)
