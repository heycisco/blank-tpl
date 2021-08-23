# Структура для ускоренного старта нового проекта

## Запуск Gulp

Установить все необходимые модули:

```sh
npm i
```

Установить gulp

```sh
npm i gulp-cli
```

Запустить gulp

```sh
gulp
```

## Особености

Исходники находятся в: **\_src**

Скомпилированное в: **build**

Функционал для wordpress темы в: **\_src/php**

Файлы, начинающиеся с двойного подчеркивания или z\_\_ не копируются в build.

При сборке для wordpress в css исправляются url и в js "$" заменяется на "jQuery".

При компиляции финальной компиляции проекта в **gulpfile.js** нужно раскомментировать функции:
сжатие изображений, минификация кода, группировка медизапросов, добавление вендорных префиксов, замена img на picture с дублированием картинок в webp.

## Стуктура файлов

```shell
|************************************************************************************
|   .gitignore # Игнорируем node_modules
|   gulpfile.js # Основные параметры компилятора
|   package.json # Информация о проекте и установленные плагины
|   wp-replace.json # Автозамены для wordpress
|
|
+---_src # Рабочие исходники проекта
|   |   404.html
|   |   category.html
|   |   favicon.ico
|   |   index.html
|   |   page.html
|   |   search.html
|   |   single-post.html
|   |
|   +---css
|   |   |   style.scss # Подключение всех использующихся фрагментов стиля
|   |   |   __footer.scss
|   |   |   __global-effects.scss # Эффекты для всего сайта (например вид скроллбара)
|   |   |   __header.scss
|   |   |   __main-content.scss # Общие стили контентной части между header и footer
|   |   |   __styles.scss # Всё, что никуда не всунешь
|   |   |
|   |   +---components # Различные повторяющиеся вставки
|   |   |       __comments.scss # Комментарии
|   |   |       __menu-main.scss # Главное меню
|   |   |       __post-category-nav.scss # Навигационное меню постов и записей
|   |   |       __searchform.scss # Поисковые поля (страница результатов в parts)
|   |   |
|   |   +---defs # Глобальные параметры проекта
|   |   |       __defs.scss # Общий макет
|   |   |       __nullstyle.scss # Обнуление стилей юзерагента
|   |   |       __vars.scss # Переменные (цвета, отступы, брейкпоинты)
|   |   |
|   |   \---parts # Области сайта по стилю выдачи контента
|   |           __404.scss # 404 страница
|   |           __article.scss # Отдельная запись (пост)
|   |           __category.scss # Выдача списка записей
|   |           __home.scss # Домашняя страница
|   |           __page.scss # Отдельная страница (исключая домашнюю)
|   |           __search.scss # Страница результатов поиска
|   |
|   +---fonts # Подключенные локальные шрифты
|   |       OpenSans-Regular.eot
|   |       OpenSans-Regular.ttf
|   |       OpenSans-Regular.woff
|   |
|   +---html
|   |   |   __404.html
|   |   |   __category.html
|   |   |   __homepage.html
|   |   |   __page.html
|   |   |   __search.html
|   |   |   __single-post.html
|   |   |
|   |   +---components
|   |   |       __article-in-category.html # Вид каждого поста на странице категории
|   |   |       __comments.html # Шаблон комментов
|   |   |       __menu-first.html # Первое меню
|   |   |       __menu-second.html # Второе меню
|   |   |       __searchform.html # Формы поиска
|   |   |
|   |   \---static # Общие для всех страниц сайта области
|   |           z__grid.html # Сетка для контроля вёрстки
|   |           __branding.html # Логотип, название сайта
|   |           __copyright.html # Копирайт
|   |           __footer.html # Подвал сайта
|   |           __header-meta.html # Мета-теги в head
|   |           __header.html # Шапка сайта
|   |           __sidebar.html # Боковая область
|   |
|   +---img # При компиляции все изображения дублируются в webp и сжимаются
|   |   +---branding
|   |   |       logo.png
|   |   |
|   |   \---placeholders # Шаблонные картинки для начальной вёрстки
|   |
|   +---js # Все файлы (кроме jQuery) будут минифицированы и собраны в один файл
|   |       jquery-1.12.4.js # Wordpress использует эту версию
|   |       script.js # Подключение всех файлов скриптов
|   |       __const.js # Статичные переменные (const)
|   |       __functions.js # Частоиспользуемые действия
|   |
|   \---php # Исходники для функционала wordpress темы
|       |   404.php
|       |   archive.php
|       |   attachment.php
|       |   author.php
|       |   category.php # Страница категории постов
|       |   comments.php
|       |   entry-footer.php
|       |   entry-meta.php
|       |   entry.php # Проверка одиночная запись изи на странице категории
|       |   footer.php
|       |   functions.php
|       |   header.php
|       |   index.php
|       |   main.css # Скомпилированные и сжатые стили из _src
|       |   nav-below-single.php
|       |   nav-below.php
|       |   page-full-width.php
|       |   page-home.php # Главная страница
|       |   page.php # Другие отдельные страницы
|       |   screenshot.jpg
|       |   search.php
|       |   searchform.php
|       |   sidebar.php
|       |   single.php
|       |   style.css # Описание темы и подключение main.css
|       |   tag.php
|       |
|       +---img
|       |       no-img.png # Заполнитель при отсутствии картинки поста
|       |
|       +---inc # Регулярные вставки
|       |       branding.php
|       |       copyright.php
|       |       grid-dev.php # Сетка для контроля вёрстки
|       |       menu-footer.php
|       |       menu-main.php
|       |       meta.php # Мета-теги в head
|       |       post-prev.php # Шаблон превью поста в категории
|       |       post-single.php # Шаблон одиночного поста
|       |
|       +---js # Стандартные wordpress скрипты
|       |       videos.js
|       |       wp.js
|       |
|       \---languages # Перевод темы
|               ru_RU.mo
|               ru_RU.po
|               starchenkov-dev.pot
|
|
+---dist # Скомпилированный проект
|   |   404.html
|   |   category.html
|   |   favicon.ico
|   |   index.html
|   |   page.html
|   |   search.html
|   |   single-post.html
|   |
|   +---css # scss файлы минифицируются и объединяются в один
|   |       style.css
|   |
|   +---fonts # Структура файлов как _src
|   |
|   +---img  # Структура файлов как _src
|   |
|   \---js # js минифицируются и объединяются в один (кроме jQuery)
|           jquery-1.12.4.js
|           script.js
|
|
+---wp_theme # Скомпилированная тема wordpress
|   \---proj # Название темы задаётся в package.json
|       |   404.php
|       |   archive.php
|       |   attachment.php
|       |   author.php
|       |   category.php
|       |   comments.php
|       |   entry-footer.php
|       |   entry-meta.php
|       |   entry.php
|       |   footer.php
|       |   functions.php
|       |   header.php
|       |   index.php
|       |   main.css
|       |   nav-below-single.php
|       |   nav-below.php
|       |   page-full-width.php
|       |   page-home.php
|       |   page.php
|       |   screenshot.jpg
|       |   search.php
|       |   searchform.php
|       |   sidebar.php
|       |   single.php
|       |   style.css
|       |   tag.php
|       |
|       +---fonts
|       |       [files]
|       |
|       +---images
|       |   +---branding
|       |   |       logo.png
|       |   |
|       |   \---placeholders
|       |           [files]
|       |
|       +---inc
|       |       branding.php
|       |       copyright.php
|       |       grid-dev.php
|       |       menu-footer.php
|       |       menu-main.php
|       |       meta.php
|       |       post-prev.php
|       |       post-single.php
|       |
|       \---js
|               script.js
|               videos.js
|               wp.js
|************************************************************************************
```

#### Связаться со мной если возникли вопросы

[Telegram](https://telegram.me/starchenkov)

[E-mail](mailto:mail@starchenkov.pro)
