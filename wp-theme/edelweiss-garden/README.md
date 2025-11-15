# Edelweiss Garden WordPress Theme

Современная WordPress тема для детского сада "Эдельвейс" с использованием Tailwind CSS.

## Описание

Одностраничная тема WordPress, конвертированная из React приложения. Сохраняет весь оригинальный дизайн и функциональность, но использует классический стек PHP + HTML + Tailwind CSS для максимальной совместимости с WordPress.

## Особенности

- ✅ Полностью адаптивный дизайн
- ✅ Современный UI с использованием Tailwind CSS
- ✅ Мобильное меню с плавной анимацией
- ✅ Плавная прокрутка по якорным ссылкам
- ✅ Оптимизированные изображения
- ✅ SEO-дружественная структура
- ✅ Быстрая загрузка страниц

## Требования

- WordPress 6.0 или выше
- PHP 8.1 или выше
- Поддержка JavaScript в браузере

## Установка

### Способ 1: Через админ-панель WordPress

1. Скачайте или клонируйте репозиторий
2. Заархивируйте папку `edelweiss-garden` в ZIP файл
3. В WordPress перейдите в **Внешний вид → Темы → Добавить новую → Загрузить тему**
4. Выберите ZIP файл и нажмите **Установить**
5. Активируйте тему

### Способ 2: Через FTP/SFTP

1. Загрузите папку `edelweiss-garden` в `/wp-content/themes/` вашего WordPress сайта
2. В админ-панели WordPress перейдите в **Внешний вид → Темы**
3. Найдите тему "Edelweiss Garden" и нажмите **Активировать**

### Способ 3: Через командную строку

```bash
# Перейдите в директорию тем WordPress
cd /path/to/wordpress/wp-content/themes/

# Скопируйте тему
cp -r /path/to/edelweiss-garden ./

# Или используйте git
git clone <repository-url> edelweiss-garden
```

## Структура темы

```
edelweiss-garden/
├── style.css                 # Заголовок темы (обязательный файл)
├── functions.php             # Функции темы
├── index.php                 # Главный шаблон
├── header.php                # Шапка сайта
├── footer.php                # Подвал сайта
├── template-parts/           # Части шаблонов
│   ├── hero.php             # Секция Hero
│   ├── about.php            # Секция "О нас"
│   ├── programs.php         # Секция "Программы"
│   ├── reviews.php          # Секция "Отзывы"
│   └── contacts.php         # Секция "Контакты"
├── assets/
│   ├── css/
│   │   └── custom.css       # Кастомные стили
│   ├── js/
│   │   ├── main.js          # Основной JavaScript
│   │   └── mobile-menu.js  # Мобильное меню
│   └── images/              # Изображения
│       ├── logo.png
│       ├── hero-desktop.jpg
│       ├── hero-mobile.jpg
│       ├── classroom.jpg
│       ├── building.jpg
│       ├── language-learning.jpg
│       ├── music-class.jpg
│       └── speech-therapy.jpg
└── README.md                 # Этот файл
```

## Настройка

### Изменение контента

Контент можно редактировать напрямую в PHP файлах:

- **Контакты**: `template-parts/contacts.php`
- **Программы**: `template-parts/programs.php`
- **Отзывы**: `template-parts/reviews.php`
- **О нас**: `template-parts/about.php`
- **Hero секция**: `template-parts/hero.php`

### Изменение цветов

Цвета настраиваются через CSS переменные в `assets/css/custom.css`:

```css
:root {
    --primary: 347 42% 39%;        /* Основной цвет */
    --secondary: 28 88% 58%;       /* Вторичный цвет */
    --accent: 142 55% 45%;         /* Акцентный цвет */
    /* ... */
}
```

### Замена изображений

Замените изображения в папке `assets/images/`, сохранив те же имена файлов, или обновите пути в PHP файлах.

## Использование Tailwind CSS

Тема использует Tailwind CSS через CDN. Для кастомизации:

1. **Вариант 1**: Используйте инлайн стили в PHP файлах (как сейчас)
2. **Вариант 2**: Скомпилируйте Tailwind локально и подключите скомпилированный файл
3. **Вариант 3**: Используйте Tailwind Play CDN для кастомизации

### Локальная компиляция Tailwind

Если хотите использовать локальную версию Tailwind:

1. Установите зависимости:
```bash
npm install -D tailwindcss
```

2. Создайте `tailwind.config.js`:
```js
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

3. Скомпилируйте CSS:
```bash
npx tailwindcss -i ./assets/css/input.css -o ./assets/css/output.css --watch
```

4. Обновите `functions.php` для подключения скомпилированного файла вместо CDN.

## Кастомизация для WordPress

### Добавление WordPress функций

Вы можете расширить функциональность темы, добавив в `functions.php`:

- Поддержку виджетов
- Кастомные типы постов
- Интеграцию с плагинами
- Настройки через Customizer

### Пример: Добавление поддержки виджетов

```php
// В functions.php
function edelweiss_garden_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Widget Area',
        'id' => 'footer-widgets',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'edelweiss_garden_widgets_init');
```

## Поддержка браузеров

- Chrome (последние 2 версии)
- Firefox (последние 2 версии)
- Safari (последние 2 версии)
- Edge (последние 2 версии)
- Мобильные браузеры (iOS Safari, Chrome Mobile)

## Производительность

Тема оптимизирована для быстрой загрузки:

- Минимальные зависимости
- Оптимизированные изображения
- Ленивая загрузка изображений
- Минифицированный CSS/JS (рекомендуется)

## Обновления

Для обновления темы:

1. Сделайте резервную копию текущей темы
2. Замените файлы новой версией
3. Проверьте кастомизации (если были)

## Поддержка

При возникновении проблем:

1. Проверьте версию WordPress и PHP
2. Убедитесь, что все файлы загружены корректно
3. Проверьте консоль браузера на ошибки JavaScript
4. Проверьте логи PHP на сервере

## Лицензия

GNU General Public License v2 or later

## Авторы

- ИП Жамалуллайла Медина Сайд-Эмидиновна
- Детский сад «Эдельвейс»

## Версия

1.0.0

