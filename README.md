
## Особенности сборки
* используется препроцессор [SCSS](https://sass-lang.com/)
* транспайлер [Babel](https://babeljs.io/) для поддержки современного JavaScript (ES6) в браузерах
* генератор шрифтов в форматы woff, woff2
* генератор favicons
* сжатие изображений и конвертация в webp
* жёсткий кодгайд

## Установка
* установи [NodeJS](https://nodejs.org/en/) (если требуется) и [Yarn](https://yarnpkg.com/en/docs/install)
* скачай сборку с помощью [Git](https://git-scm.com/downloads): ```git clone ssh://ferma@79.174.12.7/var/www/assemblage/data/www/assemblage.targate.ru
```
* установи ```gulp``` глобально: ```yarn global add gulp-cli```
* перейди в скачанную папку со сборкой: ```cd assemblage```
* скачай необходимые зависимости: ```yarn```
* чтобы начать работу, в OpenServer создай домен assemblage.loc, путь \assemblage\dist
* введи команду: ```yarn run dev``` (режим разработки)
* чтобы собрать проект, введи команду ```yarn run build``` (режим сборки)

Если всё сделано правильно, должен открыться браузер с локальным сервером

## Файловая структура

```
assemblage
├── dist
├── gulp-tasks
├── src
│   ├── fonts
│   ├── img
│   ├── js
│   ├── plugins
│   ├── scss
│   ├── views
│   └── .htaccess
├── gulpfile.babel.js
├── package.json
├── robots.txt
├── .babelrc.js
├── .stylelintrc
├── .stylelintignore
└── .gitignore
```

* Корень папки:
    * ```.babelrc.js``` — настройки Babel
    * ```.gitignore``` – запрет на отслеживание файлов Git'ом
    * ```.stylelintrc``` — настройки Stylelint
    * ```.stylelintignore``` – запрет на отслеживание файлов Stylelint'ом
    * ```gulpfile.babel.js``` — настройки Gulp
    * ```package.json``` — список зависимостей

* Папка ```src``` - используется во время разработки:
    * шрифты: ```src/fonts```
    * изображения: ```src/img```
    * JS-файлы: ```src/js```
    * страницы сайта: ```src/views/pages```
    * плагины: ```src/plugins```
    * SCSS-файлы: ```src/scss```
    * PHP-файлы: ```src/views```
    * конфигурационный файл веб-сервера Apache с настройками [gzip](https://habr.com/ru/post/221849/) (сжатие без потерь): ```src/.htaccess```

* Папка ```dist``` - папка, из которой запускается локальный сервер для разработки (при запуске ```yarn run dev```)

* Папка ```gulp-tasks``` - папка с Gulp-тасками

## Команды
* ```yarn run lint:style``` - проверить SCSS-файлы. Для VSCode необходимо установить [плагин](https://marketplace.visualstudio.com/items?itemName=shinnn.stylelint). Для WebStorm 
или PHPStorm необходимо включить Stylelint в ```Languages & Frameworks - Style Sheets - Stylelint``` (ошибки будут исправлены автоматически при сохранении файла)

* ```yarn run lint:style --fix``` - исправить ошибки в SCSS-файлах
* ```yarn run dev``` - запуск сервера для разработки проекта
* ```yarn run build``` - собрать проект с оптимизацией без запуска сервера
* ```yarn run build views``` - скомпилировать Pug-файлы
* ```yarn run build styles``` - скомпилировать SCSS-файлы
* ```yarn run build scripts``` - собрать JS-файлы
* ```yarn run build images``` - собрать изображения
* ```yarn run build webp``` - сконвертировать изображения в формат ```.webp```
* ```yarn run build sprites```- собрать спрайты
* ```yarn run build fontgen``` - собрать шрифты
* ```yarn run build favicons``` - собрать фавиконки
* ```yarn run build gzip``` - собрать конфигурацию Apache


## Рекомендации по использованию

### Страницы проекта
* страницы проекта находятся в папке ```src/views/pages```
    * главная страница: ```src/views/index.php```

### Шрифты
* шрифты находятся в папке ```src/fonts```
    * шрифты подключаются в файл ```src/scss/base/_fonts.scss```
    * шрифты конвертируются в формат woff и woff2, для этого нужно установить глобально через cmd (npm install --save-dev gulp-ttf2woff, npm install --save-dev gulp-ttf2woff2) 

### Изображения 
* изображения находятся в папке ```src/img```
    * изображение для генерации фавиконок должно находиться в папке ```src/img/favicon``` и иметь размер не менее ```1024px x 1024px```


    * изображения автоматически конвертируются в формат ```.webp```. Подробная информация по использованию [тут](https://vk.com/@vk_it-webp).

    <picture>
        <source 
            srcset="/img/trash/.webp" 
            type="image/webp"
        />
        <source 
            srcset="/img/trash/.jpg" 
            type="image/jpg"
        />
        <img class="coverIe"
            style="object-fit: cover" 
            width="100%" 
            height="100%"
            src="/img/trash/.jpg" 
            alt="" 
            loading="lazy"
        />
    </picture>

    * noWebp.js проверка на поддержку браузерами  формата webp


    .footer {
        background: url($img_url + '/bg-footer.webp') {
                    color:#F1F1F1;
                    repeat: no-repeat;
                    position:center;
        }

        html.noWebp & {
            background: url($img_url + '/bg-footer.png') {
                        color:#F1F1F1;
                        repeat: no-repeat;
                        position:center;
            }
        }
    }

### Сторонние библиотеки
* все сторонние библиотеки устанавливаются в папку ```src/plugins```

# БЭМ 

* (имя)-блока  --CamelCase--> блок(Имя)

(search)-form --CamelCase--> form(Search)

* (имя)-блока__(имя)-элемента

(search)-form__input --CamelCase--> form(Search)__input

* (имя)-блока_(имя)-модификатора

(search-form)_focused --CamelCase--> form(Search)_focused

* (имя)-блока__(имя)-элемента_(имя)-модификатора

(search)-form__button_disabled --CamelCase--> form(Search)__button_disabled

* (имя)-блока_(имя)-модификатора_значение-модификатора

(search)-form_theme_islands --CamelCase--> form(Search)_theme_islands

* (имя)-блока__(имя)-элемента_(имя)-модификатора_значение-модификатора

(search)-form__button_theme_islands --CamelCase--> form(Search)__button_theme_islands